<?php

class RequestController extends \BaseController {

	public function index()
	{
		//
	}

	public function postCitizen()
	{
		// Get all input from user.
        $input = Input::except('request-citizen-btn');

    	// In the Citizen Request model.
        $citizen = new CitizenRequest;
        $date = new DateTime();

        $citizen->user_id	    = $input['user_id'];
        $citizen->name 	    	= $input['name'];
        $citizen->contact_no    = $input['contact_no'];
        $citizen->request    	= $input['request'];

        $citizen->created_at   = $date->getTimestamp();
        $citizen->updated_at   = $date->getTimestamp();
        $citizen->save();

        return Redirect::to('browse')->with('success', 'A citizen request was added!');
	}
}
