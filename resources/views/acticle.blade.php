@extends('layout.base')
@section('title')
Acticle    
@endsection
@section('main')
<div style="padding-top: 60px">
<h1>Acticle</h1>
@foreach ($acticle as $item)
    <div style="border: 2px black dotted">
        <p>Thu tu: {{ $item->ma_bviet }} .Tieu de : {{ $item->ten_bhat }}</p>
        <p>Noi dung : {{ $item->noidung }}</p>
    </div>
@endforeach
</div>
@endsection