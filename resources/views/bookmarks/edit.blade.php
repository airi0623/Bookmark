@extends('layouts.app')
<!-- ◆ all.bladeファイルを親にもつビューファイル -->

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">ブックマーク編集</div>
                <div class="card-body">
                  <!-- routeへ$bookmark変数を指定←なくても表示できる -->
                  <form method="POST" action="{{ route('bookmarks.update', $bookmark) }}">
                    @method('PUT')
                    {{ method_field('PUT') }}
                    @csrf
                    @include('bookmarks.fields')
                  </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
