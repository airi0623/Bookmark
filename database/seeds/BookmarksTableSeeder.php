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
        //factoryfileが実行するように設定(第一引数：Model class、第二引数：個数)
        // App\Models\Bookmark::class・・・App\Models\Bookmarkのclassを使用するよということ
        factory(App\Models\Bookmark::class, 100)->create();
    }
}
