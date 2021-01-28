<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', 'HomeController@index')->name('home');

// Route::get('/bookmarks', 'BookmarkController@index')->name('bookmarks.index');
// // {-- BookmarkController@show-----------------------
// // ① コントローラーの受け取り:public function show($id)・・・idが数字だけになるようにwhereで指定
// // Route::get('/bookmark/{id}', 'BookmarkController@show')->where('id','[0-9]+')->name('bookmarks.show');
// // ②↓コントローラーの受け取り:public function show(Bookmark $bookmark)--}
// Route::get('/bookmarks/{bookmark}', 'BookmarkController@show')->where('bookmark','[0-9]+')->name('bookmarks.show');
// Route::get('/bookmarks/create', 'BookmarkController@create')->name('bookmarks.create');
// Route::post('/bookmarks', 'BookmarkController@store')->name('bookmarks.store');
// Route::get('/bookmarks/{bookmark}/edit', 'BookmarkController@edit')->where('bookmark','[0-9]+')->name('bookmarks.edit');
// Route::post('/bookmarks/{bookmark}', 'BookmarkController@update')->where('bookmark','[0-9]+')->name('bookmarks.update');

// 全てのルートを設定
Route::resource('bookmarks', 'BookmarkController');

Auth::routes();


//{-- 実際に動いていること -------------------
// Route::get('/test', function(){
//     return 'test';
// });

// Route::get('/test/{id}', function($id){
//     return $id;
// })->where('id', '[0-9]+');--}
