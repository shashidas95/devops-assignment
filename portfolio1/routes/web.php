<?php

use App\Http\Controllers\ExperianceController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProjectController;

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

// Route::get('/', function () {
//     return view('index');
// });

Route::get('/', [HomeController::class, 'home']);
Route::get('/projects', [ProjectController::class, 'projects']);
Route::get('/projects/{id}', [ProjectController::class, 'project']);
Route::get('/experiences', [ExperianceController::class, 'experiances']);
