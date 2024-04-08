<?php

namespace App\Http\Controllers;


use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Inertia\Inertia;
use Psy\Util\Str;

class UserController extends Controller
{
    function createAdmin(): \Inertia\Response
    {

        return Inertia::render('Users/CreateAdmin');
    }
    function storeAdmin(Request $request){
        $validationRequest= $request->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
            'admin' => 'required'
        ]);
        User::create($validationRequest);
        return Redirect::route('dashboard');
    }
}
