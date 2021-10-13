<?php

use App\Http\Controllers\ProjectController;
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


Route::get('/calender',[ ProjectController::class , 'index'])->name('projects.index');
Route::get('/project/create',[ ProjectController::class , 'showForm']);
Route::post('/addproject',[ ProjectController::class , 'store'])->name('projects.store');
Route::delete('/projects/{project}',[ ProjectController::class , 'destroy'])->name('projects.destroy');
Route::get('/listallprojects',[ ProjectController::class , 'list'])->name('projects.list');
Route::get('/projects/{project}',[ProjectController::class,'show'])->name('projects.show');


