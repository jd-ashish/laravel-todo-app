<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\TodoController;
use App\Models\Todo;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    $allList = Todo::get();
    $CompeletedList = Todo::where('status',3)->get();
    $ExpiredList = Todo::where('status',2)->get();
    $PendingList = Todo::where('status',1)->get();
    return view('welcome', compact('allList','CompeletedList','ExpiredList','PendingList'));
});

Route::get('/add-task', function(){
    return view('addtask');
});
Route::post('/add-todo-data', [TodoController::class, 'addTodo']);
Route::get('/todo-list', [TodoController::class, 'list']);

Route::post("/update-status",  [TodoController::class, 'updateStatus']);

