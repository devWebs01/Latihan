<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Redirect;
use Inertia\Inertia;

class UserController extends Controller
{
    public function index()
    {
        $users = User::latest()->get();

        return Inertia::render('users/index', [
            'users' => $users,
        ]);
    }

    public function create()
    {
        return Inertia::render('users/create');
    }

    public function store(request $request)
    {
        $validate = $request->validate([
            'name' => 'required|min:5',
            'email' => 'required|email',
            'password' => 'required|password',
        ]);

        User::create($validate);

        return Redirect::route('users.index')->with('success', 'Proses berhasil ditambahkan!');
    }

    public function show(User $user)
    {
        return inertia::render('users/show', [
            'user' => $user,
        ]);
    }

    public function update(Request $request, User $user)
    {

        $validate = $request->validate([
            'name' => 'required|min:5',
            'email' => 'required|email',
            'password' => 'nullable|password',
        ]);

        $user->update($validate);

        return Redirect::route('users.index')->with('success', 'Proses berhasil ditambahkan!');

    }

    public function destroy(User $user)
    {
        $user->delete();

        return Redirect::route('users.index')->with('success', 'Telah di hapus');
    }
}
