<?php

class City extends \Eloquent {

    // Need to explicitly specify because laravel adds 's' to pluralize models
    protected $table = 'cities';
	protected $fillable = [];
}