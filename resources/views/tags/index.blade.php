@extends('layouts.app')
<!-- ◆ all.bladeファイルを親にもつビューファイル -->

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">タグ一覧</div>

                <div class="card-body">
                    <div class="md-3">
                      <a href="{{ route('tags.create') }}" class="btn btn-primary mb-3">新規登録</a>
                    </div>
                    @include('components.alert')
                    <table class="table table-striped">
                      <thead>
                        <tr>
                          <th>ID</th>
                          <th>タイトル</th>
                          <th>アクション</th>
                        </tr>
                      </thead>
                      @foreach($tags as $tag)
                        <tr>
                          <td>{{ $tag -> id }}</td>
                          <td ><a href="{{ $tag->url }}">{{ $tag -> title }}</a></td>
                          <td >
                            <div class="d-flex">
                              <a href="{{ route('tags.edit', $tag->id) }}" class="btn btn-secondary btn-sm">編集</a>
                              <a href="{{ route('tags.show', $tag->id) }}" class="btn btn-secondary btn-sm ml-1">詳細</a>
                              <!-- 【疑問】DELETEの場合はformのアクションに引数が必要? -->
                              <form method="POST" action="{{route('tags.destroy', $tag)}}">
                                @method('DELETE')
                                @csrf
                                <button onclick="return confirm('本当に削除してもよろしいですか?')" class="btn btn-secondary btn-sm ml-1">削除</button>
                              </form>
                            </div>
                          </td>
                        </tr>
                      @endforeach
                    </table>
                    {{ $tags -> links() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
