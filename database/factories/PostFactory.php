<?php

use Faker\Factory;
use Faker\Generator as Faker;
use LaraCurso\Model\Post;

$faker = Factory::create('pt_BR');

$factory->define(Post::class, function (Faker $faker) {

    $title = $faker->paragraph(1);

    return [
        'uri' => str_slug($title),
        'title' => $title,
        'subtitle' => $faker->paragraph(3),
        'content' => $faker->paragraph(5),
        'author' => 1,
    ];
});
