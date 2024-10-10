<?php

namespace App\Http\Controllers\Coordinator\Auth;

use App\Http\Controllers\Controller;
use App\Models\Coordinator;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('coordinator.auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     *
     * @throws \Illuminate\Validation\ValidationException
     */
public function store(Request $request)
{
    $validatedData = $request->validate([
        'coordinator_username' => ['required', 'string', 'max:255', 'unique:coordinators,coordinator_username'],
        'email' => ['required', 'string', 'email', 'max:255', 'unique:coordinators,email'],
        'password' => ['required', 'string', 'min:8'],
        'coordinator_fname' => ['required', 'string', 'max:255'],
        'coordinator_lname' => ['required', 'string', 'max:255'],
        // 'coordinator_birthday' => ['required', 'date'],
        // 'coordinator_gender' => ['required', 'in:M,F'],
        'coordinator_contactnumber' => ['required', 'string', 'max:15'],
        'coordinator_city' => ['required', 'string', 'max:255'],
    ]);

    $validatedData['password'] = Hash::make($validatedData['password']);

    $coordinator = Coordinator::create($validatedData);

    event(new Registered($coordinator));

    Auth::guard('coordinator')->login($coordinator);

    return redirect()->route('booking');
}
}
