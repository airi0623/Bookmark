@extends('layouts.app')
<!-- ◆ all.bladeファイルを親にもつビューファイル -->

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">タグ編集</div>
                <div class="card-body">
                  <form method="POST" action="{{ route('tags.update', $tag) }}">
                    @method('PUT')
                    {{ method_field('PUT') }}
                    @csrf
                    @include('tags.fields')
                  </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
