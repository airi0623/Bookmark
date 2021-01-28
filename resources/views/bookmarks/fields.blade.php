<div class="form-group">
  <label for="InputTitle">タイトル</label>
  <input type="text" name="title" value="{{ $bookmark->title ?? ''}}" class="form-control form-control @error('title') is-invalid @enderror" id="InputTitle" placeholder="Enter title">
  @error('title')
  <span class="invalid-feedback" role="alert">
      <strong>{{ $message }}</strong>
  </span>
  @enderror
</div>
<div class="form-group">
  <label for="InputUrl">URL</label>
  <input type="text" name="url" value="{{ $bookmark->url ?? ''}}" class="form-control form-control @error('url') is-invalid @enderror" id="InputUrl" placeholder="Enter url">
  @error('url')
  <span class="invalid-feedback" role="alert">
      <strong>{{ $message }}</strong>
  </span>
  @enderror
</div>
<div class="form-group">
  <label for="InputDescription">詳細</label>
  <textarea name="description" value="{{ $bookmark->description ?? ''}}" class="form-control form-control @error('description') is-invalid @enderror" id="inputDescription" placeholder="Enter description"></textarea>
  @error('description')
  <span class="invalid-feedback" role="alert">
      <strong>{{ $message }}</strong>
  </span>
  @enderror
</div>
<button type="submit" class="btn btn-primary">送信</button>
<!-- route{{}}の記述方法が使えない -->
<a href="/bookmarks" class="btn btn-secondary">一覧へ戻る</a>