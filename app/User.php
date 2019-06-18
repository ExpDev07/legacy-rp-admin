<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'identifier', 'username', 'avatar',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'remember_token',
    ];

    /**
     * Gets the player associated with this user account.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function player()
    {
        // return $this->hasOne('App\Phone', 'foreign_key', 'local_key');
        // return $this->hasOne('Player::class', 'identifier', 'identifier');
        return $this->hasOne(Player::class, 'identifier', 'identifier');
    }

}
