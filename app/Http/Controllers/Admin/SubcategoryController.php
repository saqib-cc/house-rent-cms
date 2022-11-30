<?php

namespace App\Http\Controllers\Admin;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Subcategory;
use App\Category;
class SubcategoryController extends Controller
{
    //
    public function show_subcategory(){
        // $subcategory = DB::table('categories')
        //     ->join('subcategories', 'categories.id', '=', 'subcategories.category_id')
        //     ->select('categories.name', 'subcategories.*')
        //     ->get();
        
        $subcategory = Subcategory::all();
        return view('admin.subcategory.subcategories',['subcategories'=>$subcategory]);
    }
    public function show_addsubcategory(){
        $category = Category::all();
        return view('admin.subcategory.add_subcategory',['category'=>$category]);
    }

    public function add_subcategory(Request $request){
        
        $validate = $request->validate([
            'name'=>'required'
        ]);
        $category = Category::find($request->category_id);
        $subcategory = new Subcategory;
        $subcategory->subcategory= $request->name;
        $category->subcategory()->save($subcategory);

        $request->session()->flash('status', 'Subcategory Added!');
        return redirect('subcategories');
    }

    public function edit_subcategory($id){
        $category =Category::all();
        $subcategory =Subcategory::find($id);
        return view('admin.subcategory.update_subcategory',['category'=>$category,'subcategory'=>$subcategory]);
    }
    public function update_subcategory(Request $request,$id){

        $validate= $request->validate([
           'name'=>'required'
        ]);
        $this->authorize('isAdmin',Subcategory::class);
        $subcategory = Subcategory::find($id);
        $subcategory->subcategory = $request->name;
        $subcategory->category_id = $request->category_id;
        $subcategory->update();
        $request->session()->flash('status', 'Subcategory Updated!');
        return redirect('subcategories');

    }
    public function delete_subcategory($id)
    {
        $this->authorize('isAdmin',Subcategory::class);
        $category =Subcategory::find($id)->delete();
        if($category){
            session()->flash('status', 'Subategory Deleted!');
            return redirect('subcategories');
        }
    }
    public function get_subcategories($id){
        $subcategories = Category::find($id)->subcategory;
        return response()->json([
            'status'=>'200',
            'data'=>$subcategories
        ]);
    }
}
