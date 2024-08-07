<?php

namespace App\Policies;

use App\Models\User;
use Illuminate\Support\Facades\Auth;

class UserPolicy
{
    public function update_notifications(User $user): bool
    {
        return Auth::user()->is($user);
    }
}
