<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
	public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function employeeShow()
    {
    	return view('admin.employee');
    }

    public function employeeAdd(Request $request)
    {
    	$employee = new \App\Employee;

    	$employee->number = $request->number;
    	$employee->name = $request->name;

    	$employee->save();
    	return back();
    }

    public function employeeDelete(Request $request)
    {
        $employee = \App\Employee::find($request->delid);        

        $employee->delete();

        return back();
    }

    public function logInShow()
    {
    	return view('admin.datalogin');
    }

    public function logOutShow()
    {
    	return view('admin.datalogout');
    }

    public function resetLogin()
    {
        $delete = \App\LogTable::where('status', 1)->delete();        

        return back();
    }

    public function resetLogOut()
    {
        $delete = \App\LogTable::where('status', 2)->delete();        

        return back();
    }
}
