<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

$factory->define(App\User::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->safeEmail,
        'password' => bcrypt(str_random(10)),
        'remember_token' => str_random(10),
    ];
});


$factory->define(App\Flyers::class, function(Faker\Generator $faker){
	return [
			'name'		=>	$faker->name,
			'street' 	=> 	$faker->streetAddress,
			'city' 		=> 	$faker->city,
			'zip'		=>	$faker->postcode,
			'country'	=>	$faker->country,
			'state'		=>	$faker->state,
			'sale_price'=>	$faker->numberBetween(10000, 50000),
			'description'=> $faker->sentence(5)
			
		];
});
