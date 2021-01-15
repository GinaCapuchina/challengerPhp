<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\App;
use App\Model;
use Faker\Generator as Faker;

$factory->define(App::class, function (Faker $faker) {
    return array(
        'nombre'=> $faker->name,
        'categoria'=>$faker->text,
        'precio'=> $faker->randomFloat(2, 0, 9999.99),
    );


});
