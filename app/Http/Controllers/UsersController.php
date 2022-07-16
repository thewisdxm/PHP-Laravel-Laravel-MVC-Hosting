<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Users;

class UsersController extends Controller
{
    // Display or Get Users Function
    public function index()
    {
        $users = Users::all();
        return view ('users.users')->with('users', $users);
    }

    // Allows a new user to be created
    public function create()
    {
        return view ('users.create');
    }

    // Stores new user data
    public function store(Request $request)
    {
        $input = $request->all();
        Users::create($input);
        return redirect('users')->with('flash_message', 'User Added!'); 
    }

    // Edit a User's Data
    public function edit($id)
    {
        $user = Users::find($id);
        return view('users.edit')->with('users', $user);
    }

    // On request, a User's data can be viewed
    public function show($id)
    {
        $user = Users::find($id);
        return view('users.show')->with('users', $user);
    }

    // Update User's Data following Edit
    public function update(Request $request, $id)
    {
        $user = Users::find($id);
        $input = $request->all();
        $user->update($input);
        return redirect('users')->with('flash_message', 'User Updated!');
    }

    // Deletes a User's data
    public function destroy($id)
    {
        Users::destroy($id);
        return redirect('users')->with('flash_message', 'User Deleted!'); 
    }
}