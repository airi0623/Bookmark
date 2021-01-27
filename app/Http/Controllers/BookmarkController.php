<?php

namespace App\Http\Controllers;

use App\Models\Bookmark;
use Illuminate\Http\Request;

class BookmarkController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $bookmarks = Bookmark::all();
        $bookmarks = Bookmark::orderBy('id','desc')->paginate(20);

        // Rubyみたいに変数書くだけじゃダメで、それを連想配列に入れてビューに表示させてる
        // return view('コントローラー名.表示したいビュー', [連想配列])
        // return view('bookmarks.index', ['bookmarks' => $bookmarks]);
        // ↓配列のキーと変数が同じ場合は省略可能 
        return view('bookmarks.index', compact('bookmarks'));
        // ◆ compact('bookmarks')変数を渡している？
    }

    /**

    * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('bookmarks.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Bookmark::create($request->all());

        return redirect()->route('bookmarks.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Bookmark  $bookmark
     * @return \Illuminate\Http\Response
     */
    // モデルバインディング・・・引数を($id)ではなく(Bookmark $bookmark)としていれば、自動でidを取得してくれるため＊1が不要
    public function show(Bookmark $bookmark)
    {
        // ＊1 $bookmark = Bookmark::findOrFail($id);

        return view('bookmarks.show',compact('bookmark'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Bookmark  $bookmark
     * @return \Illuminate\Http\Response
     */
    public function edit(Bookmark $bookmark)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Bookmark  $bookmark
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Bookmark $bookmark)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Bookmark  $bookmark
     * @return \Illuminate\Http\Response
     */
    public function destroy(Bookmark $bookmark)
    {
        //
    }
}
