<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function showDashboard()
    {
    	return view('pages.dashboard');
    }

    public function showAddUser()
    {
    	return view('pages.adduser');
    }
}
