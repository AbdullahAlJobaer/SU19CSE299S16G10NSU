<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;


class UserController extends Controller
{

    public function index()
    {
        $users = User::all();

        return view('users', ['users'=>$users]);
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show($id)
    {
        $user = User::where('id', $id)->first();// DB::table('places')->create(['name'=>$request->name,]);
        return view('profile', ['user'=>$user]);
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }




}
