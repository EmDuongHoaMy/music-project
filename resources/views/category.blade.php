@extends('layout.base')
@section('title')
    Category
@endsection
@section('main')
<div style="padding-top: 60px" >
  <h1>Category</h1>
  <div class="row -ml-3">
      @foreach ($category as $item)
      <div class="card" style="width: 18rem;">
          <ul class="list-group list-group-flush">
            <li class="list-group-item">Ma TL: {{ $item->ma_tloai }}</li>
            <li class="list-group-item">Ten TL: {{ $item->ten_tloai }}</li>
          </ul> 
        </div>
      @endforeach
  </div> 
</div>
@endsection

