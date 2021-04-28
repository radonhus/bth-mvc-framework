<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Game21\Game21;
use Illuminate\Http\Request;

class Game21Controller extends Controller
{

    /**
     * Welcome page.
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function welcome()
    {
        return view('game21', [
            'title' => "Game21 | DiceLaVerdad"
        ]);
    }

    /**
     * Initiate a new Game21 session.
     *
     * @param  Request  $request
     * @property array  $post
     * @property  array  $request
     * @return \Illuminate\Contracts\View\View
     */
    public function initiate(Request $request)
    {

        $post = $request->all();

        $game21Object = new Game21(intval($post["oneortwo"]));
        $data = $game21Object->playGame($post);

        session()->put('game21', $game21Object);

        return view('game21play', [
            'title' => "Game21 | DiceLaVerdad",
            'data' => $data,
            'post' => $post
        ]);
    }

    /**
     * Initiate a new Game21 session.
     *
     * @param  Request  $request
     * @property array  $post
     * @property  array  $request
     * @property object  $game21Object
     * @property array  $data
     * @return \Illuminate\Contracts\View\View
     */
    public function play(Request $request)
    {
        $post = $request->all();
        $game21Object = session()->get('game21');
        $data = $game21Object->playGame($post);

        session()->put('game21', $game21Object);

        return view('game21play', [
            'title' => "Game21 | DiceLaVerdad",
            'data' => $data,
            'post' => $post
        ]);
    }
}
