@extends('layout.base')
@section('title')
    UserCatalogue
@endsection
@section('main')
<style>
    .sidenav{
        height: 100%;
        width: 160px;
        position: fixed  ;
        z-index: 1;
        top: 0;
        left: 0;
        background-color: #65676b;
        overflow-x: hidden;
        margin-top: 60px;
        display: inline;
    }
    .sidenav a {
        padding: 6px 8px 6px 16px;
        text-decoration: none;
        font-size: 12px;
        color: #818181;
        display: block-inline;
    }

    .sidenav a:hover {
      color: #f1f1f1;
    }

</style>
<div class="sidenav">
    <ul class="nav flex-column">
      <li><a class="nav-item" href="{{ route('usercatalogue.index') }}">QL Nhóm Thành Viên</a></li>
      <li><a class="nav-item" href="{{ route('user.index') }}">QL Thành Viên</a></li>    
    </ul>
</div>
<div style="margin-left: 180px;margin-top:80px">
  @yield('usercatalogue.main')
</div>
@endsection