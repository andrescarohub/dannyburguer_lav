<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\User;
use Faker\Generator as Faker;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

/*
|--------------------------------------------------------------------------
| Este directorio debe contener cada una de las definiciones de fábrica de modelos para
| su aplicación. Las fábricas proporcionan una manera conveniente de generar nuevos
| instancias de modelo para probar/sembrar la base de datos de su aplicación.
|
*/

$factory->define(User::class, function (Faker $faker) {
    return [
        'name' => "samadi samir",
        'email' => "samadi@email.com",
        'email_verified_at' => now(),
        'password' => Hash::make("samadi"), // password
        'remember_token' => Str::random(10),
    ];
});
