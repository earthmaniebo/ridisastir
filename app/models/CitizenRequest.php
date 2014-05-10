<?php

class CitizenRequest extends \Eloquent {

    // Table name
    protected $table = 'citizen_requests';
	
    // Columns that are only fillable
    protected $fillable = ['user_id', 'name', 'contact_no', 'request'];

    // Prevent direct manipulation.
    protected $guarded = ['id'];
}