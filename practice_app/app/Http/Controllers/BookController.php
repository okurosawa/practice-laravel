<?php

namespace App\Http\Controllers;

use App\Book;
use App\User;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index()
    {
        $book = Book::where('title', 'Book1')->first();
        return view('pages.books.index', compact('book'));
    }

    public function create()
    {
        return view('pages.books.create');
    }

    public function store(Request $request)
    {
        $user = new User();

        $result = $user->setBookData(
            $request->first_name,
            $request->last_name,
            $request->email,
            $request->description
        );

        if ($result) {
            return redirect('/books/success');
        }
    }

    public function success()
    {
        return view('pages.books.success');
    }
}
