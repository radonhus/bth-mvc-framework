<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Book\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    /**
     * Show all books from books table in database.
     *
     * @property  object  $bookDBObject
     * @property  array  $books
     * @return \Illuminate\Contracts\View\View
     */
    public function start()
    {

        $bookDBObject = new Book();

        $books = $bookDBObject->getAllBooks();

        return view('books', [
            'title' => "Books | DiceLaVerdad",
            'books' => $books
        ]);
    }
}
