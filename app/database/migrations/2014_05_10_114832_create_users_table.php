<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		// Create the table.
        Schema::create('users', function($table) {
            $table->increments('id');
            $table->integer('user_type_id')->unsigned();
			$table->integer('city_id')->unsigned();
            $table->string('name', 128);
            $table->string('email', 128);
            $table->string('password', 256);
            $table->string('contact_no', 20);

            // Foreign keys
			$table->foreign('user_type_id')->references('id')->on('user_types');
            $table->foreign('city_id')->references('id')->on('cities');

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
		// Drop the table
		Schema::drop('users');
	}

}
