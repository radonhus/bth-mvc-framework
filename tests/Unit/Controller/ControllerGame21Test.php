<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use PHPUnit\Framework\TestCase;
use Psr\Http\Message\ResponseInterface;

/**
 * Test cases for the controller Game21Controller.
 */
class ControllerGame21Test extends TestCase
{
    /**
     * Test that object is instance of Game21Controller
     */
    public function testCreateTheControllerClass()
    {
        $controller = new Game21Controller();

        $this->assertInstanceOf("App\Http\Controllers\Game21Controller", $controller);
    }

    /**
     * Check that Game21Controller class extends Controller
     */
    public function testGame21ExtendsController()
    {
        $controller = new Game21Controller();

        $this->assertInstanceOf("App\Http\Controllers\Controller", $controller);
    }

    /**
     * Test that welcome returns a Response class object
     */
    public function testWelcomeReturnsResponseObject()
    {
        $controller = new Game21Controller();

        $result = $controller->welcome();

        $this->assertInstanceOf("Nyholm\Psr7\Response", $result);
    }

    /**
     * Test that play returns a Response class object
     */
    public function testPlayReturnsResponseObject()
    {
        $controller = new Game21Controller();

        $result = $controller->play();

        $this->assertInstanceOf("Nyholm\Psr7\Response", $result);
    }
}
