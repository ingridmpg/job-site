<?php

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

Route::get('/', function () {
    return view('jobs', [
        'heading' => 'Latest Jobs',
        'jobs' => Job::all()
    ]);
});

Route::get('/jobs/{job}', function (Job $job) {
    return view('job', [
        'job' => $job
    ]);
});