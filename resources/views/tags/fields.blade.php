<div class="form-group">
  <label for="InputTitle">タイトル</label>
  <input type="text" name="title" value="{{ $tag->title ?? ''}}" class="form-control form-control @error('title') is-invalid @enderror" id="InputTitle" placeholder="Enter title">
  @error('title')
  <span class="invalid-feedback" role="alert">
      <strong>{{ $message }}</strong>
  </span>
  @enderror
</div>
<button type="submit" class="btn btn-primary">送信</button>
<!-- route{{}}の記述方法が使えない -->
<a href="/tags" class="btn btn-secondary">一覧へ戻る</a>