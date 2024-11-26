<?php

namespace App\Policies;

use App\Models\User;
use App\Models\Matricula;
use Illuminate\Auth\Access\HandlesAuthorization;

class MatriculaPolicy
{
    use HandlesAuthorization;

    public function viewAny(User $user): bool
    {
        return $user->can('view_any_matricula');
    }

    public function view(User $user, Matricula $matricula): bool
    {
        return $user->can('view_matricula');
    }

    public function create(User $user): bool
    {
        return $user->can('create_matricula');
    }

    public function update(User $user, Matricula $matricula): bool
    {
        return $user->can('update_matricula');
    }

    public function delete(User $user, Matricula $matricula): bool
    {
        return $user->can('delete_matricula');
    }

    public function deleteAny(User $user): bool
    {
        return $user->can('delete_any_matricula');
    }

    public function forceDelete(User $user, Matricula $matricula): bool
    {
        return $user->can('force_delete_matricula');
    }

    public function forceDeleteAny(User $user): bool
    {
        return $user->can('force_delete_any_matricula');
    }

    public function restore(User $user, Matricula $matricula): bool
    {
        return $user->can('restore_matricula');
    }

    public function restoreAny(User $user): bool
    {
        return $user->can('restore_any_matricula');
    }

    public function replicate(User $user, Matricula $matricula): bool
    {
        return $user->can('replicate_matricula');
    }

    public function reorder(User $user): bool
    {
        return $user->can('reorder_matricula');
    }
}
