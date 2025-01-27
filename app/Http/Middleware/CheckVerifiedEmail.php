<?php
namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class CheckVerifiedEmail
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        // Get the user by email from the request
        $user = \App\User::where('email', $request->email)->first();

        if (!$user || is_null($user->email_verified_at)) {
            // Return an error response if the email is not verified
            return redirect()->back()->withErrors(['email' => 'The email address must be registered and verified to reset your password.']);
        }

        return $next($request);
    }
}
