@extends('backend.user.bg')
@section('user.main')
    <div class="ibox-content ">
        <label for=""><h3>Danh sách thành viên</h3></label>
        {{-- Các chức năng --}}
        <nav class="navbar navbar-expand-sm">
            <ul class="navbar-nav">
                {{-- form tìm kiếm --}}
                <li class="nav-item me-2">
                    <form class="d-flex" role="search" action="{{ route('user.index') }}">
                        <input class="form-control " type="search" name="keyword" value="{{ $request->input('keyword') ?? old('keyword') }}" placeholder="Nhập từ khoá muốn tìm kiếm" aria-label="Search">
                        <button class="btn btn-outline-success" type="submit">Search</button>
                      </form>
                </li>
                <li class="nav-item ">
                    <a href="#addModal" class="btn btn-success bg-danger" data-bs-toggle="modal" data-bs-target="#addModal"><i class="fa fa-plus"></i>Thêm mới thành viên</a>
                </li>
            </ul>
        </nav>
        {{-- Bảng thành viên --}}
        <table class="table table-striped table-bordered text-center">
            <th>
            <tr>
                <th>
                    <input type="checkbox" id="checkAll" class="input-checkbox">
                </th>
                <th>Họ tên</th>
                <th>Email</th>
                <th>Số điện thoại</th>
                <th>Địa chỉ</th>
                <th>Thao tác</th>
            </tr> 
            </th>
            @foreach ($users as $item)
            <tr>
                <td>
                    <input type="checkbox" class="input-checkbox checkBoxItem">
                </td>
                <td>{{ $item->name }}</td>
                <td>{{ $item->email }}</td>
                <td>{{ $item->phone_number }}</td>
                <td>{{ $item->address}}</td>
                <td>
                    <a href="{{ route('user.delete',$item->id)}}" class="btn btn-success" ><i class="fa fa-trash"></i></a>
                    <a href="{{ route('user.edit',$item->id)}}" class="btn btn-success"><i class="fa fa-edit"></i></a>
                </td>
            </tr>
            @endforeach
        </table>
        {{ $users->links('pagination::bootstrap-4') }}
    </div>
@endsection
{{-- Modal thêm mới thành viên --}}
<div class="modal fade" id="addModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Thêm mới thành viên</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <p>Bắt buộc điền thông tin vào <span class="text-danger">(*)</span></p>
          <form action="{{ route('user.add') }}" method="post">
            @csrf
            <div class="form-group mt-2">
                <p><span class="text-danger">(*)</span>Tên</p>
                <input type="text" class="form-control" name="name" id="" value="" placeholder="Name">
            </div>
            @if ($errors->has('name'))
            <span class="error-mess">* {{ $errors->first('name') }}</span>
            @endif
            <div class="form-group mt-2">
                <p><span class="text-danger">(*)</span>Email</p>
                <input type="text" class="form-control" name="email" id="" value="" placeholder="Email">   
            </div>
            @if ($errors->has('email'))
            <span class="error-mess">* {{ $errors->first('email') }}</span>
            @endif
            <div class="form-group mt-2">
                <p>Địa chỉ</p>
                <input type="text" class="form-control" name="address" id="" value="" placeholder="Address">   
            </div>
            <div class="form-group mt-2">
                <p>Số điện thoại</p>
                <input type="text" class="form-control" name="phone_number" id="" value="" placeholder="Phone Number">   
            </div>
            <div class="form-group mt-2">
                <p><span class="text-danger">(*)</span>Mật khẩu</p>
                <input type="password" class="form-control" name="password" id="" value="" placeholder="Password">   
            </div>
            @if ($errors->has('password'))
            <span class="error-mess">* {{ $errors->first('password') }}</span>
            @endif
            <div class="form-group mt-2">
                <p><span class="text-danger">(*)</span>Nhập lại mật khẩu</p>
                <input type="password" class="form-control" name="password_confirmation" id="" placeholder="Password Again">   
            </div>
            @if ($errors->has('password'))
                    <span class="error-mess block">* {{ $errors->first('password') }}</span>
            @endif
            <button type="submit" class="mt-2 btn btn-primary block full-width m-b center-block">Thêm mới thành viên</button>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>

