<?php

namespace App\Http\Controllers\Player;

use App\Http\Controllers\Controller;
use App\Player;
use App\Warning;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class WarningController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @param Player $player
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index(Player $player)
    {
        // Display the player's warnings in the view. test
        return view('players.warnings.index', [
            'player' => $player,
            'warnings' => $player->warnings()->latest()->paginate(10)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @param Player $player
     * @return \Illuminate\Http\Response
     */
    public function create(Player $player)
    {
        // Render view for creating a new warning.
        return view('players.warnings.create', [ 'player' => $player ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @param Player $player
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function store(Request $request, Player $player)
    {
        // Create the warning and persist it to the database.
        $warning = $player->warnings()->create([
            'issuer_id' => Auth::user()->player->id,
            'message' => $request->get('message')
        ]);

        // Redirect user to the player's index.
        return $this->index($player);
    }

}
