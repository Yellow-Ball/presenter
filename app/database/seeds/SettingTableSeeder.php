<?php

class SettingTableSeeder extends Seeder {

	public function run()
	{
		Setting::create([
				'key' => 'active',
				'value' => '1'
		]);
	}

}