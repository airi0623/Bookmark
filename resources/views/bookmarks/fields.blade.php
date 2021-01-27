<div class="form-group">
  <label for="InputTitle">タイトル</label>
  <input type="text" name="title" value="{{ $bookmark->title ?? ''}}" class="form-control" id="InputTitle" placeholder="Enter title">
</div>
<div class="form-group">
  <label for="InputUrl">URL</label>
  <input type="text" name="url" value="{{ $bookmark->url ?? ''}}" class="form-control" id="InputUrl" placeholder="Enter url">
</div>
<div class="form-group">
  <label for="InputDescription">詳細</label>
  <input type="text" name="description" value="{{ $bookmark->description ?? ''}}" class="form-control" id="InputDescription" placeholder="Enter description">
</div>
<button type="submit" class="btn btn-primary">送信</button>
<!-- route{{}}の記述方法が使えない -->
<a href="/bookmarks" class="btn btn-secondary">一覧へ戻る</a>