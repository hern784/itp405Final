<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RegisterController extends Controller
{
    function index()
    {
        return view('register.index');
    }

    function shopper()
    {
        return view('register.shopper');
    }

    function register_shopper(Request $request)
    {

        $request->validate([
            'username' => 'required|unique:App\Models\Shopper,username',
            'password' => 'required|same:confirm',
            'confirm' => 'required|same:password',
        ]);

        DB::table('shoppers')
            ->insert([
                'username' => $request->input('username'),
                'password' => $request->input('password'),
            ]);

        return view('login.shopper');
    }

    function business()
    {
        return view('register.business');
    }

    function register_business(Request $request)
    {

        $request->validate([
            'name' => 'required|unique:App\Models\Shopper,username',
            'password' => 'required|same:confirm',
            'confirm' => 'required|same:password',
            'address' => 'required',
        ]);

        DB::table('businesses')
            ->insert([
                'username' => $request->input('username'),
                'password' => $request->input('password'),
                'address' => $request->input('address'),
                'max_occupancy' => $request->input('max_occupancy'),
                'cur_occupancy' => $request->input('cur_occupancy'),
            ]);

        return view('register.shopper');
    }
}
