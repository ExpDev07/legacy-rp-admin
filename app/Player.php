<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

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
     * Gets the amount of time this player has spent on the server in a nice readable string.
     *
     * @return int
     */
    function play_time() {
        return self::seconds_to_human($this->playtime);
    }

    /**
     * Gets the player's character number one.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function characterOne()
    {
        return $this->hasOne(Character::class, 'cid', 'cid1');
    }

    /**
     * Gets the player's character number two.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function characterTwo()
    {
        return $this->hasOne(Character::class, 'cid', 'cid2');
    }

    /**
     * Gets the player's character number three.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function characterThree()
    {
        return $this->hasOne(Character::class, 'cid', 'cid3');
    }

    /**
     * Gets the player's character number four.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function characterFour()
    {
        return $this->hasOne(Character::class, 'cid', 'cid4');
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
     * Gets the bans if player is banned, otherwise null. In practise, one player will have more than
     * one identifier banned.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function bans()
    {
        // Due to how banning works, there might exist a ban record for each of the player's identifier (steam, ip address
        // rockstar license, etc), and it's important to get all.
        // TODO 2/07/2019 4:14 AM - needs to be fixed
        // TODO - https://laracasts.com/discuss/channels/eloquent/eloquent-hasmany-wherein
        // TODO - https://stackoverflow.com/questions/56844284/using-eloquents-hasmany-relationship-with-wherein
        // return $this->hasMany(Ban::class)->whereIn('identifier', $this->identifiers);
        return $this->hasMany(Ban::class, 'identifier', 'identifier');
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
     * Converts the given seconds to a human readable string.

     * https://snippetsofcode.wordpress.com/2012/08/25/php-function-to-convert-seconds-into-human-readable-format-months-days-hours-minutes/
     *
     * @param $ss
     * @return string
     */
    static function seconds_to_human($ss) {
        $s = $ss % 60;
        $m = floor(($ss % 3600) / 60);
        $h = floor(($ss % 86400) / 3600);
        $d = floor(($ss % 2592000) / 86400);
        $M = floor($ss / 2592000);

        // Return a friendly string that humans can easily read.
        return "$M months, $d days, $h hours, $m minutes, $s seconds";
    }

}
