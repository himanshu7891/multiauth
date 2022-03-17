<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class DashboardController extends Controller
{
    public function index()
    {
        if(Auth::user()->hasRole('admin')) {
            return view('admin.dashboard');
        } elseif(Auth::user()->hasRole('user')) {
            return view('user.dashboard');
        }
    }

    public function test() {
        dd('test');
    }
}
