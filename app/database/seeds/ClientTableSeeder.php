<?php
use Faker\Factory as Faker;

class ClientTableSeeder extends Seeder {

	public function run()
	{
		$faker = Faker::create();


		Client::create([
			'name' => 'YellowBall Screen-Saver'
		]);


		Client::create([
			'name' => 'YellowBall Portfolio'
		]);

		foreach(range(1, 20) as $index)
		{
			Client::create([
				'name' => $faker->company
			]);
		}
	}

}