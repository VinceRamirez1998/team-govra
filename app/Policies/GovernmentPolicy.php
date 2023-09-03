<?php

namespace App\Policies;

use App\Models\Government;
use App\Models\User;
use Illuminate\Auth\Access\Response;

class GovernmentPolicy
{
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user): bool
    {
        return $user->hasRole('Super Admin');
        
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user, Government $government): bool
    {
        return $user->hasRole('Super Admin');
        
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user): bool
    {
        return $user->hasRole('Super Admin');
        
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, Government $government): bool
    {
        return $user->hasRole('Super Admin');
        
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, Government $government): bool
    {
        return $user->hasRole('Super Admin');
        
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(User $user, Government $government): bool
    {
        return $user->hasRole('Super Admin');
        
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(User $user, Government $government): bool
    {
        return $user->hasRole('Super Admin');
        
    }
}