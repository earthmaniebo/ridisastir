<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCitizenRequestsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        // Create the table.
        Schema::create('citizen_requests', function($table) {
            $table->increments('id');
			$table->integer('user_id')->unsigned();
            $table->string('name', 128);
            $table->string('contact_no', 20);
            $table->string('request', 128);
            $table->date('date_and_time');

            // Foreign keys
            $table->foreign('user_id')->references('id')->on('users');

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
		Schema::drop('citizen_requests');
	}

}
