<?php

namespace App\Http\Controllers;

use Illuminate\View\View;
use App\Models\User;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function index(): View
    {
        return view('users.usershow', [
            'User' => User::latest()->paginate(3)
        ]);
    }
}
