<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        return view('dashboard');
    }

    public function task()
    {
        return view('task');
    }

    public function reward()
    {
        return view('reward');
    }
    public function chat()
    {
        $users = User::where('id', '!=', Auth::id())->get();
        return view('chat', ['users' => $users]);
    }
}
