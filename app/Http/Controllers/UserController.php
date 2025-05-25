<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        return view('welcome');
    }

    public function register()
    {
        return view('register');
    }

    public function create()
    {
        return view('user.create');
    }

    public function store(Request $request)
    {
        // Logic to store user data
        return redirect()->route('user.index');
    }

    public function show($id)
    {
        return view('user.show', compact('id'));
    }

    public function edit($id)
    {
        return view('user.edit', compact('id'));
    }

    public function update(Request $request, $id)
    {
        // Logic to update user data
        return redirect()->route('user.index');
    }

    public function destroy($id)
    {
        // Logic to delete user data
        return redirect()->route('user.index');
    }
    public function search(Request $request)
    {
        $query = $request->input('query');
        // Logic to search for users
        return view('user.search', compact('query'));
    }
    public function filter(Request $request)
    {
        $filter = $request->input('filter');
        // Logic to filter users
        return view('user.filter', compact('filter'));
    }
}
