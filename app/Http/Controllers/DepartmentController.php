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
        return view('departments_show', [
            'department' => $department,
        ]);
    }

    public function edit(Department $department)
    {
        $departments = Department::orderBy('name')->get();

        return view('departments_edit', [
            'department' => $department,
            'departments' => $departments,
        ]);
    }

    public function update(Request $request, Department $department)
    {
        $request->validate([
            'name' => 'required',
        ]);

        $department->name = $request->name;
        $department->subdepartment_of = ($request->subdepartmentOf != '') ? $request->subdepartmentOf : null;
        $department->save();

        return redirect()->route('departments.show', $department);
    }

    public function destroy(Department $department)
    {
        $department->users()->detach();
        
        $department->delete();

        return redirect()->route('departments');
    }
}
