<?php

namespace App\Http\Controllers;
use App\Employee;
use Illuminate\Http\Request;

class EmployeeCtrl extends Controller
{
    public function index(){
        $emps = Employee::all();
        return view('employees', compact('emps'));
    }
    public function show($id){
        $emp = Employee::findOrFail($id);
        return view('emp_show', compact('emp'));
    }
}
