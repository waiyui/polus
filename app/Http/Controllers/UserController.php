<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Http\Requests\UserRequest;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the users
     *
     * @param  \App\Models\User  $model
     * @return \Illuminate\View\View
     */
    public function index(User $model)
    {
        return view('users.index');
    }

    public function manager()
    {
        return view('department.manager');
    }

    public function designer()
    {
        return view('department.designer');
    }

    public function developer()
    {
        return view('department.developer');
    }
}
