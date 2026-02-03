<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\StoreAuthorRequest;
use App\Models\Author;
class AuthorController extends Controller
{
    public function index()
    {
        return Author::with('books')->get();
    }

    public function store(StoreAuthorRequest $request)
    {
        return Author::create($request->validated());
    }

    public function show(Author $author)
    {
        return $author->load('books');
    }

    public function update(StoreAuthorRequest $request, Author $author)
    {
        $author->update($request->validated());
        return $author;
    }

    public function destroy(Author $author)
    {
        $author->delete();
        return response()->json(['message' => 'Author deleted']);
    }
}
