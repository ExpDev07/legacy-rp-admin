<?php

namespace App\Http\Controllers;

use App\Warning;
use Illuminate\Http\Request;

class WarningController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('staff');
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
        return view('warnings.show', compact('warning'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Warning $warning
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function edit(Warning $warning)
    {
        // Show view which has the form to edit the warning.
        return view('warnings.edit', compact('warning'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param Warning $warning
     */
    public function update(Request $request, Warning $warning)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Warning $warning
     */
    public function destroy(Warning $warning)
    {
        //
    }

}
