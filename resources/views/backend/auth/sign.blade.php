@extends('backend.auth.bg')
@section('auth.main')
<h3>Đăng ký thành viên </h3>
<p>Bắt buộc điền thông tin vào <span class="text-danger">(*)</span></p>
<form class="m-t" action="{{ route('auth.signin') }}" method="post" style="width: 100%">
    @csrf
    <div class="form-group">
        <label for="name"><span class="text-danger">(*)</span>Tên</label>
        <input type="text" name="name" id="name" style="width: 100%" placeholder="Name">
        @if ($errors->has('name'))
        <span class="text-danger">* {{ $errors->first('name') }}</span>
        @endif
    </div>
    
    <div class="form-group mt-2">
        <label for="email"><span class="text-danger">(*)</span>Email</label>
        <input type="text" name="email" id="email" style="width: 100%" placeholder="Email">  
        @if ($errors->has('email'))
        <span class="text-danger">* {{ $errors->first('email') }}</span>
        @endif
    </div>

    <div class="form-group mt-2">
        <label for="password"><span class="text-danger">(*)</span>Mật khẩu</label>
        <input type="password" name="password" style="width: 100%" id="password" placeholder="Password"> 
        @if ($errors->has('password'))
            <span class="text-danger block">* {{ $errors->first('password') }}</span>
        @endif  
    </div>

    <div class="form-group mt-2">
        <label for="password_confirm"><span class="text-danger">(*)</span>Nhập lại mật khẩu</label>
        <input type="password" name="password_confirmation" id="password_confirm" style="width: 100%" placeholder="Password Again">   
        @if ($errors->has('password'))
            <span class="text-danger block">* {{ $errors->first('password') }}</span>
        @endif
    </div>

    <div class="form-group mt-4">
        <h3>Thông tin liên hệ</h3>
    </div>

    <div class="form-group mt-2 d-flex">
        <div>
            <label for="province"> Tỉnh/Thành phố</label>
            <select name="province_code" id="province">
                <option value="">Chọn Tỉnh/Thành phố</option>
                @foreach ($province as $item)
                    <option value="{{ $item->code }}">{{ $item->name }}</option>
                @endforeach
            </select>
        </div>

        <div class="" style="margin-left: 10px">
            <label for="district">Quận/Huyện</label>
            <select name="district_code" id="district">
                <option value=""> Chọn Quận/Huyện</option>
            </select>
        </div>

        <div class="" style="margin-left: 10px">
            <label for="ward">Phường/Xã</label>
            <select name="ward_code" id="ward">
                <option value=""> Chọn Phường/Xã</option>
            </select>
        </div>
    </div>

    <div class="form-group mt-2">
        <label for="address">Địa chỉ</label>
        <input type="text" name="address" style="width: 100%" id="address" placeholder="Address">   
    </div>
    <div class="form-group mt-2">
        <label for="phone_number">Số điện thoại</label>
        <input type="text" name="phone_number" style="width: 100%" id="phone_number" placeholder="Phone Number">   
    </div>
    
    <button type="submit" class="mt-2 btn btn-primary block full-width m-b center-block">Đăng ký</button>
</form>
<script type="text/javascript">
$( document ).ready(function() {
    $('#province').change(function() {
        // alert(1234);
        var provinceId = $(this).val();
        $.ajax({
            url: '/ajax/location/district/',
            type: 'GET',
            data: jQuery.param({ province_code:provinceId}) ,
            contentType: 'application/x-www-form-urlencoded; charset=UTF-8',
            success: function(res) {
                // alert(12345);
                $('#district').empty();
                $('#district').append('<option value="">Chọn Quận/Huyện</option>');
                $.each(res, function(key, district) {
                    $('#district').append('<option value="' + district.code + '">' + district.name + '</option>');
                });
            },
            error: function(xhr, status, error) {
                console.error(error);
            }
        });
    });

    $('#district').change(function() {
        var districtId = $(this).val();
        $.ajax({
            url: '/ajax/location/ward/',
            type: 'GET',
            data: jQuery.param({ district_code:districtId}) ,
            contentType: 'application/x-www-form-urlencoded; charset=UTF-8',
            success: function(res) {
                $('#ward').empty();
                $('#ward').append('<option value="">Chọn Phường/Xã</option>');
                $.each(res, function(key, ward) {
                    $('#ward').append('<option value="' + ward.code + '">' + ward.name + '</option>');
                });
            },
            error: function(xhr, status, error) {
                console.error(error);
            }
        });
    });
});

</script>
@endsection

