<?php

namespace App\Policies;

use App\Models\User;
use App\Models\Curso;
use Illuminate\Auth\Access\HandlesAuthorization;

class CursoPolicy
{
    use HandlesAuthorization;

    public function viewAny(User $user): bool
    {
        return $user->can('view_any_curso');
    }

    public function view(User $user, Curso $curso): bool
    {
        return $user->can('view_curso');
    }

    public function create(User $user): bool
    {
        return $user->can('create_curso');
    }

    public function update(User $user, Curso $curso): bool
    {
        return $user->can('update_curso');
    }

    public function delete(User $user, Curso $curso): bool
    {
        return $user->can('delete_curso');
    }

    public function deleteAny(User $user): bool
    {
        return $user->can('delete_any_curso');
    }

    public function forceDelete(User $user, Curso $curso): bool
    {
        return $user->can('force_delete_curso');
    }

    public function forceDeleteAny(User $user): bool
    {
        return $user->can('force_delete_any_curso');
    }

    public function restore(User $user, Curso $curso): bool
    {
        return $user->can('restore_curso');
    }

    public function restoreAny(User $user): bool
    {
        return $user->can('restore_any_curso');
    }

    public function replicate(User $user, Curso $curso): bool
    {
        return $user->can('replicate_curso');
    }

    public function reorder(User $user): bool
    {
        return $user->can('reorder_curso');
    }
}
