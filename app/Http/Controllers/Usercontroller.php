<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Usercontroller extends Controller
{
    public function index()
    {
        $data['title'] = "User Dashboard";
        return view('users.dashboard.index');
    }
}