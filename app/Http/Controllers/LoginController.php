<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index()
    {
        return view('auth.login');
    }

    public function store(Request $request)
    {

        $this->validate($request,  [

            'email' => 'required|email',
            'password' => 'required',

        ]);

        if(!auth()->attempt($request->only('email', 'password'), $request->remember)) {

           /* if($request == 'remember' )
            {
                return redirect()->route('post.index');
            }
            else($request != 'remember')
            {
                 redirect()->route('post.index');
            }





            */
            return back()->with('mensaje', 'Credenciales Incorrectas');
        }

        return redirect()->route('post.index');
    }
}

