<?php

namespace App\Services;

use App\Services\Interfaces\PostCatalogueServiceInterface;
use App\Models\PostCatalogue;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

/**
 * Class PostCatalogueService
 * @package App\Services
 */
class PostCatalogueService implements PostCatalogueServiceInterface
{
    public function patinate(Request $request){
        $keyword = $request->input('keyword');
        if ($keyword==null) {
            $post_catalogue = PostCatalogue::paginate(30);
        }
        else{
            $post_catalogue = PostCatalogue::where('name', 'like', '%' . $keyword . '%')
            ->paginate(30);
        }
        return $post_catalogue;
    }

    public function validate(Request $request){
        $validate = $request->validate([
            'name'  =>'required',
            'description' =>'required',

        ],[
            'name.required'=>'Tên nhóm không được để trống',
            'description.required' =>'Mô tả không thể để trống'     
        ]);
        return $validate;
    }

    public function create(Request $request){
        PostCatalogue::create([
            'name'=>$request->input('name'),
            'description'=>$request->input('description'),
            'user_id'=>Auth::id()
        ]);
    }

    public function update(int $id,Request $request){
        // $post_group = PostCatalogue::find($id);
        // $post_group->name = $request->input('name');
        // $post_group->description = $request->input('description');
        // $post_group->save();
    }

    public function destroy(int $id){
        PostCatalogue::find($id)->delete();
    }



}
