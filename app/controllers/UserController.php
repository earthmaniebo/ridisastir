<?php

class UserController extends \BaseController {
	
	public function __construct() {
        $this->beforeFilter('csrf', array('on'=>'post'));
    }

	public function index()
	{
		//
	}

	public function postAdd()
	{
		// Get all input from user.
        $input = Input::except('register-btn');
        
        // Validate the input.
        $validation = Validator::make($input, User::$add_rules);

        // Check if validation failed.
        if($validation->fails()) {
			return Redirect::to('/')->withErrors($validation)->withInput();            
        } else {
        	// In the User model.
            $user = new User;
            $date = new DateTime();

            $user->user_type_id = (int)$input['user_type_id'];
            $user->city_id	    = (int)$input['city_id'];
            $user->name    		= $input['name'];
            $user->email 	    = $input['email'];
            $user->password     = Hash::make($input['password']);
            $user->contact_no   = $input['contact_no'];

            $user->created_at   = $date->getTimestamp();
            $user->updated_at   = $date->getTimestamp();
            $user->save();

            return Redirect::to('browse')->with('success', 'A new user was added!');
        }
	}

	public function postLogin()
	{
		$credentials = Input::except('login-btn');
        if (Auth::attempt(array(
            'email' => $credentials['login_email'], 
            'password' => $credentials['login_password']
        ))) {
            $login_user = User::join('user_types', 'users.user_type_id', '=', 'user_types.id')->join('cities', 'users.city_id', '=', 'cities.id')->select('users.id', 'city_id', 'city_name', 'name', 'email', 'user_type', 'contact_no', 'user_type_id')->where("email", "=", $credentials['login_email'])->get();

            foreach ($login_user as $user) {
                Session::put('user_id', $user["id"]);
                Session::put('email', $user["email"]);
                Session::put('name', $user["name"]);
                Session::put('city_name', $user["city_name"]);
                Session::put('user_type', $user["user_type"]);
            }
            return Redirect::to('browse/');
        } else {
            return Redirect::to('/');
        }
	}

	public function postLogout()
	{
		Auth::logout();
        Session::flush();
        return Redirect::to('/');
	}

    public function display($name)
    {
        $userid = "";
        $user = User::select('id', 'city_id', 'name', 'email', 'contact_no', 'user_type_id')->where("name", "=", $name)->get();
        
        foreach ($user as $user) {
            $userid = $user['id'];
        }

        $cities = City::all();
        $user_types = UserType::all();
        $depts = User::where("user_type_id", "=", '2')->get();
        $barangays = User::where("user_type_id", "=", '3')->get();
        $citizens = CitizenRequest::where("user_id", "=", Session::get('user_id'))->get();

        $assets = Asset::where("user_id", "=", $userid)->get();
        return View::make('user.display', compact('cities', 'user_types', 'depts', 'barangays', 'citizens', 'assets', 'name'));
    }
}
