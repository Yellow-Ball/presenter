<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class DemoTableSeeder extends Seeder {

	public function run()
	{
		$faker = Faker::create();
		// $faker = new Faker\Generator();
		// $faker->addProvider( new Faker\Provider\DateTime( $faker ) );

		foreach(range(1, 1000) as $index)
		{
			Demo::create([
				'name' => $faker->sentence,
				'date' => $faker->dateTime()->format('Y-m-d H:i:s')
			]);
		}
	}

}