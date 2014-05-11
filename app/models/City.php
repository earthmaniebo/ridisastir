<?php

class City extends \Eloquent {

    // Table name
    protected $table = 'cities';
	
    // Columns that are only fillable
    protected $fillable = ['city_name'];

    // Prevent direct manipulation.
    protected $guarded = ['id'];

    protected $softDelete = true;
}