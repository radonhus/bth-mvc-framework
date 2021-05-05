<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use App\Http\Controllers\YatzyController;
use App\Models\Yatzy\Yatzy;

class YatzyControllerTest extends TestCase
{
    /**
     * Test that the post-route /yatzy renders an OK HTTP response (200),
     * and that the response contains a string from the page title
     *
     * @return void
     */
    public function testGetYatzyRoute()
    {
        $response = $this->get('/yatzy');

        $response->assertStatus(200);
        $response->assertSee('DiceLaVerdad');
    }

    /**
     * Test that the post-route /yatzy renders an OK HTTP response (200),
     * and that the response contains a string generated by the Yatzy class
     *
     * @return void
     */
    public function testPostYatzyRoute()
    {
        $yatzyObject = new Yatzy();
        $yatzyObject->startNewRound();
        session()->put('yatzy', $yatzyObject);

        $response = $this->withHeaders([
            'X-Header' => 'Value',
        ])->post('/yatzy', ['rollagain' => 'Roll again']);

        $response->assertStatus(200);
        $response->assertSee('hidden');
    }

    /**
     * Test that object is instance of YatzyController
     */
    public function testCreateTheControllerClass()
    {
        $controller = new YatzyController();

        $this->assertInstanceOf("App\Http\Controllers\YatzyController", $controller);
    }

    /**
     * Check that YatzyController class extends Controller
     */
    public function testGame21ExtendsController()
    {
        $controller = new YatzyController();

        $this->assertInstanceOf("App\Http\Controllers\Controller", $controller);
    }

    /**
     * Test that highScores returns a View-class object
     */
    public function testHighschoresReturnsView()
    {
        $controller = new YatzyController();

        $view = $controller->highScores();

        $this->assertInstanceOf("Illuminate\Contracts\View\View", $view);
    }

    /**
     * Test that submitHighScore returns a View-class object
     */
    public function testSubmitHighScoreReturnsView()
    {
        $controller = new YatzyController();

        $view = $controller->submitHighScore(true);

        $this->assertInstanceOf("Illuminate\Contracts\View\View", $view);
    }
}
