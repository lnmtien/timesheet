<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use App\User;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    
    protected $redirectTo = '/home';
    
    protected function authenticated(Request $request, $user)
    {
        if ($request->ajax()){
            return response()->json([
                'auth' => auth()->check(),
                'user' => $user,
                'intended' => $this->redirectTo
            ]);
        }
    }
    
    protected function credentials(Request $request)
    {
        $credentials = $request->only($this->username(), 'password');
        $credentials['status'] = 0;
        return $credentials;
    }
    
    protected function sendFailedLoginResponse(Request $request)
    {
        $errors = ['error' => trans('auth.failed')];

        $user = User::where($this->username(), $request->{$this->username()})->first();
        if ($user && \Hash::check($request->password, $user->password) && $user->status != 0) {
            $errors = ['error' => trans('auth.deactivated')];
        }

        if ($request->expectsJson()) {
            return response()->json($errors, 422);
        }
        return redirect()->back()
            ->withInput($request->only($this->username(), 'remember'))
            ->withErrors($errors);
    }

    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
}
