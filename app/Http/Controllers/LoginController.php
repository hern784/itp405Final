<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class LoginController extends Controller
{
    function index()
    {
        return view('login.index');
    }

    function shopper()
    {
        return view('login.shopper');
    }

    function login_shopper(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'password' => 'required'
        ]);

        $user = DB::table('shoppers')
            ->select('*')
            ->where('username', '=', $request->input('username'))
            ->first();

        return $user->password !== $request->input('password') ?
            view('login.shopper') :
            view('shopper.profile', ['user' => $user]);
    }

    function business()
    {
        return view('login.business');
    }

    function login_business(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'password' => 'required'
        ]);

        $user = DB::table('shoppers')
            ->select('*')
            ->where('username', '=', $request->input('username'))
            ->first();

        return $user->password !== $request->input('password') ?
            view('login.shopper') :
            view('shopper.profile', ['user' => $user]);
    }
}
