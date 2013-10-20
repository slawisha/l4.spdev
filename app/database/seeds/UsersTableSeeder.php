<?php

class UsersTableSeeder extends Seeder {

	public function run()
	{
		// Uncomment the below to wipe the table clean before populating
		 DB::table('users')->truncate();

		$users = array(
			'username' => 'slawisha',
			'email' => 'slawisha@yahoo.com',
			'password' => Hash::make('arpeggio')
		);

		// Uncomment the below to run the seeder
		 DB::table('users')->insert($users);
	}

}
