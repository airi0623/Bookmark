@extends('layouts.app')
<!-- ◆ all.bladeファイルを親にもつビューファイル -->

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">ブックマーク登録</div>

                <div class="card-body">
                  <form method="POST" action="{{ route('bookmarks.store') }}">
                    @csrf
                      <div class="form-group">
                        <label for="InputTitle">タイトル</label>
                        <input type="text" name="title" class="form-control" id="InputTitle" placeholder="Enter title">
                      </div>
                      <div class="form-group">
                        <label for="InputUrl">URL</label>
                        <input type="text" name="url" class="form-control" id="InputUrl" placeholder="Enter url">
                      </div>
                      <div class="form-group">
                        <label for="InputDescription">詳細</label>
                        <input type="text" name="description" class="form-control" id="InputDescription" placeholder="Enter description">
                      </div>
                      <button type="submit" class="btn btn-primary">Submit</button>
                      <!-- route{{}}の記述方法が使えない -->
                    <a href="/bookmarks" class="btn btn-secondary">一覧へ戻る</a>
                  </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
