<?php

use Carbon\Carbon;
use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(App\Models\Cost::class, function (Faker $faker) {
    return [
        'title' => $faker->name,
        'amount' => $faker->randomNumber,
        'description' => $faker->sentence,
        'user_id' => function () {
            return factory('App\Models\User')->create()->id;
        },
        'seller_id' => function() {
            return factory('App\Models\Seller')->create()->id;
        },
        'date'      => Carbon::now()
    ];
});
