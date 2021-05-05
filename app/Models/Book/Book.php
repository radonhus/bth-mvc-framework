<?php

namespace App\Models\Book;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
* The following properties are columns in the table that
* the model represents (to make phpstan happy)
*
* @property string $isbn
* @property string $author
* @property string $title
* @property string $image_url
*/
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
     * @property array $books
     * @property object $bookDBObject
     * @property object $book
     * @return array $books
     *
     */
    public function getAllBooks()
    {
        $bookDBObject = $this->all();
        $books = [];

        foreach ($bookDBObject as $book) {
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
