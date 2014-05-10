<?php

class Asset extends \Eloquent {

    // Table name
    protected $table = 'assets';

    // Columns that are only fillable
	protected $fillable = ['sku', 'user_id', 'request_id', 'name', 'status', 'a_condition', 'location'];

    // Prevent direct manipulation.
    protected $guarded = ['id'];
}