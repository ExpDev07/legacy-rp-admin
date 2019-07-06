<?php

namespace App\Policies;

use App\User;
use App\Ban;
use Illuminate\Auth\Access\HandlesAuthorization;

class BanPolicy
{
    use HandlesAuthorization;
    
    /**
     * Determine whether the user can view any bans.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function viewAny(User $user)
    {
        //
    }

    /**
     * Determine whether the user can view the ban.
     *
     * @param  \App\User  $user
     * @param  \App\Ban  $ban
     * @return mixed
     */
    public function view(User $user, Ban $ban)
    {
        //
    }

    /**
     * Determine whether the user can create bans.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        //
    }

    /**
     * Determine whether the user can update the ban.
     *
     * @param  \App\User  $user
     * @param  \App\Ban  $ban
     * @return mixed
     */
    public function update(User $user, Ban $ban)
    {
        //
    }

    /**
     * Determine whether the user can delete the ban.
     *
     * @param  \App\User  $user
     * @param  \App\Ban  $ban
     * @return mixed
     */
    public function delete(User $user, Ban $ban)
    {
        return $user->has_permission('unban');
    }

    /**
     * Determine whether the user can restore the ban.
     *
     * @param  \App\User  $user
     * @param  \App\Ban  $ban
     * @return mixed
     */
    public function restore(User $user, Ban $ban)
    {
        return $this->delete($user, $ban);
    }

    /**
     * Determine whether the user can permanently delete the ban.
     *
     * @param  \App\User  $user
     * @param  \App\Ban  $ban
     * @return mixed
     */
    public function forceDelete(User $user, Ban $ban)
    {
        return $this->delete($user, $ban);
    }
}
