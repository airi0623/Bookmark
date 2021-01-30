<div class="form-group">
  <label for="InputTitle">タイトル</label>
  <!-- $bookmark->title・・・値があれば表示させる、イコール演算子・・・なければ、''・・・から文字を表示する -->
  @if(isset( $bookmark -> title ))
    <input type="text" name="title" value="{{ old('title', $bookmark->title)}}" class="form-control form-control @error('title') is-invalid @enderror" id="InputTitle" placeholder="Enter title">
  @else 
    <input type="text" name="title" value="{{ old('title')}}" class="form-control form-control @error('title') is-invalid @enderror" id="InputTitle" placeholder="Enter title">
  @endif
  @error('title')
  <span class="invalid-feedback" role="alert">
      <strong>{{ $message }}</strong>
  </span>
  @enderror
</div>
<div class="form-group">
  <label for="InputUrl">URL</label>
  @if(isset( $bookmark -> url ))
    <input type="text" name="url" value="{{ old('url', $bookmark->url)}}" class="form-control form-control @error('url') is-invalid @enderror" id="InputUrl" placeholder="Enter url">
  @else 
    <input type="text" name="url" value="{{ old('url')}}" class="form-control form-control @error('url') is-invalid @enderror" id="InputUrl" placeholder="Enter url">
  @endif
  @error('url')
  <span class="invalid-feedback" role="alert">
      <strong>{{ $message }}</strong>
  </span>
  @enderror
</div>
<div class="form-group">
  <label for="InputDescription">詳細</label>
  @if(isset( $bookmark -> description))
    <textarea name="description" class="form-control form-control @error('description') is-invalid @enderror" id="inputDescription" placeholder="Enter description">{{ old('description', $bookmark->description)}}</textarea>
  @else 
    <textarea name="description" class="form-control form-control @error('description') is-invalid @enderror" id="inputDescription" placeholder="Enter description">{{ old('description') }}</textarea>
  @endif
  @error('description')
  <span class="invalid-feedback" role="alert">
      <strong>{{ $message }}</strong>
  </span>
  @enderror
</div>
<button type="submit" class="btn btn-primary">送信</button>
<!-- route{{}}の記述方法が使えない -->
<a href="/bookmarks" class="btn btn-secondary">一覧へ戻る</a>