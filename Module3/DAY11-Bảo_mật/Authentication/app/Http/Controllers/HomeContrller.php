<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class HomeContrller extends Controller
{



    //đăng kí:
    public function show_form_register()
    {
        return view('register');
    }
    public function register(Request $request)
    {
        $request->validate(
            [
                'name' => 'required|unique:users|max:255',
                'email' => 'required|unique:users|max:255',
                'password' => 'required',

            ],
           
            [
                'email.required' => 'email bắt buộc',
                'email.unique' => 'email đã có',
                'password.required' => 'password bắt buộc',
            ],
        );
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);

        $user->save();
        return redirect()->route('login');
    }




    //đăng nhập:

    public function show_form_login()
    {
        return view('login');
    }
    public function login(Request $request)
    {
        $credentials = $request->validate(
            [
                'email' => ['required', 'email', 'unique'],
                'password' => ['required'],
            ],
            [
                'email.required' => 'email bắt buộc',
                'email.unique' => 'email đã có',
                'password.required' => 'password bắt buộc',
            ]
        );

        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            return redirect('/');
        }
        return redirect('')->back();

        // return back()->withErrors([
        //     'email' => 'The provided credentials do not match our records.',
        // ])->onlyInput('email');
    }
    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
