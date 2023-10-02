<?php

namespace App\Policies;

use App\Models\KepalaSekolah;
use App\Models\User;
use Illuminate\Auth\Access\Response;

class KepalaSekolahPolicy
{
    public function viewAny(User $user): bool
    {
        return $user->can('view_any_kepala::sekolah');
    }

    /**
     * Determine whether the user can view the model.
     *
     * @param  \App\Models\User  $user
     * @param  \Spatie\Permission\Models\KepalaSekolah  $kepalaSekolah
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function view(User $user, KepalaSekolah $kepalaSekolah): bool
    {
        return $user->can('view_kepala::sekolah');
    }

    /**
     * Determine whether the user can create models.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function create(User $user): bool
    {
        return $user->can('create_kepala::sekolah');
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\Models\User  $user
     * @param  \Spatie\Permission\Models\KepalaSekolah  $kepalaSekolah
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function update(User $user, KepalaSekolah $kepalaSekolah): bool
    {
        return $user->can('update_kepala::sekolah');
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \Spatie\Permission\Models\KepalaSekolah  $kepalaSekolah
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function delete(User $user, KepalaSekolah $kepalaSekolah): bool
    {
        return $user->can('delete_kepala::sekolah');
    }

    /**
     * Determine whether the user can bulk delete.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function deleteAny(User $user): bool
    {
        return $user->can('delete_any_kepala::sekolah');
    }

    /**
     * Determine whether the user can permanently delete.
     *
     * @param  \App\Models\User  $user
     * @param  \Spatie\Permission\Models\KepalaSekolah  $kepalaSekolah
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function forceDelete(User $user, KepalaSekolah $kepalaSekolah): bool
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
     * @param  \Spatie\Permission\Models\KepalaSekolah  $kepalaSekolah
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function restore(User $user, KepalaSekolah $kepalaSekolah): bool
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
     * @param  \Spatie\Permission\Models\KepalaSekolah  $kepalaSekolah
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function replicate(User $user, KepalaSekolah $kepalaSekolah): bool
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
