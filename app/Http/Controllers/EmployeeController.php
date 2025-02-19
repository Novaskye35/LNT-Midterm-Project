<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function getEmployees(){
        $employee = Employee::all();
        return view('welcome', compact('employee'));
    }

    public function getAddPage(){
        return view('addEmployee');
    }

    public function getUpdatePage($id){
        $e = Employee::find($id);
        return view('updateEmployee', compact('e'));
    }

    public function addEmployee(Request $request){
        $request->validate([
            'name' =>['required', 'min:5', 'max:20'],
            'age' =>['required', 'integer', 'min:20'],
            'address' =>['required', 'min:10', 'max:40'],
            'phone' =>['required','min:8', 'max:10', 'startswith:08']
        ]);

        Employee::create([
            'name' => $request->name,
            'age' => $request->age,
            'address' => $request->address,
            'phone' => $request->phone,
        ]);

        return redirect()->route('employee.view');
    }

    public function updateEmployee(Request $request, $id){
        $employee = Employee::find($id);

        $request->validate([
            'name' =>['required', 'min:5', 'max:20'],
            'age' =>['required', 'integer', 'min:20'],
            'address' =>['required', 'min:10', 'max:40'],
            'phone' =>['required','min:8', 'max:10', 'startswith:08']
        ]);

        $employee->update([
            'name' => $request->name,
            'age' => $request->age,
            'address' => $request->address,
            'phone' => $request->phone,
        ]);

        return redirect()->route('book.view');
    }

    public function deleteEmployee($id){
        $employee = Employee::find($id);

        $employee->delete();

        return redirect()->route('book.view');
    }

}

