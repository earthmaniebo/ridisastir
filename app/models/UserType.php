<?php

class UserType extends \Eloquent {

    // Table name
    protected $table = 'user_types';
	
    // Columns that are only fillable
    protected $fillable = ['user_type', 'description'];

    // Prevent direct manipulation.
    protected $guarded = ['id'];

}