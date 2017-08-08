<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use App\UserRol;
use App\Roles;
use Auth;

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
        $userId = Auth::user()->id;
        $rolId = UserRol::select('role_id')->where('user_id',$userId)->first();
        $rolId = $rolId->role_id;
        $roles = Roles::where('id',$rolId)->first();
        Session::push('roles', $roles);
        return view('home');
     }

    public function menu(){                
        $userId = Auth::user()->id;
        $rolId = UserRol::select('role_id')->where('user_id',$userId)->first();
        $rolId = $rolId->role_id;
        $roles = Roles::where('id',$rolId)->first();
        Session::push('roles', $roles);
        return view('home');
    }
}
