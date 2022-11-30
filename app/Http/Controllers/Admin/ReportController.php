<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Category;
use App\Income;
use App\Expense;

class ReportController extends Controller
{
    //
    public function view_reports(){
        $month = now()->month;  
        $income = Income::whereMonth('date',$month)->get();
        $expense =  Expense::whereMonth('date',$month)->get();
        // $categories = Category::whereMonth('created_at',$month)->get();
        $categories = Category::all();
        return view('admin.reports.reports',compact('categories','income','expense','month'));
    }
    public function reports(Request $request){
        $validate = $request->validate([
            'year'=>'required',
            'month'=>'required'
        ]);
        $month = $request->input('month');
        $year = $request->input('year');
        // $categories = Category::whereMonth('created_at',$month)->get();
        $categories = Category::all();
        $income = Income::whereMonth('date',$month)->get();
        $expense =  Expense::whereMonth('date',$month)->get();
    
        return view('admin.reports.reports',compact('categories','income','expense','month'));
    }
}
