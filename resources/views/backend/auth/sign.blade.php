@extends('backend.auth.bg')
@section('auth.main')
<h3>Đăng ký thành viên </h3>
<p>Bắt buộc điền thông tin vào <span class="text-danger">(*)</span></p>
<form class="m-t" action="{{ route('auth.signin') }}" method="post" style="width: 100%">
    @csrf
    <div class="form-group">
        <p><span class="text-danger">(*)</span>Tên</p>
        <input type="text" name="name" id="" style="width: 100%" placeholder="Name">
    </div>
    @if ($errors->has('name'))
    <span class="error-mess">* {{ $errors->first('name') }}</span>
    @endif
    <div class="form-group">
        <p><span class="text-danger">(*)</span>Email</p>
        <input type="text" name="email" id="" style="width: 100%" placeholder="Email">   
    </div>
    @if ($errors->has('email'))
                <span class="error-mess">* {{ $errors->first('email') }}</span>
    @endif
    <div class="form-group">
        <p>Địa chỉ</p>
        <input type="text" name="address" style="width: 100%" id="" placeholder="Address">   
    </div>
    <div class="form-group">
        <p>Số điện thoại</p>
        <input type="text" name="phone_number" style="width: 100%" id="" placeholder="Phone Number">   
    </div>
    <div class="form-group ">
        <p><span class="text-danger">(*)</span>Mật khẩu</p>
        <input type="password" name="password" style="width: 100%" id="" placeholder="Password">   
    </div>
    @if ($errors->has('password'))
            <span class="error-mess block">* {{ $errors->first('password') }}</span>
    @endif
    <div class="form-group ">
        <p><span class="text-danger">(*)</span>Nhập lại mật khẩu</p>
        <input type="password" name="password_confirmation" id="" style="width: 100%" placeholder="Password Again">   
    </div>
    @if ($errors->has('password'))
            <span class="error-mess block">* {{ $errors->first('password') }}</span>
    @endif
    <button type="submit" class="mt-2 btn btn-primary block full-width m-b center-block">Đăng ký</button>
  </form>
@endsection
