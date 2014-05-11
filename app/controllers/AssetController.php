<?php

class AssetController extends \BaseController {

	public function index()
	{
		//
	}

	public function postAdd()
	{
		// Get all input from user.
        $input = Input::except('add-asset-btn');

        // Validate the input.
        $validation = Validator::make($input, Asset::$add_rules);

        // Check if validation failed.
        if($validation->fails()) {
			return Redirect::to('browse/')->withErrors($validation)->withInput();            
        } else {
        	// In the User model.
            $asset = new Asset;
            $date = new DateTime();

            $asset->sku 		= $input['sku'];
            $asset->user_id	    = (int)Session::get('user_id');
            $asset->request_id  = null;
            $asset->name 	    = $input['name'];
            $asset->status      = $input['status'];
            $asset->a_condition = $input['a_condition'];
            $asset->location    = Session::get('name') . ", " . Session::get('city_name');

            $asset->created_at   = $date->getTimestamp();
            $asset->updated_at   = $date->getTimestamp();
            $asset->save();

            return Redirect::to('browse')->with('success', 'A new user was added!');
        }
	}
}
