<?php

namespace App\Http\Controllers\Player;

use App\Http\Controllers\Controller;
use App\Player;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BanController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('staff');
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
        return view('players.bans.create', [ 'player' => $player ]);
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
        // Find the ban matching the player's identifier or create otherwise.
        $player->ban()->firstOrCreate(['identifier' => $player->identifier], [
            'ban-id' => self::makeBanId(),
            'banner-id' => Auth::user()->player->staff,
            'identifier' => $player->identifier,
            'reason' => $request->get('reason')
        ]);

        // Redirect user to the player's show profile.
        return redirect()->route('players.show', [ 'player' => $player ]);
    }

    /**
     * Makes a nice random 7 character string to use for ban IDs.
     *
     * @return string
     */
    protected static function makeBanId()
    {
        // Just do some magic with md5.
        return substr(md5(mt_rand()), 0, 7);
    }
}
