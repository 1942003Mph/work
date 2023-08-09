<?php

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\EmployeesController;

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

Route::prefix('admin')->name('admin.')->group(function() { 
    Route::get('/' , [AdminController::class , "index"])->name('index');       
    Route::resource('employees', EmployeesController::class);  
    // Route::resource('caregory', categoryController::class);  
    // Route::resource('sliders', SliderController::class);  
    // Route::resource('services', ServiceController::class);  
    // Route::resource('ourwork', WorkController::class);  
    // Route::resource('featurs', FeatursController::class);  
    // Route::resource('teams', TeamController::class);  
    // Route::resource('settings', TeamController::class);  
    });
