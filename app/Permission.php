<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * A permission that can be assigned to different roles.
 *
 * @package App
 */
class Permission extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'action'
    ];

    /**
     * Gets all of the roles that has this permission assigned.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function roles()
    {
        return $this->belongsToMany(Role::class);
    }

    /**
     * Gets all of the users that this permission is assigned to through roles.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasManyThrough
     */
    public function users()
    {
        return $this->hasManyThrough(User::class, Role::class);
    }

}
