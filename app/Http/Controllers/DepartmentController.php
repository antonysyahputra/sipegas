<?php

namespace App\Http\Controllers;

use App\Models\Department;
use Illuminate\Http\Request;

class DepartmentController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth']);
    }

    public function index()
    {

        // dd(Department::with('employee')->get(), Department::with('employee')->latest()->get());
        return view('departments.index', [
            "title" => "Department",
            "departments" => Department::with('employee')->latest()->get(),
        ]);
    }

    public function create()
    {
        return view('departments.create', [
            "title" => "Form Department",
        ]);
    }

    public function store(Request $request)
    {

        $formFields = $this->validate($request, [
            'name' => 'required',
            'npsn' => 'required',
            'acreditation' => 'required',
        ]);
        
        
        Department::create($formFields);
        
        // Employee::create([
        //     'name'=> $request->name,
        //     'gender'=> $request->gender,
        //     'department_id'=> $request->department_id,
        //     'email'=> $request->email,
        //     'phone_number'=> $request->phone_number,
        //     'hire_date'=> $request->hire_date,
        // ]);
        
        // redirect
        return redirect()->route('departments');
    }
}
