<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Task;
use Faker\Generator as Faker;

$factory->define(Task::class, function (Faker $faker) {
    return [
      'name' => $faker -> word(),
      'desc' => $faker -> text($maxNbChars = 80),
      'started' => $faker -> date()
    ];
});
