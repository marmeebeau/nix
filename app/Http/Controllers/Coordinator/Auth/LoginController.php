<?php

namespace App\Http\Controllers\Coordinator\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class LoginController extends Controller
{
    /**
     * Display the login view.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('coordinator.auth.login');
    }

    /**
     * Handle an incoming authentication request.
     *
     * @param  \App\Http\Requests\Auth\LoginRequest  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(LoginRequest $request)
    {
        // $credentials = [
        //     'email' => $request->input('coordinator_email'),
        //     'password' => $request->input('coordinator_password'),
        // ];

        // Log::info($request->only('coordinator_email', 'coordinator_password'));

        // Log::warning('Login failed for email: ' . $request->coordinator_email);

        $request->authenticate();

        $request->session()->regenerate();

        return redirect()->intended(RouteServiceProvider::HOME);
    }

    /**
     * Destroy an authenticated session.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Request $request)
    {
        Auth::guard('coordinator')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/welcome');
    }
}
