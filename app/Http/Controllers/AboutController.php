<?php

namespace App\Http\Controllers;

use App\Models\About;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index()
    {
        $abouts = About::latest()->get();

        return view('admin.about.index', compact('abouts'));
    }

    public function create()
    {
        return view('admin.about.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'title' => 'nullable|string|max:255',
            'description' => 'nullable|string',
        ]);

        About::create($request->only('name', 'title', 'description'));

        return redirect()->route('admin.about.index')
            ->with('success', 'About content created successfully.');
    }

    public function edit(About $about)
    {
        return view('admin.about.edit', compact('about'));
    }

    public function update(Request $request, About $about)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'title' => 'nullable|string|max:255',
            'description' => 'nullable|string',
        ]);

        $about->update($request->only('name', 'title', 'description'));

        return redirect()->route('admin.about.index')
            ->with('success', 'About content updated successfully.');
    }

    public function destroy(About $about)
    {
        $about->delete();

        return redirect()->route('admin.about.index')
            ->with('success', 'About content deleted successfully.');
    }
}