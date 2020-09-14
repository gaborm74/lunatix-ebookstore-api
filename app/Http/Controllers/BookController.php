<?php

namespace App\Http\Controllers;

use App\Models\Author;
use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
	// List all books
	public function index()
	{
		return Book::all();
	}

	// Return the requested book information 
	public function show(Book $book)
	{
		return $book;
	}

	// Return all books for an author 
	public function list($authorId)
	{
		return Book::where('author_id', $authorId)->get();
	}

	// Create an book
	public function store(Request $request)
	{
		$book = Book::create($request->all());
		return response()->json($book, 201);
	}

	// Update a specific book
	public function update(Request $request, Book $book)
	{
		$book->update($request->all());
		return response()->json($book, 200);
	}

	// Delete a specific book
	public function delete(Book $book)
	{
		$book->delete();
		return response()->json(null, 204);
	}
}
