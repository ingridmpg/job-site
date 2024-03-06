<?php

use App\Http\Controllers\JobController;
use App\Models\Job;
use Illuminate\Http\Request;
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

// All jobs
Route::get('/', [JobController::class, 'index']);

// show create form
Route::get('/jobs/create', [JobController::class, 'create']);

// store job data
Route::post('/jobs', [JobController::class, 'store']);



// single job - this route shoud be in the end of the routes list
Route::get('/jobs/{job}', [JobController::class, 'show']);