@extends('backend.bills.bg')
@section('bills.main')
<div class="ibox-content ">
    <label for=""><h3>Danh sách đơn hàng</h3></label>
    {{-- Các chức năng --}}
    <nav class="navbar navbar-expand-sm">
        <ul class="navbar-nav">
            {{-- form tìm kiếm --}}
            <li class="nav-item me-2">
                <form class="d-flex" role="search" action="{{ route('bill.index') }}">
                    <input class="form-control " type="search" name="keyword" value="{{ $request->input('keyword') ?? old('keyword') }}" placeholder="Nhập từ khoá muốn tìm kiếm" aria-label="Search" style="width: 250px">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                  </form>
            </li>
        </ul>
    </nav>
    {{-- Bảng thông tin đơn hàng --}}
    <table class="table table-striped table-bordered text-center">
        <th>
        <tr>
            <th>
                <input type="checkbox" id="checkAll" class="input-checkbox">
            </th>
            <th>Mã đơn hàng</th>
            <th>Mã khách hàng</th>
            <th>Mã sản phẩm</th>
            <th>Họ tên người nhận</th>
            <th>Tên sản phẩm</th>
            <th>Kích thước sản phẩm</th>
            <th>Số lượng sản phẩm</th>
            <th>Số điện thoại</th>
            <th>Địa chỉ</th>
            <th>Giá đơn hàng (VND)</th>
            <th>Ngày đặt</th>
            <th>Ghi chú</th>
        </tr> 
        </th>
        @foreach ($bills as $item)
        <tr>
            <td>
                <input type="checkbox" class="input-checkbox checkBoxItem" value="1">
            </td>
            <td>{{ $item->id }}</td>
            <td>{{ $item->id_khach }}</td>
            <td>{{ $item->id_sp }}</td>
            <td>{{ $item->ten_khachhang}}</td>
            <td>{{ $item->ten_sp }}</td>
            <td>{{ $item->size }}</td>
            <td>{{ $item->so_luong }}</td>
            <td>{{ $item->phone_number }}</td>
            <td>{{ $item->dia_chi }}</td>
            @php
                $gia = number_format($item->gia_donhang,0,',',',');
            @endphp
            <td>{{ $gia }}</td>
            <td>{{ $item->ngay_dat }}</td>
            <td>{{ $item->ghi_chu }}</td>

        </tr>
        @endforeach
    </table>
    {{ $bills->links('pagination::bootstrap-4') }}
</div>
@endsection