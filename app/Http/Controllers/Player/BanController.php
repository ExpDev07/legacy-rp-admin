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
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request, Player $player)
    {
        // Go through the player's identifiers and create a ban record for each of them.
        foreach ($player->identifiers as $identifier) {
            $player->bans()->updateOrCreate(['identifier' => $identifier], [
                'ban-id' => self::makeBanId(),
                'banner-id' => Auth::user()->player->staff,
                'reason' => $request->get('reason')
            ]);
        }

        // Redirect user to the player's show profile.
        return redirect()->route('players.show', [ 'player' => $player ]);
    }

    /**
     * Destroys all of the user's bans.
     *
     * @param Player $player
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Player $player)
    {
        // Delete all of of the user's bans.
        $player->bans()->forceDelete();

        // Redirect to the player's show profile.
        return redirect()->route('players.show', [ 'player' => $player ]);
    }

    /**
     * Makes a nice random 7 character string to use for ban IDs.
     *
     * @return string
     */
    protected static function makeBanId()
    {
        // Just do some magic with substringing and md5.
        return substr(md5(mt_rand()), 0, 7);
    }
}
