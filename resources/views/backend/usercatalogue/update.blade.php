@extends('backend.usercatalogue.bg')
@section('usercatalogue.main')
    <h3>Chỉnh sửa nhóm thành viên </h3>
    <p>Bắt buộc điền thông tin vào <span class="text-danger">(*)</span></p>
    <form class="m-t" action="{{ route('usercatalogue.update',$userrole->id) }}" method="post" style="width: 100%">
        @csrf
        <div class="form-group">
            <p><span class="text-danger">(*)</span>Tên nhóm</p>
            <input type="text" name="name" id="" style="width: 100%" placeholder="" value="{{ $userrole->name }}">
        </div>

        <div class="form-group">
            <p><span class="text-danger">(*)</span>Mô tả</p>
            <input type="text" name="description" id="" style="width: 100%" placeholder="Description" value="{{ $userrole->description }}">
        @if ($errors->has('description'))
        <span class="error-mess">* {{ $errors->first('description') }}</span>
        @endif
        </div>
        <button type="submit" class="mt-2 btn btn-primary block full-width m-b center-block">Hoàn tất</button>
    </form>
    <button onclick="goback()" class="mt-2 btn btn-primary block full-width m-b center-block">Trở lại</button>
@endsection
{{-- Script back lại trang trước --}}
<script>
    function goback(){
        window.history.back();
    }
</script>