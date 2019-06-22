<?php

namespace App\Http\Controllers;

use App\Ban;
use App\Player;

class BanController extends Controller
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

    }

    /**
     * Display the specified resource.
     *
     * @param Ban $ban
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function show(Ban $ban)
    {

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Ban $ban
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function destroy(Ban $ban)
    {
        // Destroy/delete the player's ban.
        $ban->forceDelete();

        // Redirect user to the player's show profile.
        return redirect()->route('players.show', [ 'player' => $ban->player ]);
    }

}
