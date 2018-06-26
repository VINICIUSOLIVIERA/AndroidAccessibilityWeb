<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Seek;
use App\User;

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
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title = "Dashboard";
        $description = "Tenha acesso as informações de maneira rápida.";
        $seeks = Seek::count("id");
        $users = User::where("id", "!=", 1)
                     ->count("id");

        return view('home', compact('seeks', 'users', 'title', 'description'));
    }

}
