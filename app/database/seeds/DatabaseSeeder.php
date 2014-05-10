<?php

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Eloquent::unguard();

		// $this->call('UserTableSeeder');
		$this->call('UserTableSeeder');

        $this->command->info('User table seeded!');
	}

}
class UserTableSeeder extends Seeder {

    public function run()
    {
        DB::table('user_types')->delete();

        User::create(array(
        	'user_type' => 'foo@bar.com',
        	'description' =>  => 'foo@bar.com'
        ));
    }

}
