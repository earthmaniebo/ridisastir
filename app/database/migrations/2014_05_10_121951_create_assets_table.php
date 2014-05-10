<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAssetsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        // Create the table.
        Schema::create('assets', function($table) {
            $table->increments('id');
            $table->string('sku', 128);
			$table->integer('user_id')->unsigned();
			$table->integer('request_id')->unsigned()->nullable();
            $table->string('name', 128);
            $table->string('status', 128);
            $table->string('condition', 128);
            $table->string('location', 128);
            $table->date('date_and_time');

            // Foreign keys
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('request_id')->references('id')->on('requests');

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
		Schema::drop('assets');
	}

}
