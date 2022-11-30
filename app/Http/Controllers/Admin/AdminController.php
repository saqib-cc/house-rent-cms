<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Category;
use App\Income;
use App\Expense;
class AdminController extends Controller
{
    //
    public function dashboard(){
        $income = Income::all();
        $expense =  Expense::all();
        return view('admin.dashboard',\compact('income','expense'));
    }
}
