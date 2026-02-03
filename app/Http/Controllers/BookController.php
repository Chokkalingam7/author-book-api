<?php

namespace App\Http\Controllers;
use App\Http\Requests\StoreBookRequest;
use App\Models\Book;

use Illuminate\Http\Request;
class BookController extends Controller
{
    public function index()
    {
        return Book::with('author')->get();
    }

    public function store(StoreBookRequest $request)
    {
        return Book::create($request->validated());
    }

    public function show(Book $book)
    {
        return $book->load('author');
    }

    public function update(StoreBookRequest $request, Book $book)
    {
        $book->update($request->validated());
        return $book;
    }

    public function destroy(Book $book)
    {
        $book->delete();
        return response()->json(['message' => 'Book deleted']);
    }
}
