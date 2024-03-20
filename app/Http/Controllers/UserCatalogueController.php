<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserCatalogue;

class UserCatalogueController extends Controller
{
    public function index(Request $request){
        $keyword = $request->input('keyword');
        if ($keyword==null) {
            $usercatalogue = UserCatalogue::paginate(30);
        }
        else{
            $usercatalogue = UserCatalogue::where('name', 'like', '%' . $keyword . '%')
            ->paginate(30);
        }
        return view('backend.usercatalogue.index',compact('request','usercatalogue'));
    }

    public function add(){
        return view('backend.usercatalogue.add');
    }

    public function create(Request $request){
        $validate = $request->validate([
            'name'  =>'required',
            'description' =>'required',

        ],[
            'name.required'=>'Tên nhóm không được để trống',
            'description.required' =>'Mô tả không thể để trống'     
        ]);

        UserCatalogue::create([
            'name'=>$request->input('name'),
            'description'=>$request->input('description')
        ]);
        return back()->with('success','Thêm mới nhóm thành công');
    }

    public function edit($id){
        $userrole = UserCatalogue::find($id);
        return view('backend.usercatalogue.update',compact('userrole'));
    }

    public function update($id,Request $request){
        $validate = $request->validate([
            'name'  =>'required',
            'description' =>'required',

        ],[
            'name.required'=>'Tên nhóm không được để trống',
            'description.required' =>'Mô tả không thể để trống'     
        ]);
        $userrole = UserCatalogue::find($id);
        $userrole->name = $request->input('name');
        $userrole->description = $request->input('description');
        $userrole->save();
        return redirect(route('usercatalogue.index'))->with('success','Cập nhật nhóm thành viên thành công');
    }

    public function delete($id){
        $userrole = UserCatalogue::find($id);
        return view('backend.usercatalogue.delete',compact('userrole'));
    }

    public function destroy($id){
        UserCatalogue::find($id)->delete();
        return redirect(route('usercatalogue.index'))->with('success','Xoá nhóm thành viên thành công');

    }
}
