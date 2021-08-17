<?php

namespace App\Http\Controllers;

use App\Employee;
use App\Sector;
use App\Position;
use App\Office;
use App\Http\Requests\SaveEmployeeRequest;
use App\Http\Requests\EditEmployeeRequest;

class EmployeeController extends Controller
{
    public function index()
    {
        $employees = Employee::get();
        return view('employees.index', compact('employees'));
    }

    public function create()
    {
        $sectors= Sector::get();
        $functions = Position::get();
        $offices = Office::get();
        return view('employees.create')
        ->with(compact('sectors'))
        ->with(compact('functions'))
        ->with(compact('offices'));
    }

    public function store(SaveEmployeeRequest $request )
    {
        Employee::create($request ->validated());
        
        return redirect()->route('employees.index');
    }

    public function show(Employee $employee)
    {
        return view('employees.show',[
            'employee'=>$employee
            ]);
    }

    public function edit(Employee $employee)
    {
        $sectors= Sector::get();
        $functions = Position::get();
        $offices = Office::get();
               
        return view('employees.edit',[
            'employee'=>$employee
            ])
        ->with(compact('sectors'))
        ->with(compact('functions'))
        ->with(compact('offices'));
    }
    
    public function update(Employee $employee, EditEmployeeRequest $request)
    {
        $employee->update($request->validated());
        
        return redirect()->route('employees.index');
    }

    public function delete(Employee $employee)
    {
        return view('employees.delete',[
            'employee'=>$employee
            ]);
    }                             

    public function destroy(Employee $employee)
    {
        $employee->delete();

        return redirect()->route('employees.index');
    }
}
