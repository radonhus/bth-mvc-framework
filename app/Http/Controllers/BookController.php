<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    /**
     * Get all books from SQLite db.
     *
     * @property  object  $bookDBObject
     * @return \Illuminate\Contracts\View\View
     */
    public function start()
    {
        
        $bookDBObject = new Book();

        $bookDBObject->echoAllBookTitles();

        return view('books', [
            'title' => "Books | DiceLaVerdad"
        ]);
    }
}
