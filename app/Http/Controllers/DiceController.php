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
     * @property  object  $diceObject
     * @property integer  $dice
     * @return \Illuminate\Contracts\View\View
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
