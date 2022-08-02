<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use App\Models\Department;
use Illuminate\Contracts\Cache\Store;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
// use illuminate\Support\Facades\Storage;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware(['auth']);
    }

    public function index()
    {
        // dd(request());
            return view('employees.index', [
                "title" => "Pegawai",
                "employees" => Employee::with('department')->orderBy('created_at', 'desc')->paginate(5),
            ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('employees.create', [
            "title" => "Tambah Pegawai",
            "departments" => Department::all(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $formFields = $request->validate([
            'name' => 'required|max:255',
            'gender' => 'required|max:255',
            'department_id' => 'required',
            'email' => 'required|email|max:255',
            'phone_number' => 'required',
            'hire_date' => 'required',
        ]);

        if ($request->hasFile('image')) {
            $formFields['image'] = $request->file('image')->store('upload', 'public');
        };
        
        Employee::create($formFields);
        
        // Employee::create([
        //     'name'=> $request->name,
        //     'gender'=> $request->gender,
        //     'department_id'=> $request->department_id,
        //     'email'=> $request->email,
        //     'phone_number'=> $request->phone_number,
        //     'hire_date'=> $request->hire_date,
        // ]);
        
        // redirect
        return redirect()->route('employees.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('employees.show', [
            "title" => "Profile Pegawai",
            "employee" => Employee::firstWhere('id', $id),
        ]);
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Employee $employee)
    {
        return view('employees.edit', [
            "title" => "Edit Pegawai",
            "departments" => Department::all(),
            "employee" => $employee,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Employee $employee)
    {
        $formFields = $request->validate([
            'name' => 'required|max:255',
            'gender' => 'required|max:255',
            'department_id' => 'required',
            'email' => 'required|email|max:255',
            'phone_number' => 'required',
            'hire_date' => 'required',
        ]);

       
        if ($request->hasFile('image')) {
            $formFields['image'] = $request->file('image')->store('upload', 'public');
            Storage::delete($employee->image);
        };
        
        $employee->update($formFields);
        
        // Employee::create([
        //     'name'=> $request->name,
        //     'gender'=> $request->gender,
        //     'department_id'=> $request->department_id,
        //     'email'=> $request->email,
        //     'phone_number'=> $request->phone_number,
        //     'hire_date'=> $request->hire_date,
        // ]);
        
        // redirect
        return redirect()->route('employees.show', $employee);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Employee $employee)
    {
        // dd(Storage::exists($employee->image), $employee->image);
        Storage::delete($employee->image);
        // $employee->delete();
        return back();
    }
}
