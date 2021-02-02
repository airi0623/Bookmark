@extends('layouts.app')
<!-- ◆ all.bladeファイルを親にもつビューファイル -->

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ $tag->title }}のブックマーク</div>

                <div class="card-body">
                    @include('components.alert')
                    <table class="table table-striped">
                      <thead>
                        <tr>
                          <th>ID</th>
                          <th>タイトル</th>
                          <th>アクション</th>
                          <th>タグ</th>
                        </tr>
                      </thead>
                      @foreach($bookmarks as $bookmark)
                        <tr>
                          <td class="align-middle">{{ $bookmark -> id }}</td>
                          <td class="align-middle">
                            <a href="{{ $bookmark->url }}">{{ $bookmark -> title }}</a>
                          </td>
                          <td class="align-middle">
                            @foreach($bookmark->tags as $tag)
                              <a href=" {{ route('tags.show', $tag->id )}}">{{ $tag->title }}</a>
                              @unless($loop->last)
                                ,
                              @endunless
                            @endforeach
                          </td>
                          <td class="align-middle">
                            <div class="d-flex">
                              <a href="{{ route('bookmarks.edit', $bookmark->id) }}" class="btn btn-secondary btn-sm">編集</a>
                              <a href="{{ route('bookmarks.show', $bookmark->id) }}" class="btn btn-secondary btn-sm ml-1">詳細</a>
                              <!-- 【疑問】DELETEの場合はformのアクションに引数が必要? -->
                              <form method="POST" action="{{route('bookmarks.destroy', $bookmark)}}">
                                @method('DELETE')
                                @csrf
                                <button onclick="return confirm('本当に削除してもよろしいですか?')" class="btn btn-secondary btn-sm ml-1">削除</button>
                              </form>
                            </div>
                          </td>
                        </tr>
                      @endforeach
                    </table>
                    <a href="/tags" class="btn btn-secondary">戻る</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
