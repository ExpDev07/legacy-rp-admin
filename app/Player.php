<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * A player.
 *
 * @package App
 */
class Player extends Model
{

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'users';

    /**
     * Whether to use timestamps.
     *
     * @var bool
     */
    public $timestamps = false;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'identifier', 'name', 'identifiers', 'playtime', 'seen', 'staff'
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'identifiers' => 'array',
        'seen' => 'datetime',
    ];

    /**
     * Checks whether this player is a staff member.
     *
     * @return bool
     */
    function is_staff()
    {
        return !is_null($this->staff);
    }

    /**
     * Gets the amount of time this player has spent on the server in a nice readable string.
     *
     * @return int
     */
    function play_time()
    {
        // Return a human-friendly readable string instead of the raw playtime.
        return self::seconds_to_human($this->playtime);
    }

    /**
     * Checks if the player is currently set to banned.
     *
     * @return bool
     */
    function is_banned()
    {
        return $this->bans()->exists();
    }

    /**
     * Gets the warnings that this person has received.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function warnings()
    {
        return $this->hasMany(Warning::class);
    }

    /**
     * Gets all the actions which has been logged for this player.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function logs()
    {
        return $this->hasMany(Log::class, 'identifier', 'identifier');
    }

    /**
     * Gets all of the user's bans. Due to how banning works, a ban might exist for multiple of the user's identifiers
     * such as ip address, steam, etc.
     *
     * @return \Illuminate\Database\Query\Builder
     */
    public function bans()
    {
        // Due to how banning works, there might exist a ban record for each of the player's identifier (steam, ip address
        // rockstar license, etc), and it's important to get all.
        return Ban::whereIn('identifier', $this->identifiers);
    }

    /**
     * Gets the player's character number one.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function character_one()
    {
        return $this->hasOne(Character::class, 'cid', 'cid1');
    }

    /**
     * Gets the player's character number two.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function character_two()
    {
        return $this->hasOne(Character::class, 'cid', 'cid2');
    }

    /**
     * Gets the player's character number three.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function character_three()
    {
        return $this->hasOne(Character::class, 'cid', 'cid3');
    }

    /**
     * Gets the player's character number four.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function character_four()
    {
        return $this->hasOne(Character::class, 'cid', 'cid4');
    }

    /**
     * Gets the link to steam profile or null if none found.
     *
     * @return string|null
     */
    function steam_profile()
    {
        // Attempt to resolve the steam profile using player's identifier.
        return self::resolve_steam_profile($this->identifier);
    }

    /**
     * Converts the given seconds to a human readable string.

     * https://snippetsofcode.wordpress.com/2012/08/25/php-function-to-convert-seconds-into-human-readable-format-months-days-hours-minutes/
     *
     * @param $ss
     * @return string
     */
    protected static function seconds_to_human($ss)
    {
        $s = $ss % 60;
        $m = floor(($ss % 3600) / 60);
        $h = floor(($ss % 86400) / 3600);
        $d = floor(($ss % 2592000) / 86400);
        $M = floor($ss / 2592000);

        // Return a friendly string that humans can easily read.
        return "$M months, $d days, $h hours, $m minutes, $s seconds";
    }

    /**
     * Takes the given identifier and tries to resolve it into a steam profile link. Gives null if the resolving
     * fails.
     *
     * @param $identifier
     * @return string|null
     */
    protected static function resolve_steam_profile($identifier)
    {
        // Get rid of any prefix.
        $parts = explode('steam:', $identifier);

        // Check if the prefix was found.
        if (count($parts) > 1) {
            // Return the link by turning the steam hex (steam16) back into decimal (steam64).
            return 'http://steamcommunity.com/profiles/' . hexdec($parts[1]);
        }
        return null;
    }

}
