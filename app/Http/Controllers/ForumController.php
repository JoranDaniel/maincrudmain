<?php
// app/Http/Controllers/ForumController.php

// app/Http/Controllers/ForumController.php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Forum;

class ForumController extends Controller
{
    public function index()
    {
        $forums = Forum::all();
        return view('forums.index', compact('forums'));
    }

    public function create()
    {
        return view('forums.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|max:255',
            'content' => 'required',
        ]);

        Forum::create([
            'title' => $request->input('title'),
            'content' => $request->input('content'),
        ]);

        return redirect()->route('forums.index');
    }

    public function edit(Forum $forum)
    {
        return view('forums.edit', compact('forum'));
    }

    public function update(Request $request, Forum $forum)
    {
        $request->validate([
            'title' => 'required|max:255',
            'content' => 'required',
        ]);

        $forum->update([
            'title' => $request->input('title'),
            'content' => $request->input('content'),
        ]);

        return redirect()->route('forums.index');
    }

    public function destroy(Forum $forum)
    {
        $forum->delete();

        return redirect()->route('forums.index');
    }
}
