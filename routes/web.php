<?php


use App\Models\Posting;
use App\Http\Controllers\ConsoleController;
use App\Http\Controllers\PostingsController;
use App\Http\Controllers\TypesController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\DepartmentsController;

use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/posting/{posting:slug}', function (Posting $posting) {
    return view('posting', [
        'posting' => $posting,
    ]);
})->where('posting', '[A-z\-]+');

Route::get('/postings/{id}', [PostingController::class, 'show']);

Route::get('/console/logout', [ConsoleController::class, 'logout'])->middleware('auth');
Route::get('/console/login', [ConsoleController::class, 'loginForm'])->middleware('guest');
Route::post('/console/login', [ConsoleController::class, 'login'])->middleware('guest')->name('login');
Route::get('/console/dashboard', [ConsoleController::class, 'dashboard'])->middleware('auth');

Route::get('/console/postings/list', [PostingsController::class, 'list'])->middleware('auth');
Route::get('/console/postings/add', [PostingsController::class, 'addForm'])->middleware('auth');
Route::post('/console/postings/add', [PostingsController::class, 'add'])->middleware('auth');
Route::get('/console/postings/edit/{posting:id}', [PostingsController::class, 'editForm'])->where('posting', '[0-9]+')->middleware('auth');
Route::post('/console/postings/edit/{posting:id}', [PostingsController::class, 'edit'])->where('posting', '[0-9]+')->middleware('auth');
Route::get('/console/postings/delete/{posting:id}', [PostingsController::class, 'delete'])->where('posting', '[0-9]+')->middleware('auth');


Route::get('/console/users/list', [UsersController::class, 'list'])->middleware('auth');
Route::get('/console/users/add', [UsersController::class, 'addForm'])->middleware('auth');
Route::post('/console/users/add', [UsersController::class, 'add'])->middleware('auth');
Route::get('/console/users/edit/{user:id}', [UsersController::class, 'editForm'])->where('user', '[0-9]+')->middleware('auth');
Route::post('/console/users/edit/{user:id}', [UsersController::class, 'edit'])->where('user', '[0-9]+')->middleware('auth');
Route::get('/console/users/delete/{user:id}', [UsersController::class, 'delete'])->where('user', '[0-9]+')->middleware('auth');



Route::get('/console/types/list', [TypesController::class, 'list'])->middleware('auth');
Route::get('/console/types/add', [TypesController::class, 'addForm'])->middleware('auth');
Route::post('/console/types/add', [TypesController::class, 'add'])->middleware('auth');
Route::get('/console/types/edit/{type:id}', [TypesController::class, 'editForm'])->where('type', '[0-9]+')->middleware('auth');
Route::post('/console/types/edit/{type:id}', [TypesController::class, 'edit'])->where('type', '[0-9]+')->middleware('auth');
Route::get('/console/types/delete/{type:id}', [TypesController::class, 'delete'])->where('type', '[0-9]+')->middleware('auth');



Route::get('/console/departments/list', [DepartmentsController::class, 'list'])->middleware('auth');
Route::get('/console/departments/add', [DepartmentsController::class, 'addForm'])->middleware('auth');
Route::post('/console/departments/add', [DepartmentsController::class, 'add'])->middleware('auth');
Route::get('/console/departments/edit/{department:id}', [DepartmentsController::class, 'editForm'])->where('department', '[0-9]+')->middleware('auth');
Route::post('/console/departments/edit/{department:id}', [DepartmentsController::class, 'edit'])->where('department', '[0-9]+')->middleware('auth');
Route::get('/console/departments/delete/{department:id}', [DepartmentsController::class, 'delete'])->where('department', '[0-9]+')->middleware('auth');




