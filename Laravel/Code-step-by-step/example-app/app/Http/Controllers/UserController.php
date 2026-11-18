<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    public function index()
    {
        $users = ['anil','andres', 'sam'];
        return view('user', ['users' => $users]);
    }

    public function getUser()
    {
        return 'this is getuser route';
    }

    public function details($name)
    {
        return "this is user details for $name route";
    }

    public function welcome()
    {
        return view('user/welcome');
    }
}
