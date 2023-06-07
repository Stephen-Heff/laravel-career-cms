<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


use App\Models\Type;
use App\Models\User;
use App\Models\Posting;
use App\Models\Department;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/types', function(){

    $types = Type::orderBy('title')->get();
    return $types;

});
Route::get('/departments', function(){

    $departments = Department::orderBy('title')->get();
    return $departments;

});

Route::get('/postings', function(){

    $postings = Posting::orderBy('created_at')->get();

    foreach($postings as $key => $posting){
        $postings[$key]['user'] = User::where('id', $posting['user_id'])->first();
        $postings[$key]['type'] = Type::where('id', $posting['type_id'])->first();
        $postings[$key]['department'] = Department::where('id', $posting['department_id'])->first();
    }

    return $postings;

});

Route::get('/postings/{postingId}', function($postingId){
    $posting = Posting::findOrFail($postingId);

    $posting['user'] = User::where('id', $posting['user_id'])->first();
    $posting['type'] = Type::where('id', $posting['type_id'])->first();
    $posting['department'] = Department::where('id', $posting['department_id'])->first();

    return $posting;
});


Route::get('/postings/profile/{posting?}', function(Posting $posting){

    $posting['user'] = User::where('id', $posting['user_id'])->first();
    $posting['type'] = Type::where('id', $posting['type_id'])->first();
    $posting['department'] = Type::where('id', $posting['department_id'])->first();

    return $posting;

});