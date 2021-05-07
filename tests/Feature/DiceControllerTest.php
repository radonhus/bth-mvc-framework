<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use App\Http\Controllers\DiceController;

class DiceControllerTest extends TestCase
{
    /**
     * Test that the post-route /dice renders an OK HTTP response (200),
     * and that the response contains a string from the page title
     *
     * @return void
     */
    public function testGetDiceRoute()
    {
        $response = $this->get('/dice');

        $response->assertStatus(200);
        $response->assertSee('DiceLaVerdad');
    }

    /**
     * Test that object is instance of DiceController
     */
    public function testCreateTheControllerClass()
    {
        $controller = new DiceController();

        $this->assertInstanceOf("App\Http\Controllers\DiceController", $controller);
    }

    /**
     * Check that DiceController class extends Controller
     */
    public function testDiceControllerExtendsController()
    {
        $controller = new DiceController();

        $this->assertInstanceOf("App\Http\Controllers\Controller", $controller);
    }
}
