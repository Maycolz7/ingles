<?php

namespace App\Policies;

use App\Models\User;
use App\Models\Registro;
use Illuminate\Auth\Access\HandlesAuthorization;

class RegistroPolicy
{
    use HandlesAuthorization;

    public function viewAny(User $user): bool
    {
        return $user->can('view_any_registro');
    }

    public function view(User $user, Registro $registro): bool
    {
        return $user->can('view_registro');
    }

    public function create(User $user): bool
    {
        return $user->can('create_registro');
    }

    public function update(User $user, Registro $registro): bool
    {
        return $user->can('update_registro');
    }

    public function delete(User $user, Registro $registro): bool
    {
        return $user->can('delete_registro');
    }

    public function deleteAny(User $user): bool
    {
        return $user->can('delete_any_registro');
    }

    public function forceDelete(User $user, Registro $registro): bool
    {
        return $user->can('force_delete_registro');
    }

    public function forceDeleteAny(User $user): bool
    {
        return $user->can('force_delete_any_registro');
    }

    public function restore(User $user, Registro $registro): bool
    {
        return $user->can('restore_registro');
    }

    public function restoreAny(User $user): bool
    {
        return $user->can('restore_any_registro');
    }

    public function replicate(User $user, Registro $registro): bool
    {
        return $user->can('replicate_registro');
    }

    public function reorder(User $user): bool
    {
        return $user->can('reorder_registro');
    }
}
