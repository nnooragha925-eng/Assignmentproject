<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JobController extends Controller
{
    public function index()
    {
        return view('jobs.index');
    }

    public function create()
    {
        return view('jobs.create');
    }

    public function store(Request $request)
    {
        return redirect()->route('jobs.index');
    }

    public function show(string $job)
    {
        return view('jobs.show');
    }

    public function edit(string $job)
    {
        return view('jobs.edit');
    }

    public function update(Request $request, string $job)
    {
        return redirect()->route('jobs.index');
    }

    public function destroy(string $job)
    {
        return redirect()->route('jobs.index');
    }
}