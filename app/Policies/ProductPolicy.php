<?php

namespace App\Policies;

use App\Models\Product;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class ProductPolicy
{
	use HandlesAuthorization;

	public function viewAny(User $user): bool
	{
        return in_array($user->role, ['admin', 'employee']);
	}

	public function view(User $user): bool
	{
        return in_array($user->role, ['admin', 'employee']);
	}

	public function create(User $user): bool
	{
        return $user->role === 'admin';
	}

	public function update(User $user): bool
	{
        return $user->role === 'admin';
	}

	public function delete(User $user): bool
	{
        return $user->role === 'admin';
	}

	public function restore(User $user): bool
	{
        return $user->role === 'admin';
	}

	public function forceDelete(User $user): bool
	{
        return $user->role === 'admin';
	}
}
