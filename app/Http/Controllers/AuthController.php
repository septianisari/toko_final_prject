<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login()
    {

        return view('login');
    }


    public function loginAction(Request $req)
    {
        $data = [
            'email' => $req->input('email'),
            'password' => $req->input('password'),
        ];

        if (auth()->attempt($data)) {

            // return redirect('admin/barang');
            $req->session()->regenerate();
            if (auth()->user()->role_id === 1) {
                // jika user superadmin
                return redirect()->intended('/admin/barang');
            } else {
                // jika user pegawai
                return redirect()->intended('/');
            }
        } else {
            return redirect('admin/login')->with('error', 'Email atau Password tidak sesuai');
        }
    }

    public function logoutAction()
    {
        Auth::logout();
        return redirect('/');
    }
}
