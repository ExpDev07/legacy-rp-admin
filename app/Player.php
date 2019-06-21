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
        'data' => 'array',
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
     * Gets the ban if player is banned, otherwise null.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function ban()
    {
        return $this->hasOne(Ban::class, 'identifier', 'identifier');
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

        return "$M months, $d days, $h hours, $m minutes, $s seconds";
    }

}
