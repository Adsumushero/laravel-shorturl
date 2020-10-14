<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */
use Faker\Generator as Faker;
use App\Models\ShortenerUrl;
use Illuminate\Support\Str;


$factory->define(ShortenerUrl::class, function (Faker $faker) {
    return [
        'url' => $faker->url,
        'short_url' => $faker->unique(true)->regexify('[A-Za-z0-9]{7}')
    ];
});
