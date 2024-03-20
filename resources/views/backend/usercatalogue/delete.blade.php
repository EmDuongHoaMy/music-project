@extends('backend.usercatalogue.bg')
@section('usercatalogue.main')
<h3>Xoá nhóm thành viên </h3>
<p><span class="text-danger">(*)</span>Thông tin đã xoá không thể phục hồi</p>
<form class="m-t" action="{{ route('usercatalogue.destroy',$userrole->id) }}" method="post" style="width: 100%">
    @csrf
    <div class="form-group">
        <p><span class="text-danger">(*)</span>Tên nhóm</p>
        <input type="text" name="name" id="" style="width: 100%" placeholder="" value="{{ $userrole->name }}" readonly>
    </div>

    <div class="form-group">
        <p><span class="text-danger">(*)</span>Mô tả</p>
        <input type="text" name="description" id="" style="width: 100%" placeholder="Description" value="{{ $userrole->description }}" readonly>
    </div>
    <button type="submit" class="mt-2 btn btn-danger block full-width m-b center-block">Xoá nhóm thành viên</button>
</form>
<button onclick="goback()" class="mt-2 btn btn-primary block full-width m-b center-block">Trở lại</button>
@endsection
{{-- Script back lại trang trước --}}
<script>
    function goback(){
        window.history.back();
    }
</script>