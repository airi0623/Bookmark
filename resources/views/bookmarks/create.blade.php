@extends('layouts.app')
<!-- ◆ all.bladeファイルを親にもつビューファイル -->

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">ブックマーク登録</div>

                <div class="card-body">
                  @include('components.alert')
                  <form method="POST" action="{{ route('bookmarks.store') }}">
                    @csrf
                    @include('bookmarks.fields')
                  </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
