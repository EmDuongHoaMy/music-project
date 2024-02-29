@extends('layout.base')
@section('title')
    User
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
        background-color: #65940d;
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
        <li class="nav-item">
          <div class="dropdown">
            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton2" data-bs-toggle="dropdown" aria-expanded="false">
             Quản Lý Thành Viên
            </button>
            <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="dropdownMenuButton2">
              <li><a class="dropdown-item active" href="#">QL Nhóm Thành Viên</a></li>
              <li><a class="dropdown-item" href="#">QL Thành Viên</a></li>
            </ul>
          </div>
        </li> 
      </ul>
</div>
<div style="margin-left: 180px;margin-top: 60px">
  @yield('user.main')
</div>
@endsection