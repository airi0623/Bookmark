<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // 作成したseederを使えるようにする
        $this->call(BookmarksTableSeeder::class);
        $this->call(TagsTableSeeder::class);
    }
}
