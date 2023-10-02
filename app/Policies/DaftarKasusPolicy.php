<?php

namespace App\Policies;

use App\Models\DaftarKasus;
use App\Models\User;

class DaftarKasusPolicy
{
    /**
     * Create a new policy instance.
     */
    public function viewAny(User $user): bool
    {
        return $user->can('view_any_daftar::kasus');
    }

    /**
     * Determine whether the user can view the model.
     *
     * @param  \App\Models\User  $user
     * @param  \Spatie\Permission\Models\Kasus  $daftarKasus
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function view(User $user, DaftarKasus $daftarKasus): bool
    {
        return $user->can('view_daftar::kasus');
    }

    /**
     * Determine whether the user can create models.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function create(User $user): bool
    {
        return $user->can('create_daftar::kasus');
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\Models\User  $user
     * @param  \Spatie\Permission\Models\Kasus  $daftarKasus
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function update(User $user, DaftarKasus $daftarKasus): bool
    {
        return $user->can('update_daftar::kasus');
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \Spatie\Permission\Models\Kasus  $daftarKasus
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function delete(User $user, DaftarKasus $daftarKasus): bool
    {
        return $user->can('delete_daftar::kasus');
    }

    /**
     * Determine whether the user can bulk delete.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function deleteAny(User $user): bool
    {
        return $user->can('delete_any_daftar::kasus');
    }

    /**
     * Determine whether the user can permanently delete.
     *
     * @param  \App\Models\User  $user
     * @param  \Spatie\Permission\Models\Kasus  $daftarKasus
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function forceDelete(User $user, DaftarKasus $daftarKasus): bool
    {
        return $user->can('{{ ForceDelete }}');
    }

    /**
     * Determine whether the user can permanently bulk delete.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function forceDeleteAny(User $user): bool
    {
        return $user->can('{{ ForceDeleteAny }}');
    }

    /**
     * Determine whether the user can restore.
     *
     * @param  \App\Models\User  $user
     * @param  \Spatie\Permission\Models\Kasus  $daftarKasus
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function restore(User $user, DaftarKasus $daftarKasus): bool
    {
        return $user->can('{{ Restore }}');
    }

    /**
     * Determine whether the user can bulk restore.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function restoreAny(User $user): bool
    {
        return $user->can('{{ RestoreAny }}');
    }

    /**
     * Determine whether the user can replicate.
     *
     * @param  \App\Models\User  $user
     * @param  \Spatie\Permission\Models\Kasus  $daftarKasus
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function replicate(User $user, DaftarKasus $daftarKasus): bool
    {
        return $user->can('{{ Replicate }}');
    }

    /**
     * Determine whether the user can reorder.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function reorder(User $user): bool
    {
        return $user->can('{{ Reorder }}');
    }
}
