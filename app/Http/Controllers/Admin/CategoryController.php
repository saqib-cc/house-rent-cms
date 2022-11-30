<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Category;

class CategoryController extends Controller
{
    public function show_category()
    {
        $categories =Category::all();
        return view('admin.category.categories',["categories"=>$categories]);
    }

    public function add_category(Request $request)
    {
    $validate = $request->validate([
        'name'=>'required',
        'image'=>'required'
    ]);
        $category =new Category;
        $category->name= $request->name;
        $image = time().'.'.$request->image->getClientOriginalName();
        $path =   $request->image->move('public/product_images/',$image);
        $category->image = $path;
        $category->save();
        $request->session()->flash('status', 'Category Added!');
        return redirect('categories');

        
    }

    public function edit_category($id)
    {
        $category =Category::find($id);
        return view('admin.category.update_category',['category'=>$category]);
    }

  
    public function update_category(Request $request, $id)
    {
        $validate = $request->validate([
            'name'=>'required'

        ]);
        $this->authorize('isAdmin',Category::class);
        $category = Category::find($id);
        $category->name = $request->name;
        if(isset($request->image)){
        $image = time().'.'.$request->image->getClientOriginalName();
        $path =   $request->image->move('public/product_images/',$image);
        $category->image = $path;
         }
        $category->update();
        $request->session()->flash('status', 'Category Updated!');
        return redirect('categories');
        
    
    }


    public function delete_category($id)
    {
        $this->authorize('isAdmin',Category::class);
        $category =Category::find($id)->delete();
        if($category){
            session()->flash('status', 'Category Deleted!');
            return redirect('categories');
        }
    }

    public function view_category($id){
        $category = Category::find($id);
        return view('admin.category.view_category',['category'=>$category]);
    }
}
