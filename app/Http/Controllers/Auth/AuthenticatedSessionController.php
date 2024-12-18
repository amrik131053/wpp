<?php

namespace App\Http\Controllers\Auth;
use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class AuthenticatedSessionController extends Controller
{
    /**
     * Display the login view.
     */
    public function create():RedirectResponse|View
    {
        if(Auth::user())
        {
            $user = Auth::user();
            $usertype=$user->user_type;
            if($usertype==0) {

             return redirect()->route('student.dashboard');
            }

            else if($usertype==1)
            {
                return redirect()->route('staff.dashboard');
            }
            else
            {
                return redirect()->route('login')->withErrors(['user_type' => 'Invalid user type.']);

            }
                    
        } 
        else
        {
            //return Redirect::route('auth.login'); 
             return view('auth.login');
        }
    }

    /**
     * Handle an incoming authentication request.
     */
    public function store(LoginRequest $request)
    {
        // $request->authenticate();

        // $request->session()->regenerate();

        // return redirect()->intended(RouteServiceProvider::HOME);

// Validate and attempt login
//$this->validateLogin($request);

if (Auth::attempt($request->only('email','password'))) {
    $user = Auth::user();
    switch ($user->user_type) {
        case '0':
            return redirect()->route('student.dashboard');
        case '1':
            return redirect()->route('staff.dashboard');
              default:
            Auth::logout();
            return redirect()->route('login')->withErrors(['user_type' => 'Invalid user type.']);
    }
}
return back()->withErrors([
    'email' => 'The provided credentials do not match our records.',
]);
    }

//     protected function validateLogin(Request $request)
//     {
//         $request->validate([
//             'email' => 'required|string|email',
//             'password' => 'required|string',
//         ]);
// }


    /**
     * Destroy an authenticated session.
     */
    public function destroy(Request $request): RedirectResponse
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/login');
    }
}
