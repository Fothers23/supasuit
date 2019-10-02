<?php

    /** @var \Illuminate\Database\Eloquent\Factory $factory */
    use App\Cosplay;
    use Faker\Generator as Faker;
    use Illuminate\Support\Str;

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

    $factory->define(Cosplay::class, function (Faker $faker) {
        return [
            'name' => $faker->name,
            'created_at' => now(),
	        'image' => 'noimage.png',
	        'description' => 'This is a description',
            'price' => 50,
            'category' => 'other',
            'user_id' => 2
        ];
    });