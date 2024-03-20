@extends('backend.postcatalogue.bg')
@section('postcatalogue.main')
    <div class="ibox-content ">
        <label for=""><h3>Danh sách nhóm sản phẩm</h3></label>
        {{-- Các chức năng --}}
        <nav class="navbar navbar-expand-sm">
            <ul class="navbar-nav">
                {{-- form tìm kiếm --}}
                <li class="nav-item me-2">
                    <form class="d-flex" role="search" action="{{ route('postcatalogue.index') }}">
                        <input class="form-control " type="search" name="keyword" value="{{ $request->input('keyword') ?? old('keyword') }}" placeholder="Nhập từ khoá muốn tìm kiếm" aria-label="Search"style="width: 250px">
                        <button class="btn btn-outline-success" type="submit">Search</button>
                    </form>
                </li>
                <li class="nav-item ">
                    <a href="{{ route('postcatalogue.add') }}" class="btn btn-success bg-danger"><i class="fa fa-plus"></i>Thêm mới nhóm sản phẩm </a>
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
                <th>Tên nhóm</th>
                <th>Mô tả</th>
                <th>Mã danh mục cha</th>
                <th>Ảnh đại diện</th>
                <th>Ảnh nhỏ</th>
                <th>Người tạo</th>
                <th>Thao tác</th>
            </tr> 
            </th>
            @foreach ($postcatalogue as $item)
            <tr>
                <td>
                    <input type="checkbox" class="input-checkbox checkBoxItem">
                </td>
                <td>{{ $item->name }}</td>
                <td>{{ $item->description }}</td>
                <td>{{ $item->parent_id }}</td>
                <td>{{ $item->img }}</td>
                <td>{{ $item->icon }}</td>
                <td>{{ $item->user_id }}</td>
                
                <td>
                    <a href="{{ route('postcatalogue.delete',$item->id)}}" class="btn btn-success" ><i class="fa fa-trash"></i></a>
                    <a href="{{ route('postcatalogue.edit',$item->id)}}" class="btn btn-success"><i class="fa fa-edit"></i></a>
                </td>
            </tr>
            @endforeach
        </table>
        {{ $postcatalogue->links('pagination::bootstrap-4') }}
    </div>
@endsection

    