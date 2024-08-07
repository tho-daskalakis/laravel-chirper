<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;

class UserController extends Controller
{
    /**
     * Update the specified resource in storage.
     */
    public function subscribeToMailNotifications(Request $request): RedirectResponse
    {
        $user = Auth::user();

        Gate::authorize('update_notifications', $user);

        $user->receive_email_notifications = true;

        $user->save();

        return redirect()->route('dashboard');
    }

    public function unsubscribeFromMailNotifications(Request $request): RedirectResponse
    {
        $user = Auth::user();

        Gate::authorize('update_notifications', $request->user());

        $user->receive_email_notifications = false;

        $user->save();

        return redirect()->route('dashboard');
    }
}
