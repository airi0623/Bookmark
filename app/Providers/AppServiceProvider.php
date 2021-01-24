<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
// ◆ Mysqlのバージョンによる文字コードエラーを回避するために記述(29行目 Schema::defaultStringLength(191); 追記)
use Illuminate\Support\Facades\Schema;


class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        // ◆ Mysqlのバージョンによる文字コードエラーを回避 
        Schema::defaultStringLength(191);
    }
}
