<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Expense;
use App\Category;
use App\Subcategory;
class ExpenseController extends Controller
{
    //
    public function view_expense(){
          $expenses = Expense::all();
       
      //     return $expenses;
          return view('admin.Expenses.expenses',compact('expenses',$expenses));

    }
    public function edit_expense($id){
      $expense = Expense::find($id);
      $categories = Category::all();
      $subcategories = Subcategory::all();
      // return $expense;
      return view('admin.Expenses.update_expense',compact('expense',$expense,'categories',$categories,'subcategories',$subcategories));

}

    public function view_addexpense(){
        $categories = Category::all();
        return view('admin.Expenses.add_expense',compact('categories',$categories));

  }
  public function add_expense(Request $request){
      $validate = $request->validate([
            'category'=>'required',
            'subcategory'=>'required',
            'title'=>'required',
            'description'=>'required',
            'price'=>'required',
            'date'=>'required'
        ]);
      $expense = new  Expense;
      $expense->category_id =$request->category; 
      $expense->subcategory_id =$request->subcategory;  
      $expense->title =$request->title; 
      $expense->price =$request->price; 
      $expense->description =$request->description; 
      $expense->date =$request->date;
      $expense->save();
      return redirect('view_expense')->with('status','Expense Added !');
}
public function update_expense(Request $request,$id){
      $validate = $request->validate([
            'category'=>'required',
            'subcategory'=>'required',
            'title'=>'required',
            'description'=>'required',
            'price'=>'required',
            'date'=>'required'
        ]);
      $expense = Expense::find($id);
      $expense->category_id =$request->category; 
      $expense->subcategory_id =$request->subcategory;  
      $expense->title =$request->title; 
      $expense->price =$request->price; 
      $expense->description =$request->description; 
      $expense->date =$request->date;
      $expense->update();
      return redirect('view_expense')->with('status','Expense Updated !');
}
public function delete_expense($id){
      $expense = Expense::find($id)->delete();
      return redirect('view_expense')->with('status','Expense Deleted !');
}
}
