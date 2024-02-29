@extends('backend.user.bg')
@section('user.main')
<h3>Xoá thông tin người dùng </h3>
<p><span class="text-danger">(*)</span>Xác nhận lại thông tin người dùng sẽ xoá.</p>
<p><span class="text-danger">(*)</span>Thông tin đã xoá không thể khôi phục.</p>
<form class="m-t" action="{{ route('user.destroy',$user->id) }}" method="post" style="width: 600px">
    @csrf
    <div class="form-group">
        <p><span class="text-danger"></span>Tên</p>
        <input type="text" name="name" id="" placeholder="Name" style="width: 100%" value="{{ $user->name??'' }}" readonly>
    </div>
    @if ($errors->has('name'))
    <span class="error-mess">* {{ $errors->first('name') }}</span>
    @endif
    <div class="form-group">
        <p><span class="text-danger"></span>Email</p>
        <input type="text" name="email" id="" placeholder="Email" style="width: 100%" value="{{ $user->email??'' }}" readonly>   
    </div>
    @if ($errors->has('email'))
                <span class="error-mess">* {{ $errors->first('email') }}</span>
    @endif
    <div class="form-group">
        <p>Địa chỉ</p>
        <input type="text" name="address" id="" placeholder="Address" style="width: 100%" value="{{ $user->address??'' }}" readonly>   
    </div>
    <div class="form-group">
        <p>Số điện thoại</p>
        <input type="text" name="phone_number" id="" placeholder="Phone Number" style="width: 100%" value="{{ $user->phone_number??'' }}" readonly>   
    </div>
    {{-- <button onclick="goback()" class="mt-2 btn btn-primary block full-width m-b center-block">Trở lại</button> --}}
    <button type="submit" class="mt-2 btn btn-danger block full-width m-b center-block"> Xoá thông tin người dùng</button>
    {{-- <a href="javascript:history.back()">Quay lại</a> --}}
</form>
@endsection
{{-- Script back lại trang trước --}}
<script>
    function goback(){
        window.history.back();
    }
</script>