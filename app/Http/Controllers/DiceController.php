<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Yatzy\Dice;
use Illuminate\Http\Request;

class DiceController extends Controller
{
    /**
     * Start a new Yatzy session.
     *
     * @param  string  $title
     * @param  object  $diceObject
     * @param  array  $data
     * @return \Illuminate\View\View
     */
    public function roll()
    {

        $diceObject = new Dice();

        $dice = $diceObject->getDiceValue();

        return view('dice', [
            'title' => "Dice | DiceLaVerdad",
            'dice' => $dice
        ]);
    }
}
