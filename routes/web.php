<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

use App\Http\Controllers\LoginController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\CompaniesController;



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

// Route::get('/', function () {
//     return view('welcome');
// });




Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/loginuser', [LoginController::class, 'loginuser'])->name('loginuser');

Route::get('/logout', [LoginController::class, 'logout'])->name('logout');


Route::post('/companiesdatacreate', [CompaniesController::class, 'create'])->name('companiesdatacreate');
Route::get('/companiesdataedit/{id}', [CompaniesController::class, 'edit'])->name('companiesdataedit');
Route::post('/companiesupdate/{id}', [CompaniesController::class, 'update'])->name('companiesupdate');
Route::get('/companiesdelete/{id}', [CompaniesController::class, 'delete'])->name('companiesdelete');


Route::post('/employeedatacreate', [EmployeeController::class, 'create'])->name('employeedatacreate');
Route::get('/employeedataedit/{id}', [EmployeeController::class, 'edit'])->name('employeedataedit');
Route::post('/employeeupdate/{id}', [EmployeeController::class, 'update'])->name('employeeupdate');
Route::get('/employeedelete/{id}', [EmployeeController::class, 'delete'])->name('employeedelete');

Route::get('/register', [LoginController::class, 'register'])->name('register');
Route::post('/regis', [LoginController::class, 'regis'])->name('regis');

Route::get('/', [HomeController::class, 'index']);


Route::group(['middleware'=>['auth','cekrole:admin']], function(){
Route::get('/companiesdata', [CompaniesController::class, 'index'])->name('companiesdata');
Route::get('/companiesdataadd', [CompaniesController::class, 'add'])->name('companiesdataadd');
Route::get('/employeedata', [EmployeeController::class, 'index'])->name('employeesdata');
Route::get('/employeedataadd', [EmployeeController::class, 'add'])->name('employeedataadd');

});


  Route::get('/userpage', [HomeController::class, 'userss'])->name('lamanuser');


