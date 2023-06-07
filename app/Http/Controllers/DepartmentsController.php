<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\Rule;
use App\Models\Department;

class DepartmentsController extends Controller
{

    public function list()
    {
        return view('departments.list', [
            'departments' => Department::all()
        ]);
    }

    public function addForm()
    {

        return view('departments.add');
    }
    
    public function add()
    {

        $attributes = request()->validate([
            'title' => 'required',
        ]);

        $department = new Department();
        $department->title = $attributes['title'];
        $department->save();

        return redirect('/console/departments/list')
            ->with('message', 'Department has been added!');
    }

    public function editForm(Department $department)
    {
        return view('departments.edit', [
            'department' => $department,
        ]);
    }

    public function edit(Department $department)
    {

        $attributes = request()->validate([
            'title' => 'required',
        ]);

        $department->title = $attributes['title'];
        $department->save();

        return redirect('/console/departments/list')
            ->with('message', 'Department has been edited!');
    }

    public function delete(Department $department)
    {
        $department->delete();
        
        return redirect('/console/departments/list')
            ->with('message', 'Department has been deleted!');        
    }

}
