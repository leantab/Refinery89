<?php

namespace App\Http\Controllers;

use App\Models\Department;
use Illuminate\Http\Request;

class DepartmentController extends Controller
{
    public function index()
    {
        return view('departments', [
            'departments' => Department::all(),
        ]);
    }

    public function create()
    {
        $departments = Department::orderBy('name')->get();

        return view('departments_create', [
            'departments' => $departments,
        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
        ]);

        Department::create([
            'name' => $request->name,
            'subdepartment_of' => ($request->subdepartmentOf != '') ? $request->subdepartmentOf : null,
        ]);

        return redirect()->route('departments');
    }

    public function show(Department $department)
    {
        //
    }

    public function edit(Department $department)
    {
        //
    }

    public function update(Request $request, Department $department)
    {
        //
    }

    public function destroy(Department $department)
    {
        //
    }
}
