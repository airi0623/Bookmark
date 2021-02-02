<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Bookmark;
use Faker\Generator as Faker;

$factory->define(Bookmark::class, function (Faker $faker) {
    return [
        // fakerを用いてデータを作成
        // realTextメソッド・・・ランダムな文字列を生成(引数)に文字数を設定する。
        // numberBetweenメソッド・・・文字数をランダムに生成
        'title' => $faker->realText($faker->numberBetween(10,25)),
        'url' => $faker->url(),
        'description' => $faker->realText($faker->numberBetween(50,100))
    ];
});
