<?php

class UserTableSeeder extends Seeder {

	public function run()
	{
		User::create([
			'email' => 'admin@example.com',
			'password' => Hash::make('password')
		]);
	}

}