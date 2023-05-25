<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function index()
    {
        $employees = Employee::all();

        return view('employeeinter', ['employees' => $employees]);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'address' => 'required',
            'account_number' => 'required',
            'grade' => 'required',
            'superior_id' => 'required'
        ]);

        $employee = Employee::create($validatedData);

        return redirect()->route('employees.index')->with('success', 'Employee stored successfully!');
    }

    public function show($id)
    {
        $employee = Employee::find($id); // retrieve employee data using id
        return view('showemp', compact('employee')); // pass employee data to view
    }
    

    public function update(Request $request, $id)
    {
        $employee = Employee::findOrFail($id);

        $validatedData = $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'address' => 'required',
            'account_number' => 'required',
            'grade' => 'required',
            'superior_id' => 'required'
        ]);

        $employee->update($validatedData);

        return redirect()->route('employees.index', ['id' => $employee->id])->with('success', 'Employee updated successfully!');
    }


    public function edit($id)
    {
        $employee = Employee::findOrFail($id);
    
        return view('editemp', ['employee' => $employee]);
    }

    

    public function destroy($id)
    {
        $employee = Employee::findOrFail($id);

        $employee->delete();

        return redirect()->route('employees.index')->with('success', 'Employee deleted successfully!');
    }
}

