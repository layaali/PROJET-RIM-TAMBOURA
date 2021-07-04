<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Books;
use Faker\Generator as Faker;

$factory->define(Books::class, function (Faker $faker) {
    return [

        'libelle'=> $this->faker->unique()->realText(50),
        'auteur'=> $this->faker->realText(20),
        'description'=>$this->faker->realText(20)

        //
    ];
});
