<?php

namespace App\Http\Controllers;

use App\Models\Job;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

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

    public function create() {
        return view('jobs.create');
    }

    public function store(Request $request) {
        $formFields = $request->validate([
            'title' => 'required',
            'company' => ['required', Rule::unique('jobs', 'company')],
            'location' => 'required',
            'website' => 'required',
            'email' => ['required', 'email'],
            'tags' => 'required',
            'description' => 'required',
        ]);
        Job::create($formFields);

        return redirect('/')->with('message', 'Job created successfully!');
    }
}
