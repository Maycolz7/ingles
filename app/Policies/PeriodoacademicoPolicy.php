<?php

namespace App\Policies;

use App\Models\User;
use App\Models\Periodoacademico;
use Illuminate\Auth\Access\HandlesAuthorization;

class PeriodoacademicoPolicy
{
    use HandlesAuthorization;

    public function viewAny(User $user): bool
    {
        return $user->can('view_any_periodoacademico');
    }

    public function view(User $user, Periodoacademico $periodoacademico): bool
    {
        return $user->can('view_periodoacademico');
    }

    public function create(User $user): bool
    {
        return $user->can('create_periodoacademico');
    }

    public function update(User $user, Periodoacademico $periodoacademico): bool
    {
        return $user->can('update_periodoacademico');
    }

    public function delete(User $user, Periodoacademico $periodoacademico): bool
    {
        return $user->can('delete_periodoacademico');
    }

    public function deleteAny(User $user): bool
    {
        return $user->can('delete_any_periodoacademico');
    }

    public function forceDelete(User $user, Periodoacademico $periodoacademico): bool
    {
        return $user->can('force_delete_periodoacademico');
    }

    public function forceDeleteAny(User $user): bool
    {
        return $user->can('force_delete_any_periodoacademico');
    }

    public function restore(User $user, Periodoacademico $periodoacademico): bool
    {
        return $user->can('restore_periodoacademico');
    }

    public function restoreAny(User $user): bool
    {
        return $user->can('restore_any_periodoacademico');
    }

    public function replicate(User $user, Periodoacademico $periodoacademico): bool
    {
        return $user->can('replicate_periodoacademico');
    }

    public function reorder(User $user): bool
    {
        return $user->can('reorder_periodoacademico');
    }
}
