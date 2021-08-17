<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;
use App\Role;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\SaveUserRequest;
use App\Http\Requests\EditUserRequest;

class UserController extends Controller
{
    
    public function index()
    {
        $users = User::get();
        return view('users.index', compact('users'));
    }

    
    public function create()
    {
        $roles = Role::get();
        return view('users.create', compact('roles'));
    }
    
    public function store(SaveUserRequest $request)
    {
        /* User::create($request ->validated()); */

        $request ->validated();

        User::create([
            'name' => $request['name'],
            'user'  => $request['user'],
            'email' => $request['email'],
            'password' => Hash::make($request['password']),
            'role' => $request['role'],
            'status'=> $request['status'],
        ]);
        
        return redirect()->route('users.index');
    }

    public function show(User $user)
    {
        return view('users.show',[
            'user'=>$user
            ]);
    }
    
    public function edit(User $user)
    {
        $roles = Role::get();
               
        return view('users.edit',[
            'user'=>$user
            ])
        ->with(compact('roles'));
    }

    
    public function update(User $user, EditUserRequest $request)
    {
        $user->update($request->validated());
        
        return redirect()->route('users.index');
    }
    
    public function destroy($id)
    {
        //
    }
}
