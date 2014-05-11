<?php

class Request extends \Eloquent {

    // Table name
    protected $table = 'requests';

    // Columns that are only fillable
    protected $fillable = ['asset_id', 'from_request_id', 'to_request_id'];

    // Prevent direct manipulation.
    protected $guarded = ['id'];

    protected $softDelete = true;	
}