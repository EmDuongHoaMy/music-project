@extends('backend.postcatalogue.bg')
@section('postcatalogue.main')
    <h3>Chỉnh sửa nhóm thành viên </h3>
    <p>Bắt buộc điền thông tin vào <span class="text-danger">(*)</span></p>
    <form class="m-t" action="{{ route('postcatalogue.update',$post_group->id) }}" method="post" style="width: 100%">
        @csrf
        <div class="form-group">
            <label for="name"><span class="text-danger">(*)</span>Tên nhóm</label>
            <input type="text" name="name" id="name" style="width: 100%" placeholder="" value="{{ $post_group->name }}">
        </div>

        <div class="form-group mt-2">
            <label for="description"><span class="text-danger">(*)</span>Mô tả</label>
            <input type="text" name="description" id="description" style="width: 100%" placeholder="Description" value="{{ $post_group->description }}">
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