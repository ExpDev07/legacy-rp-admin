<?php

namespace App\Http\Controllers\Player;

use App\Http\Controllers\Controller;
use App\Player;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class WarningController extends Controller
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
        // Display the player's warnings in the view. Show only 8 results per page.
        return view('players.warnings.index', [
            'player' => $player,
            'warnings' => $player->warnings()->latest()->paginate(8)
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Player $player
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function store(Player $player)
    {
        // Create the warning and persist it to the database.
        $player->warnings()->create([
            'message' => request('message'),
            'issuer_id' => Auth::user()->player->id
        ]);

        // Redirect user to the index page for player's warnings.
        return back();
        //return redirect()->route('players.warnings.index', compact('player'));
    }

}
