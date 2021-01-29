@extends('layouts.app')
<!-- ◆ all.bladeファイルを親にもつビューファイル -->

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">タグ詳細</div>

                <div class="card-body">
                    @include('components.alert')
                    <table class="table">
                      <tr>
                        <th class="w-25">タグ</th>
                        <td>{{ $tag->title }}</td>
                      </tr>
                      <tr>
                        <th>作成日</th>
                        <td>{{ $tag->created_at->format('Y年m月d日') }}</td>
                      </tr>
                    </table>
                    <a href="/tags" class="btn btn-secondary">戻る</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
