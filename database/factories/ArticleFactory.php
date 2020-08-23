<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Article;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

$factory->define(Article::class, function (Faker $faker) {

    $date = $faker->dateTimeBetween($start = '-1 years', $end = 'now');
    $name = $faker->unique()->sentence(3);
    $alias = Str::slug($name);

    return [
        'name' => $name,
        'alias' => $alias,
        'content' => $faker->text(800),
        'image_max' => 'http://placehold.it/770x340',
        'image_min' => 'http://placehold.it/350x320',
        'created_at' => $date,
        'updated_at' => $date
    ];

});
