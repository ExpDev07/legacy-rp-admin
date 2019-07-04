<?php

namespace App\Http\Controllers;

use App\Player;
use Illuminate\Http\Request;

class PlayerController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('staff');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Get the query which the user is trying to give and then find players matching that query.
        $query = strtolower(request('query', ''));

        // Find players where identifier or name is similar to the provided query.
        $players = Player
            ::whereRaw('lower(identifier) like (?)', ["%{$query}%"])
            ->orWhereRaw('lower(name) like (?)', ["%{$query}%"])
            ->simplePaginate(10);

        // Return the view.
        return view('players.index', compact('players'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param Player $player
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function show(Player $player)
    {
        // Return the view to show the provided player.
        return view('players.show', compact('player'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Player $player
     */
    public function edit(Player $player)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param Player $player
     */
    public function update(Request $request, Player $player)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Player $player
     */
    public function destroy(Player $player)
    {
        //
    }

}
