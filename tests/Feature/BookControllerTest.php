<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use App\Http\Controllers\BookController;
use App\Models\Book\Book;

class BookControllerTest extends TestCase
{
    /**
     * Test that the post-route /books renders an OK HTTP response (200),
     * and that the response contains a string from the page title
     *
     * @return void
     */
    public function testGetBookRoute()
    {
        $response = $this->get('/books');

        $response->assertStatus(200);
        $response->assertSee('Books');
    }

    /**
     * Test that object is instance of YatzyController
     */
    public function testCreateTheControllerClass()
    {
        $controller = new BookController();

        $this->assertInstanceOf("App\Http\Controllers\BookController", $controller);
    }
}
