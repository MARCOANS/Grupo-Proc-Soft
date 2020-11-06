<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Usuario;
use Auth;
use Illuminate\Http\Request;
use Session;

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

    //use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    // protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('guest')->except('logout');
    }

    public function login()
    {
        return view('login');
    }

    public function authenticate(Request $request)
    {

        if ($user = Usuario::where('usu_login', $request->username)->where('usu_password', $request->password)->first()) {
            Auth::login($user);
            return redirect()->to('/admin/usuario');
        } else {
            return redirect()->back()->with('errors', ['Datos de acceso incorrectos']);
        }
    }

    public function logout()
    {
        Session::flush();
        Auth::logout();
        return redirect()->to('/');
    }
}
