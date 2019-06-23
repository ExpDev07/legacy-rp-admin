<?php

namespace App\Http\Controllers\Player;

use App\Http\Controllers\Controller;
use App\Player;

class LogController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('staff');
    }

    /**
     * Display a listing of the resource.
     *
     * @param Player $player
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index(Player $player)
    {
        // Display the player's logged actions in the view (simple for easy db load).
        return view('players.logs.index', [
            'player' => $player,
            'logs' => $player->logs()->latest()->simplePaginate(50)
        ]);
    }

}