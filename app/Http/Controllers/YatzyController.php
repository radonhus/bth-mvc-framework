<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Yatzy\Yatzy;
use Illuminate\Http\Request;

class YatzyController extends Controller
{
    /**
     * Start a new Yatzy session.
     *
     * @param  object  $yatzyObject
     * @param  array  $data
     * @return \Illuminate\View\View
     */
    public function start()
    {

        $yatzyObject = new Yatzy();

        $data = $yatzyObject->startNewRound();

        session()->put('yatzy', $yatzyObject);

        return view('yatzy', [
            'title' => "Yatzy | DiceLaVerdad",
            'data' => $data
        ]);
    }

    /**
     * Play Yatzy using request data from HTML form.
     *
     * @param  object  $yatzyObject
     * @param  array  $request
     * @param  array  $post
     * @param  array  $data
     * @return \Illuminate\View\View
     */
    public function play(Request $request)
    {

        $post = $request->all();

        $yatzyObject = session()->get('yatzy');

        $data = $yatzyObject->play($post);

        session()->put('yatzy', $yatzyObject);

        return view('yatzy', [
            'title' => "Yatzy | DiceLaVerdad",
            'data' => $data
        ]);
    }
}
