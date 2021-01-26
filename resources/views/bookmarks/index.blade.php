@extends('layouts.app')
<!-- ◆ all.bladeファイルを親にもつビューファイル -->

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">ブックマーク一覧</div>

                <div class="card-body">
                    <table class="table">
                      <thead>
                        <tr>
                          <th>ID</th>
                          <th>タイトル</th>
                        </tr>
                      </thead>
                      @foreach($bookmarks as $bookmark)
                        <tr>
                          <td>{{ $bookmark -> id }}</td>
                          <!-- ↓ 文字列で直接リンクを設定するとルーティングを変更した際、ここも変更する必要が出てくる -->
                          <!-- ① <td><a href="/bookmark/{{ $bookmark -> id }}">{{ $bookmark -> title }}</a></td> -->
                          <!-- ↓【コントローラーを変更しなければ使用できる方法】 -->
                          <!-- ② <td><a href="action(BookmarkController@show,$bookmark->url)">{{ $bookmark -> title }}</a></td> -->
                          <!-- ↓【ルートさえ変えなければ使用できる方法】actionメソッドをrouteメソッドへ変更+web.phpにてnameで任意の文字列を指定 -->
                          <td><a href="route('bookmarks.show,$bookmark->id)">{{ $bookmark -> title }}</a></td>
                        </tr>
                      @endforeach
                    </table>
                    {{ $bookmarks -> links() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
