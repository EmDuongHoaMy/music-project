@extends('layout.base')
@section('title')
    Author
@endsection
@section('main')
<h1>Author</h1>

    <div class="row -mt-4" style="padding-top: 60">
        @foreach ($author as $item)
        <div class="card" style="width: 18rem;">
            <img src="{{ $item->hinh_tgia}}" class="card-img-top" alt="...">
            <div class="card-body">
              <p class="card-text">{{ $item->ten_tgia }}</p>
            </div>
          </div>
        @endforeach
    </div>  
@endsection