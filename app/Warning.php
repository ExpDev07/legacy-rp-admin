<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Warning extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'issuer_id', 'message'
    ];

    /**
     * Gets the player that received this warning.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function player()
    {
        return $this->belongsTo(Player::class);
    }

    /**
     * Gets the player that issued this warning.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function issuer()
    {
        return $this->belongsTo(Player::class);
    }

}
