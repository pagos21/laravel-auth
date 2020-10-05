<?php

namespace App\Http\Controllers;
use App\Employee;
use App\Location;
use Illuminate\Http\Request;

class RestrL1Ctrl extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function edit($id){
        $emp = Employee::findOrFail($id);
        $locs = Location::all();
        return view('emp_edit', compact('emp', 'locs'));
    }
    public function update(Request $request, $id){
        $data = $request ->all();
        $emp = Employee::findOrFail($id);
        $emp ->update($data);
        return redirect()->route('index');
    }
    public function del($id){
        $emp = Employee::findOrFail($id);
        $emp ->delete();
        return redirect() ->route('index');
    }
    public function new(){
        $locs = Location::all();
        return view('emp_new', compact('locs'));
    }
    public function store(Request $request){
        $data = $request->all();
        $emp = Employee::create($data);
        return redirect()->route('index');
    }

}
