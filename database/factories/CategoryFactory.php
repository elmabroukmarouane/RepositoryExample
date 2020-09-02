<?php
use App\infrastructure\models\Category;
/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(Category::class, function (Faker $faker) {
    return [
        'name' => $faker->name(),
        'status' => $faker->numberBetween($min = 0, $max = 1),
        'comment' => $faker->paragraph($maxNbChars = 200, $indexSize = 2),
    ];
});
