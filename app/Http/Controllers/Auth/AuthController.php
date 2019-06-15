<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Support\Facades\Auth;
use Invisnik\LaravelSteamAuth\SteamAuth;
use App\Http\Controllers\Controller;
use App\User;

class AuthController extends Controller
{
    /**
     * The SteamAuth instance.
     *
     * @var SteamAuth
     */
    protected $steam;

    /**
     * Where to redirect users after authenticating.
     *
     * @var string
     */
    protected $redirectTo = '/';

    /**
     * AuthController constructor.
     *
     * @param SteamAuth $steam
     */
    public function __construct(SteamAuth $steam)
    {
        $this->steam = $steam;
    }

    /**
     * Redirect the user to the authentication page.
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function redirectToSteam()
    {
        // Redirect the user to the steam authentication url.
        return $this->steam->redirect();
    }

    /**
     * Get user info and log in.
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function handle()
    {
        // If authentication cannot be validated, then redirect to steam login.
        if(!$this->steam->validate()) {
            return $this->redirectToSteam();
        }

        // Get the user's information from their steam.
        $info = $this->steam->getUserInfo();

        // Validate that the info is not null.
        if (!is_null($info)) {
            // Attempt to find the user or create them if they don't exist.
            $user = $this->findOrCreateUser($info);

            // Login with remember and direct to
            Auth::login($user, true);
            return redirect($this->redirectTo);
        }
    }

    /**
     * Getting user by info or create them if they do not exist.
     *
     * @param $info
     * @return User
     */
    protected function findOrCreateUser($info)
    {
        // Convert the steam64 to a hex which is used in FiveM for identifying users.
        $identifier = $this->steam64ToHex($info->steamID64);

        // Try to find the user by their identifier
        $user = User::where('identifier', $identifier)->first();

        // If we find the user, return them
        if (!is_null($user)) return $user;

        // Create and return them.
        return User::create([
            'identifier' => $identifier,
            'username' => $info->personaname,
            'avatar' => $info->avatarfull,
        ]);
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