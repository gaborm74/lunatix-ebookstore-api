<?php

namespace App\Http\Controllers;

use App\Models\Author;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AuthorController extends Controller
{
	// List all authors
	public function index()
	{
		return Author::all();
	}

	// Return the requested author information 
	public function show(Author $author)
	{
		return $author;
	}

	// Create an author
	public function store(Request $request)
	{
		$author = Author::create($request->all());
		return response()->json($author, 201);
	}

	// Update a specific author
	public function update(Request $request, Author $author)
	{
		$author->update($request->all());
		return response()->json($author, 200);
	}

	// Delete a specific author
	public function delete(Author $author)
	{
		$author->delete();
		return response()->json(null, 204);
	}

	public function moreThanTwo()
	{
		return DB::select('SELECT authors.id , authors.name, count(books.id) as books_count FROM `authors` left join books ON books.author_id = authors.id group by authors.id, authors.name having count(books.id) >= 2');
	}
}
