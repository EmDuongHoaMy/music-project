@extends('backend.products.bg')
@section('product.main')
{{-- CSS --}}
<style>
    .box{
        margin: 20px;
        width: 20rem;
    }

    .box_1{
        width:92rem;
        height:40rem;
        /* background-color: aquamarine; */
    }

    .box1_1{
        width:45%;
        height:100%;
        padding:5%;
    }

    .box_1_2{
        width:55%;
        height:100%;
        padding: 5%;
    }

    .box_1_2_1{
        height:60%;
        width:100%;
    }

    .box_1_2_2{
        height:40%;
        width:100%;
        padding-top:20px;
    }

    .box_2{
        width:100%;
        border-top:2px solid gray;
        border-bottom:2px solid gray;
        padding-left: 10%; 
        padding-right: 10%; 

    }

    .note{
        text-align:center;
        width:100%;
        height:5%;
    }
</style>

{{-- Note:lưu ý --}}
<div class="note bg-danger text-center">
    <p style="font-size:20px;">Miễn phí ship cho đơn hàng có 2 sản phẩm trở lên</p>
</div>
{{-- khu vực 1 --}}
<div class="box_1 d-flex">
    {{-- khu vực 1.1 : hiển thị ảnh sản phẩm --}}
    <div class="box1_1">
        <img src="{{ $products->hinh_sp }}" alt="" style="width:100%;height:100%;">
    </div>

    {{-- khu vực 1.2 : hiển thị form mua hàng --}}
    <div class="box_1_2">
        {{-- khu vực 1.2.1 : hiển thị thông tin sản phẩm --}}
        <div class="box_1_2_1">
            <p style="font-size:40px">{{ $products->ten_sp }}</p>
            @php
                $formattedValue = number_format($products->gia_sp,0,',', ',');
            @endphp
            <p class="lead text-danger" style="font-size:40px">{{ $formattedValue }} VND</p>
            <form action="{{ route('product.pay',$products->id) }}" style="font-size:20px">
                <div class="mt-3">
                    <label for="lang-select">Size:</label>
                    <select name="size" id="lang-select">
                        <option value="">--Hãy chọn kích thước của bạn--</option>
                        <option value="S">S</option>
                        <option value="M">M</option>
                        <option value="L">L</option>
                        <option value="XL">XL</option>
                        <option value="XXL">XXL</option>
                    </select>
                </div>
                <div class="mt-3 d-flex">
                    <label for="count">Số lượng : </label>
                    <input type="number" name="so_luong" id="count" value="1" min="0" max="20" width="10px">
                </div >

                <div class="mt-3" style="width:100%;height:50px;">
                <button type="submit" class="btn-danger block full-width m-b center-block" style="width:100%;height:100%;">
                <i class="fab fa-buysellads"></i> Mua hàng</button>
                </div>
            </form>
        </div>
        {{-- khu vực 1.2.2 : hiển thị thông tin cửa hàng --}}
        <div class="box_1_2_2 text-exception">
            <div>
                <p><i class="fa fa-address-card"></i> Cửa hàng WD</p>
            </div>
            <div style="padding-top:10px">
                <p> <i class="fa fa-archive"></i>  Nhận đặt hàng theo yêu cầu với số lượng lớn</p>
            </div>
            <div style="padding-top:10px">
                <p> <i class="fa fa-bus"></i>  Giao hàng dự kiến:
                Thứ 2-Thứ 6 từ 9h00 - 17h00</p>
            </div>
            <div style="padding-top:10px">
                <p> <i class="fa fa-phone"></i> Hỗ trợ, tư vấn ngay qua messenger FB hoặc qua sdt 123456789
                </p>

            </div>
        </div>
    </div>
</div>
{{-- khu vực 2 : hiển thị mô tả sản phẩm --}}
<div class="box_2">
    <h3 style="text-align:center">Mô tả sản phẩm </h3>
    <p style="font-size:20px">
        {{ $products->mo_ta }}
    </p>
</div>
{{-- khu vực 3 : hiển thị thêm các sản phẩm khác --}}
<div>
    <h3 style="text-align:center">Các sản phẩm tương tự  </h3>
    <div class="row -mt-5" style="margin-top: 20px">
        @foreach ($other as $item)
        <div class="card text-lg-center box">
            <a href="{{ route('product.review',$item->id) }}">
                <img src="{{ $item->hinh_sp}}" class="card-img-top" alt="...">
                <div class="card-body" >
                    <p class="text-dark text-color">{{ $item->ten_sp }}</p>
                    @php
                    $formated_number = number_format($item->gia_sp,0,',',',');
                    @endphp
                    <h5>{{ $formated_number }} VND</h5>
                </div>
            </a>
        </div>
        @endforeach
    </div> 
</div>
@endsection