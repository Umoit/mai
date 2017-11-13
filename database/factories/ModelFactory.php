<?php

use Faker\Generator as Faker;

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

$factory->define(App\Admin::class, function (Faker $faker) {
    static $password;

    return [
        'name' => "11",
        'email' => rand()."22",
        'phone' => "22",
        'password' => $password ?: $password = bcrypt('secret'),
        'remember_token' => str_random(10),
    ];
});

$factory->define(App\Product::class, function (Faker $faker) {

    return [
        'name' => "BioIsland佰澳朗德婴幼儿补锌咀嚼片120粒",
        'sku' => rand()."abc",
        'img' => "product/89adf4f3f4d3c3f37e025994a40452af.jpeg;",
        'title'=>"",
        'keywords'=>"",
        'description'=>"",
        'content'=>"",
        'price'=>200,
        'category_id'=>1,
        'preview'=>12,
        'active'=>1,
        'position' => 1,
    ];
});
$factory->define(App\Brand::class, function (Faker $faker) {

    return [
        'name' => "牛栏牌".rand(),
        'url_name' => "abc".rand(),
        
    ];
});
$factory->define(App\Category::class, function (Faker $faker) {

    return [
        'name' => "保健品".rand(),
        'url_name' => "abc".rand(),
        'parent_id' => rand(0,5),
        
    ];
});