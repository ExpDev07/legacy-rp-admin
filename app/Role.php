<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * A role which has a set of permissions and can be assigned to users.
 *
 * @package App
 */
class Role extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name'
    ];

    /**
     * Gets all of the users that has this role assigned to them.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function users()
    {
        return $this->hasMany(User::class);
    }

    /**
     * Gets all of the permissions that this role has.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function permissions()
    {
        return $this->hasMany(Permission::class );
    }

}
