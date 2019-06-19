<?php

namespace App\Http\Controllers\Auth;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use kanalumaddela\LaravelSteamLogin\Http\Controllers\AbstractSteamLoginController;
use kanalumaddela\LaravelSteamLogin\SteamUser;

class SteamLoginController extends AbstractSteamLoginController
{

    /**
     * Where to redirect users after doing something.
     *
     * @var string
     */
    protected $redirectTo = '/';

    /**
     * Logs the user out.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function logout()
    {
        // Logout and redirect user.
        return redirect($this->redirectTo)->with(Auth::logout());
    }

    /**
     * {@inheritdoc}
     */
    public function authenticated(Request $request, SteamUser $steamUser)
    {
        // Convert the steam64 to a steam identifier used in FiveM.
        $id = $this->getSteamIdentifier($steamUser->steamId);

        // Find the user by their steam identifier in the database.
        $user = User::where('identifier', $id)->first();

        // If the user doesn't exist, create them.
        if (!$user) {
            // Retrieve and set user info pulled from steam.
            $steamUser->getUserInfo();

            $user = User::create([
                'identifier' => $id,
                'avatar' => $steamUser->avatar,
                'username' => $steamUser->name,
            ]);
        }

        // Login the user using the Auth facade.
        Auth::login($user, true);
    }

    /**
     * Takes the given steam64 and converts it into a nice steam identifier that FiveM uses for
     * identification purposes.
     *
     * @param $steam64
     * @return string
     */
    private function getSteamIdentifier($steam64)
    {
        // Convert decimal to hexadecimal and prepend a steam prefix.
        return 'steam' . ':' . dechex($steam64);
    }

}