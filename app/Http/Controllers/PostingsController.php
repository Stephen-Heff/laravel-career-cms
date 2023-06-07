<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\Rule;
use App\Models\Posting;
use App\Models\Type;
use App\Models\Department;

class PostingsController extends Controller
{

    public function list()
    {
        return view('postings.list', [
            'postings' => Posting::all()
        ]);
    }

    public function addForm()
    {
        return view('postings.add', [
            'types' => Type::all(),
            'departments' => Department::all(),
        ]);
    }
    
    public function add()
    {

        $attributes = request()->validate([
            'title' => 'required',
            'slug' => 'required|unique:postings|regex:/^[A-z\-]+$/', 
            'deadline'=> 'required',
            'description' => 'required',
            'email' => 'required',
            'publish'=>'required',
            'type_id' => 'required',
            'department_id' => 'required',
        ]);

        $posting = new Posting();
        $posting->title = $attributes['title'];
        $posting->deadline = $attributes['deadline'];
        $posting->slug = $attributes['slug'];
        $posting->description = $attributes['description'];
        $posting->email = $attributes['email'];
        $posting->publish = $attributes['publish'];
        $posting->type_id = $attributes['type_id'];
        $posting->department_id = $attributes['department_id'];
        $posting->user_id = Auth::user()->id;

        $posting->save();

        return redirect('/console/postings/list')
            ->with('message', 'Posting has been added!');
    }

    public function editForm(Posting $posting)
    {
        return view('postings.edit', [
            'posting' => $posting,
            'types' => Type::all(),
            'departments' => Department::all(),
        ]);
    }

    public function edit(Posting $posting)
    {

        $attributes = request()->validate([
            'title' => 'required',
            'deadline' => 'required',
            'slug' => [
                'required',
                Rule::unique('postings')->ignore($posting->id),
                'regex:/^[A-z\-]+$/',
            ],
            'description' => 'required',
            'email' => 'required',
            'publish' => 'required',
            'type_id' => 'required',
            'department_id' => 'required',
        ]);

        $posting->title = $attributes['title'];
        $posting->slug = $attributes['slug'];
        $posting->type_id = $attributes['type_id'];
        $posting->deadline = $attributes['deadline'];
        $posting->department_id = $attributes['department_id'];
        $posting->description = $attributes['description'];
        $posting->email = $attributes['email'];
        $posting->publish = $attributes['publish'];
        $posting->save();

        return redirect('/console/postings/list')
            ->with('message', 'Posting has been edited!');
    }

    public function delete(Posting $posting)
    {

        $posting->delete();
        
        return redirect('/console/postings/list')
            ->with('message', 'Posting has been deleted!');        
    }

  
    public function show($id)
    {
        $posting = Posting::find($id);

        // Handle the response, e.g., return the posting as JSON
        return response()->json($posting);
    }
    
}
