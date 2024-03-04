<?php

namespace App\Http\Controllers;

use App\Models\Job;
use Illuminate\Http\Request;

class JobController extends Controller
{
    public function index() {
        return view('jobs.index', [
            'jobs' => Job::latest()->filter(request(['tag', 'search']))->get()
        ]);
    }

    public function show(Job $job) {
        return view('jobs.show', [
            'job' => $job
        ]);
    }
}
