<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Player extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'identifier', 'name', 'identifiers', 'playtime', 'seen'
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

}
