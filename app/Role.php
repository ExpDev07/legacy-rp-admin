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
     * Checks if the role has permission to perform the provided action.
     *
     * @param string $action
     * @return bool
     */
    public function hasPermission(string $action)
    {
        // Check if the role has a permission where the action is set to the provided one.
        return $this->permissions()->where('action', $action)->exists();
    }

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
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function permissions()
{
    return $this->belongsToMany(Permission::class);
}

}
