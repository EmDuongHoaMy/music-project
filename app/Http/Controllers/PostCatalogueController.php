<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PostCatalogue;
use App\Services\Interfaces\PostCatalogueServiceInterface as PostCatalogueService;
use App\Repositories\Interfaces\PostCatalogueRepositoryInterface as PostCatalogueRepository;

class PostCatalogueController extends Controller
{   
    protected $postCatalogueService;
    protected $postCatalogueRepository;
    public function __construct(PostCatalogueService $postCatalogueService,PostCatalogueRepository $postCatalogueRepository)
    {
        $this->postCatalogueService = $postCatalogueService;
        $this->postCatalogueRepository = $postCatalogueRepository;
    }
    public function index(Request $request){
    $postcatalogue = $this->postCatalogueService->patinate($request);
        return view('backend.postcatalogue.index',compact('postcatalogue','request'));
    }

    public function add(){
        return view('backend.postcatalogue.add');
    }

    public function create(Request $request){
        $this->postCatalogueService->validate($request);
        $this->postCatalogueService->create($request);
        return redirect(route('postcatalogue.index'))->with('success','Thêm mới nhóm sản phẩm thành công');
    }

    public function edit($id){
        $post_group = PostCatalogue::find($id);
        return view('backend.postcatalogue.update',compact('post_group'));
    }

    public function update($id,Request $request){
        $this->postCatalogueService->validate($request);
        $this->postCatalogueService->update($id,$request);
        return redirect(route('postcatalogue.index'))->with('success','Chỉnh sửa nhóm sản phẩm thành công');

    }

    public function delete($id){
        $post_group = PostCatalogue::find($id);
        return view('backend.postcatalogue.delete',compact('post_group'));    }

    public function destroy($id){
        $this->postCatalogueService->destroy($id);
        return redirect(route('postcatalogue.index'))->with('success','Xoá thông tin nhóm sản phẩm thành công');

    }
    
}
