<!-- phpのif分なので波括弧で囲まなくてもいい。<div></div>はphpで記述するのに波括弧がいる -->
@if( session()->has('status'))
  <div class="alert alert-success">{{ session('status') }}</div>
@endif