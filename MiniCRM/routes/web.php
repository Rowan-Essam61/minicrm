<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AssignCustEmpController;
use App\Http\Controllers\ActionsController;

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

Route::get('/home', function () {
    return view('welcome');
});
Route::get('/admin', function () {
    return view('admin');
});
Route::get('/employee', function () {
    return view('employee');
});
Route::get('/addcust', function () {
    return view('addcust');
});
Route::get('/addEmpl', function () {
    return view('addEmpl');
});
Route::get('/assigncust', function () {
    return view('assigncustemp');
});
Route::get('/checkadmin', function () {
    return view('checkadmin');
});
Route::get('/checkemp', function () {
    return view('checkemp');
});
Route::get('/addaction', function () {
    return view('addaction');
});
Route::post('CheckAdmin', [AdminController::class, 'CheckWorker']);
Route::post('CheckEmployee', [EmployeeController::class, 'CheckWorker']);
Route::post('addcustomer', [CustomerController::class, 'AddWorker']);
Route::post('addemployee', [EmployeeController::class, 'AddWorker']);
Route::post('addcustEmp', [EmployeeController::class, 'AddNAssignWorker']);
Route::post('assigncustomer', [AssignCustEmpController::class, 'AssignWorker']);
Route::post('AddEmpAction', [ActionsController::class, 'AddEmpAction']);
Route::get('viewactions', [ActionsController::class, 'ViewActions']);
Route::get('logout', [AdminController::class, 'Logout']);
// Route::post('CheckWorker', [WorkerController::class, 'CheckWorker']);
