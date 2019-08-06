<?php

class UserController extends Controller
{

    public function index()
    {
        $users = User::all();

        return view('users', ['users'=>$users]);
    }

}
