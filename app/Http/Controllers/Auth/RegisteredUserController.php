<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use App\Models\Student;
use Illuminate\View\View;

use Illuminate\Http\Request;
use Illuminate\Validation\Rules;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\RedirectResponse;
use Illuminate\Auth\Events\Registered;
use App\Providers\RouteServiceProvider;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:users'],
     'password' => ['required', 'confirmed', Rules\Password::defaults()],
    
    'phone_number' => ['required', 'string', 'max:12'],
    
    'national_id_number' => ['required', 'string', 'max:20', 'unique:students'],
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ])->assignRole('Student');

        // dd($user);

        $student = Student::create([
            
            'phone_number' => $request->phone_number,
            'user_id' => $user->id,
            'al_batch' => $request->al_batch,
            
            
            'birthday' => $request->birthday,
            'address' => $request->address,
            'national_id_number' => $request->national_id_number,
        ]);

        

        event(new Registered($user));

        Auth::login($user);

        return redirect(RouteServiceProvider::HOME);
    }
}