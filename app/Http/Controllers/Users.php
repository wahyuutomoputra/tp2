<?php

namespace App\Http\Controllers;

use App\Models\Users as ModelsUsers;
use Illuminate\Http\Request;

class Users extends Controller
{
    public function index()
    {
        return view('login', [
            'error' => false,
            'message' => ''
        ]);
    }

    public function login(Request $request)
    {
        $email = $request->input('email');
        $password = $request->input('password');

        $users = ModelsUsers::firstWhere('email', $email);
       
        if ($users == null) {
            return view('login', [
                'error' => true,
                'message' => 'Email Not Found!'
            ]);
        }

        $data = $users->toArray();
        if ($password != $data['password']) {
            return view('login', [
                'error' => true,
                'message' => 'Wrong Password!'
            ]);
        }

        return view('homepage', [
            'users' => $data,
            'roles' => $users->roles->toArray()
        ]);
    }
}
