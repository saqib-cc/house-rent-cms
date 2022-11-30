<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Category;
use App\Subcategory;
use App\Income;
class IncomeController extends Controller
{
    //
    public function view_addincome(){
        $categories = Category::all();
        return view('admin.income.add_income',compact('categories',$categories));
    
    }
    public function view_income(){
        $incomes = Income::all();
        return view('admin.income.income',compact('incomes',$incomes));

  }
  public function add_income(Request $request){
    $validate = $request->validate([
          'category'=>'required',
          'subcategory'=>'required',
          'title'=>'required',
          'description'=>'required',
          'price'=>'required',
          'date'=>'required'
      ]);
    $expense = new  Income;
    $expense->category_id =$request->category; 
    $expense->subcategory_id =$request->subcategory;  
    $expense->title =$request->title; 
    $expense->price =$request->price; 
    $expense->description =$request->description; 
    $expense->date =$request->date;
    $expense->save();
    return redirect('view_income')->with('status','Income Added !');
}
public function edit_income($id){
    $income = Income::find($id);
    $categories = Category::all();
    $subcategories = Subcategory::all();
    // return $expense;
    return view('admin.income.update_income',compact('income',$income,'categories',$categories,'subcategories',$subcategories));

}
public function update_income(Request $request,$id){
    $validate = $request->validate([
          'category'=>'required',
          'subcategory'=>'required',
          'title'=>'required',
          'description'=>'required',
          'price'=>'required',
          'date'=>'required'
      ]);
    $expense = Income::find($id);
    $expense->category_id =$request->category; 
    $expense->subcategory_id =$request->subcategory;  
    $expense->title =$request->title; 
    $expense->price =$request->price; 
    $expense->description =$request->description; 
    $expense->date =$request->date;
    $expense->update();
    return redirect('view_income')->with('status','Income Updated !');
}
public function delete_income($id){
    $expense = Income::find($id)->delete();
    return redirect('view_income')->with('status','Income Deleted !');
}

}
