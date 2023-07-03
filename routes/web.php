<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StaffManagementController;

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
// Route::get('/', function () {
//     return view('crudstaffform.update');
// });
Route::get('/',function(){
    return view('login.login');
});
 Route::resource('/staffs', StaffManagementController::class);
//
// Route::get('/',StaffManagementController::class,'index');
// Route::post('create',StaffManagementController::class,'create');
// Route::get('edit',StaffManagementController::class,'edit');
