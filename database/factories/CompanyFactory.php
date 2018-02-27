<?php

use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application"s database.
|
*/

$factory->define(App\Models\Company::class, function (Faker $faker) {
    return [
        "name"       => $faker->unique()->company." Company",
        "address"       => $faker->address(),
        "tel"       => $faker->phoneNumber(),
        "email"          => $faker->unique()->safeEmail,
        "contact_name"   => $faker->name(),
        "active"     => $faker->boolean(85),
		'cat_company_types_id' => rand(1,20),
    ];
});
