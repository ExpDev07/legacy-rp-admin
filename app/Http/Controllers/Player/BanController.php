<?php

namespace App\Http\Controllers\Player;

use App\Ban;
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
        return view('players.bans.create', compact('player'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Player $player
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Player $player)
    {
        // Make an id which will represent this batch of bans.
        $ban_id = self::makeBanId();

        // Go through the player's identifiers and create a ban record for each of them.
        foreach ($player->identifiers as $identifier) {
            // Make sure there's only one ban per identifier by updating if one already
            // exists.
            Ban::updateOrCreate(['identifier' => $identifier], [
                'identifier' => $identifier,
                'ban-id' => $ban_id,
                'banner-id' => Auth::user()->player->staff,
                'reason' => request('reason')
            ]);
        }

        // Redirect user to the player's show profile.
        return redirect()->route('players.show', compact('player'));
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
        return redirect()->route('players.show', compact('player'));
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
