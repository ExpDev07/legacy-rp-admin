<?php

namespace App\Http\Controllers;

use App\Player;
use App\Warning;
use Illuminate\Http\Request;

class WarningController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        //
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
     * @param Warning $warning
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function show(Warning $warning)
    {
        // Render the view and display the warning there.
        return view('warnings.show', [ 'warning' => $warning ]);
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
