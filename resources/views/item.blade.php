@extends('layout.base')
@section('title')
  preview
@endsection
@section('main')
<div data-bs-spy="scroll" data-bs-target=".navbar" data-bs-offset="50" style="position: sticky;">
{{-- danh sách hiển thị các item --}}
  <nav class="navbar navbar-expand-sm bg-dark navbar-dark fixed-top" style="padding-top: 70px">
    <div class="container-fluid">
      <ul class="navbar-nav">
        @foreach ($preview as $item)
        <li class="nav-item">
          <a class="nav-link" href="#section{{ $item->id }}">{{ $item->ten }}</a>
        </li>
        @endforeach
      </ul>
    </div>
  </nav>

  {{-- Thẻ hiển thị các item --}}
 @foreach ($preview as $item)
 <div id="section{{ $item->id }}" class="container-fluid bg-success text-white" style="padding:140px 20px;border:2px dotted black; ">
  <h1 style="text-align: center">{{ $item->ten }}</h1>
  {{-- Hiển thị tiểu sử thông qua thẻ php --}}
  <?php 
  $tt = str_replace('\n','<br>',$item->tieu_su);
  echo $tt;
  ?>
  <a href="{{ $item->mxh }}" class="text-white">Mạng Xã Hội : Instagram@ {{ $item->ten }}</a>
  <div style="text-align: center">
    <img src="{{ $item->hinh_anh }}" alt="" width="600px" height="450px" style="padding-top: 20px">
    <p style="font-size: 18px;padding-top: 20px">Hình ảnh của {{ $item->ten }}</p>
  </div>
</div>
 @endforeach
</div>
@endsection
