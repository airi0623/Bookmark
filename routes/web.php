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
Route::get('/bookmarks', 'BookmarkController@index');
// BookmarkController@show-----------------------
// idが数字だけになるようにwhereで指定【public function show($id):コントローラーの受け取り】
// Route::get('/bookmark/{id}', 'BookmarkController@show')->where('id','[0-9]+')->name('bookmarks.show');
Route::get('/bookmark/{$bookmark}', 'BookmarkController@show')->name('bookmarks.show');
// ↑ コントローラーの受け取り:public function show(Bookmark $bookmark)

Auth::routes();


// 実際に動いていること -------------------
// Route::get('/test', function(){
//     return 'test';
// });

// Route::get('/test/{id}', function($id){
//     return $id;
// })->where('id', '[0-9]+');
