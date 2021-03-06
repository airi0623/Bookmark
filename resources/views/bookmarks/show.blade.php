@extends('layouts.app')
<!-- ◆ all.bladeファイルを親にもつビューファイル -->

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">ブックマーク詳細</div>

                <div class="card-body">
                    @include('components.alert')
                    <table class="table">
                      <tr>
                        <th class="w-25">タイトル</th>
                        <td>{{ $bookmark->title }}</td>
                      </tr>
                      <tr>
                        <th>URL</th>
                        <td><a href="{{ $bookmark->url }}">{{ $bookmark->url }}</a></td>
                      </tr>
                      <tr>
                        <th>概要</th>
                        <td>{{ $bookmark->description }}</td>
                      </tr>
                      <tr>
                        <th>作成日</th>
                        <td>{{ $bookmark->created_at->format('Y年m月d日') }}</td>
                      </tr>
                    </table>
                    <a href="/bookmarks" class="btn btn-secondary">戻る</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
