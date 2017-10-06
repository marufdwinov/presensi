<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function checkin(Request $request)
    {
    	if(\App\Employee::where('number', $request->employee_number)->count() == 1){
    		$employee_id = \App\Employee::where('number', $request->employee_number)->first()['id'];
    		if(\App\LogTable::where('date', date('Y-m-d'))->where('employee_id', $employee_id)->where('status', 1)->count() == 0){
	    		$data = new \App\LogTable;

	    		$data->employee_id = $employee_id;
		    	$data->date = date('Y-m-d');
		    	$data->time = date('H:i:s');
		    	$data->status = 1;

		    	$data->save();

		    	$request->session()->flash('alert-success', 'Success, your check-in time = '.date('H:i:s'));
		    	return back();
    		}
    		else {
    			$checkin = \App\LogTable::where('date', date('Y-m-d'))->where('employee_id', $employee_id)->where('status', 1)->first()['time'];
    			$request->session()->flash('alert-warning', 'Your check-in time today = '.$checkin);
	    		return back();
    		}	    	
    	}
    	else {	    
	    	$request->session()->flash('alert-danger', 'Employee Number not found.');
	    	return back();
    	}
    }

    public function checkout(Request $request)
    {
    	if(\App\Employee::where('number', $request->employee_number)->count() == 1){
    		$employee_id = \App\Employee::where('number', $request->employee_number)->first()['id'];
    		if(\App\LogTable::where('date', date('Y-m-d'))->where('employee_id', $employee_id)->where('status', 1)->count() == 0){
    			$request->session()->flash('alert-warning', 'Your checkin data is not available. Please checkin first.');
	    		return back();
    		}

    		if(\App\LogTable::where('date', date('Y-m-d'))->where('employee_id', $employee_id)->where('status', 2)->count() == 0){
	    		$data = new \App\LogTable;

	    		$data->employee_id = $employee_id;
		    	$data->date = date('Y-m-d');
		    	$data->time = date('H:i:s');
		    	$data->status = 2;

		    	$data->save();

		    	$request->session()->flash('alert-success', 'Success, your check-out time = '.date('H:i:s'));
		    	return back();
    		}
    		else {
    			$checkin = \App\LogTable::where('date', date('Y-m-d'))->where('employee_id', $employee_id)->where('status', 2)->first()['time'];
    			$request->session()->flash('alert-warning', 'Your check-out time today = '.$checkin);
	    		return back();
    		}	    	
    	}
    	else {	    
	    	$request->session()->flash('alert-danger', 'Employee Number not found.');
	    	return back();
    	}
    }
}
