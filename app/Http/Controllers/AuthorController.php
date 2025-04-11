<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AuthorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Get all authors with their post counts
        $authors = User::with(['posts'])
                            ->withCount('posts')
                            ->orderBy('posts_count', 'desc')
                            ->get();

        // Top 3 authors
        $topAuthors = $authors->take(3);

        // Authors starting from position 4 onwards
        $remainingAuthors = $authors->slice(3);

        return view('authors.index', [
            'topAuthors' => $topAuthors,
            'authors' => $remainingAuthors,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show($slug)
    {
        // Find the author by slug
        $user = User::where('slug', $slug)->firstOrFail();

        // Get the author's posts
        $posts = $user->posts()->with(['tags'])->get();

        return view('authors.show', [
            'author' => $user,
            'posts' => $posts,
        ]);
    }
    

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        //
    }
}
