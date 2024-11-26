<?php

namespace App\Policies;

use App\Models\User;
use App\Models\Grupo;
use Illuminate\Auth\Access\HandlesAuthorization;

class GrupoPolicy
{
    use HandlesAuthorization;

    public function viewAny(User $user): bool
    {
        return $user->can('view_any_grupo');
    }

    public function view(User $user, Grupo $grupo): bool
    {
        return $user->can('view_grupo');
    }

    public function create(User $user): bool
    {
        return $user->can('create_grupo');
    }

    public function update(User $user, Grupo $grupo): bool
    {
        return $user->can('update_grupo');
    }

    public function delete(User $user, Grupo $grupo): bool
    {
        return $user->can('delete_grupo');
    }

    public function deleteAny(User $user): bool
    {
        return $user->can('delete_any_grupo');
    }

    public function forceDelete(User $user, Grupo $grupo): bool
    {
        return $user->can('force_delete_grupo');
    }

    public function forceDeleteAny(User $user): bool
    {
        return $user->can('force_delete_any_grupo');
    }

    public function restore(User $user, Grupo $grupo): bool
    {
        return $user->can('restore_grupo');
    }

    public function restoreAny(User $user): bool
    {
        return $user->can('restore_any_grupo');
    }

    public function replicate(User $user, Grupo $grupo): bool
    {
        return $user->can('replicate_grupo');
    }

    public function reorder(User $user): bool
    {
        return $user->can('reorder_grupo');
    }
}
