@extends('backend.products.bg')
@section('product.main')
<div class="ibox-content ">
    <label for=""><h3>Danh sách sản phẩm</h3></label>   
    {{-- Các chức năng --}}
    <nav class="navbar navbar-expand-sm">
        <ul class="navbar-nav">
            {{-- form tìm kiếm --}}
            <li class="nav-item me-2">
                <form class="d-flex" role="search" action="{{ route('product.index') }}">
                    <input class="form-control " type="search" name="keyword" value="{{ $request->input('keyword') ?? old('keyword') }}" placeholder="Nhập từ khoá muốn tìm kiếm" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                  </form>
            </li>
            <li class="nav-item ">
                <a href="#addModal" class="btn btn-success bg-danger" data-bs-toggle="modal" data-bs-target="#addModal"><i class="fa fa-plus"></i>Thêm mới</a>
            </li>
        </ul>
    </nav>
</div>
{{-- Danh sách sản phẩm --}}
<div class="row -mt-5" style="padding-top: 20px">
    @foreach ($products as $item)
    <div class="card text-lg-center" style="width: 18rem;">
        <a href="{{ route('product.review',$item->id) }}">
            <img src="{{ $item->hinh_sp}}" class="card-img-top" alt="...">
            <div class="card-body">
                <p class="card-text text-dark">{{ $item->ten_sp }}</p>
                <p class="card-text text-dark">{{ $item->gia_sp }} VND</p>
            </div>
        </a>
    </div>
    @endforeach
</div> 
<div style="margin-left:40%;margin-top:20px  " class="text-danger">
    {{ $products->links('pagination::bootstrap-4') }}
</div>
@endsection