<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        if (auth()->user()->admin == "user"){
            return redirect()->route('user.dashboard');
        }
        else if (auth()->user()->admin == "admin"){
            return redirect()->route('admin.dashboard');
        }else{
            abort(403);
        }
    }
}
