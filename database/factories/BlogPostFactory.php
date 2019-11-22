<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(\App\Models\BlogPost::class, function (Faker $faker) {
    $title = $faker->sentence(rand(3,8), true);
    $text = $faker->realText(rand(500, 2500));
    $isPublished = rand(1, 5) > 1;

    $createdAt = $faker->dateTimeBetween('-2 months', '-2 days');

    $posts = [
        'category_id' => rand(1,11),
        'user_id' => (rand(1,5) == 5) ? 1 : 2,
        'title' => $title,
        'slug' => str_slug($title),
        'content_raw' => $text,
        'content_html' => $text,
        'is_published' => $isPublished,
        'published_at' => $isPublished ? $faker->dateTimeBetween('-1 months', '-1 days') : null,
        'created_at' => $createdAt,
        'updated_at' => $createdAt
    ];

    return $posts;
});
