<?php

use App\Http\Controllers\PagesController;
use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});

Route::get('students', [StudentController::class, 'index']);
Route::get('students/list', [StudentController::class, 'getStudents'])->name('students.list');

Route::get('/', [PagesController::class, 'index'])->name('datatableindex');
Route::get('/getdatatabledata', [PagesController::class, 'getDataTableData'])->name('getDataTableData');
Route::post('/getEmployeeData', [PagesController::class, 'getEmployeeData'])->name('getEmployeeData');
Route::post('/updateEmployee', [PagesController::class, 'updateEmployee'])->name('updateEmployee');
Route::post('/deleteEmployee', [PagesController::class, 'deleteEmployee'])->name('deleteEmployee');
