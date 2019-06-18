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
        // Convert the steam64 to a hex with a "steam" prefix which is used in FiveM for identity.
        $identifier = 'steam:' . $this->steam64ToHex($steamUser->steamId);

        // Find the user by their steam identifier in the database.
        $user = User::where('identifier', $identifier)->first();

        // If the user doesn't exist, create them.
        if (!$user) {
            // Retrieve and set user info pulled from steam.
            $info = $steamUser->getUserInfo();

            $user = User::create([
                'identifier' => $identifier,
                'avatar' => $info->avatar,
                'username' => $info->name,
            ]);
        }

        // Login the user using the Auth facade.
        Auth::login($user, true);
    }

    /**
     * Converts a steam64 identifier to hex which is more readable.
     *
     * @param $steam64
     * @return string
     */
    private function steam64ToHex($steam64)
    {
        // Convert decimal to hexadecimal.
        return dechex($steam64);
    }

}