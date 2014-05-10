<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRequestTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        // Create the table.
        Schema::create('requests', function($table) {
            $table->increments('id');
			$table->integer('asset_id')->unsigned();
			$table->integer('from_request_id')->unsigned();
			$table->integer('to_request_id')->unsigned();
            $table->date('date_and_time');

            // Foreign keys
            $table->foreign('from_request_id')->references('id')->on('users');
            $table->foreign('to_request_id')->references('id')->on('users');

            // Laravel columns
            $table->timestamps();
            $table->softDeletes();
        });
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		// Drop table
		Schema::drop('requests');
	}

}
