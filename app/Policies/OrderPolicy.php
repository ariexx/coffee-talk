<?php

namespace App\Policies;

use App\Models\Order;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class OrderPolicy
{
	use HandlesAuthorization;

	public function viewAny(User $user): bool
	{
        return in_array($user->role, ['admin', 'employee']);
	}

	public function view(User $user, Order $order): bool
	{
        return in_array($user->role, ['admin', 'employee']);
	}

	public function create(User $user): bool
	{
        return $user->role === 'admin';
	}

	public function update(User $user, Order $order): bool
	{
        if($order->user_id) {
            return in_array($user->role, ['admin', 'employee']) && $order->user_id === $user->id;
        }

        return in_array($user->role, ['admin', 'employee']);
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
