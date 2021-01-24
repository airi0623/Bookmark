<?php

use Illuminate\Database\Seeder;

class BookmarksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //factoryfileが実行するように設定(第一引数：モデル名、第二引数：個数)
        factory(App\Models\Bookmark::class, 100)->create();
    }
}
