<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = false;

    /**
     * Get all books from books table in database.
     *
     * @property  array  $books
     * @property object $book
     * @return array $books
     */
    public function getAllBooks()
    {
        $books = [];

        foreach (Book::all() as $book) {
            array_push($books, [
                'isbn' => $book->isbn,
                'title' => $book->title,
                'author' => $book->author,
                'image' => $book->image_url
            ]);
        }

        return $books;
    }
}
