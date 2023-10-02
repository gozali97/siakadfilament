<?php

namespace App\Policies;

use App\Models\User;
use App\Models\WaliKelas;
use Illuminate\Auth\Access\Response;

class WaliKelasPolicy
{
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user): bool
    {
        return $user->can('view_any_wali::kelas');
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user, WaliKelas $waliKelas): bool
    {
        return $user->can('view_wali::kelas');
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user): bool
    {
        return $user->can('create_wali::kelas');
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, WaliKelas $waliKelas): bool
    {
        return $user->can('update_wali::kelas');
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, WaliKelas $waliKelas): bool
    {
        return $user->can('delete_wali::kelas');
    }

    /**
     * Determine whether the user can restore the model.
     */

    public function deleteAny(User $user, WaliKelas $waliKelas): bool
    {
        return $user->can('delete_any_wali::kelas');
    }

    public function restore(User $user, WaliKelas $waliKelas): bool
    {
        return $user->can('{{ Restore }}');
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(User $user, WaliKelas $waliKelas): bool
    {
        return $user->can('{{ ForceDelete }}');
    }
}
