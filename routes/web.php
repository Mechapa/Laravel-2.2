<?php
use App\Http\Controllers\GroupController;
use App\Http\Controllers\StudentController;
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


Route::get('/groups/students', [StudentController::class, 'index'])->name('student.index'); 
Route::get('/groups/{group}/students/create', [StudentController::class, 'create'])->name('student.create');
Route::post('/groups/{group}/students', [StudentController::class, 'store'])->name('student.store'); 
Route::get('/groups/{group}/students/{student}', [StudentController::class, 'show'])->name('student.show');
Route::delete('/groups/{group}', [GroupController::class, 'destroy'])->name('group.destroy');
Route::get('/groups', [GroupController::class, 'index'])->name('group.index');
Route::get('/groups/create', [GroupController::class, 'create'])->name('group.create'); 
Route::get('/groups/{id}', [GroupController::class, 'show'])->name('group.show'); 
Route::post('/groups', [GroupController::class, 'store'])->name('group.store'); 
Route::get('/groups/{group}/edit', [GroupController::class, 'edit'])->name('group.edit');
Route::post('/groups/{group}', [GroupController::class, 'update'])->name('group.update');
