<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Yatzy\Yatzy;

class YatzyController extends Controller
{
    /**
     * Start a new Yatzy session.
     *
     * @param  string  $title
     * @param  array  $data
     * @return \Illuminate\View\View
     */
    public function start()
    {

        $yatzyObject = new Yatzy();

        $data = $yatzyObject->startNewRound();

        session(['yatzy' => $yatzyObject]);

        return view('yatzy', [
            'title' => "Yatzy | DiceLaVerdad",
            'data' => $data
        ]);
    }

    /**
     * Play Yatzy using POST data.
     *
     * @param  string  $title
     * @param  array  $data
     * @return \Illuminate\View\View
     */
    public function play()
    {

        return view('dice', [
            'title' => "Yatzy | DiceLaVerdad"
        ]);
    }
}
