<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

/**
 * An user of the panel.
 *
 * @package App
 */
class User extends Authenticatable
{
    use Notifiable;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'webpanel_users';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'identifier', 'username', 'avatar', 'super_admin'
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
     * Checks if the user is a super administrator.
     *
     * @return boolean
     */
    public function is_super_admin()
    {
        return $this->super_admin;
    }

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

    /**
     * Gets the role assigned to this user.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function role()
    {
        return $this->belongsTo(Role::class);
    }

    public function permissions()
    {

    }

}
