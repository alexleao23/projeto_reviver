<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UsersController extends Controller
{
    protected $user;

    public function __construct(User $user)
    {
        $this->user = $user;
    }

    public function index()
    {
        $users = User::all();
        return view('users.index', compact('users'));
    }

    public function destroy($id)
    {
        $user = $this->user->find($id);
        $user->delete();
        return redirect('/admin/users');
    }
}
