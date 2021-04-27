<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use PHPUnit\Framework\TestCase;
use Psr\Http\Message\ResponseInterface;

/**
 * Test cases for the controller YatzyController.
 */
class ControllerYatzyTest extends TestCase
{
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
    public function testYatzyExtendsController()
    {
        $controller = new YatzyController();

        $this->assertInstanceOf("App\Http\Controllers\Controller", $controller);
    }

    /**
     * Test that start returns a Response class object
     */
    public function testWelcomeReturnsResponseObject()
    {
        $controller = new YatzyController();

        $result = $controller->start();

        $this->assertInstanceOf("Nyholm\Psr7\Response", $result);
    }

    /**
     * Test that start saves a new Yatzy object in the Session variable
     */
    public function testStartYatzySession()
    {
        $controller = new YatzyController();

        $controller->start();

        $this->assertInstanceOf("App\Models\Yatzy\Yatzy", session()->get('yatzy'));
    }

    /**
     * Test that play returns a Response class object
     */
    public function testPlayReturnsResponseObject()
    {
        $controller = new YatzyController();

        $result = $controller->play();

        $this->assertInstanceOf("Nyholm\Psr7\Response", $result);
    }
}
