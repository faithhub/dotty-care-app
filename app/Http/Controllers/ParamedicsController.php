<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ParamedicsController extends Controller
{
    public function index()
    {
        $data['title'] = "Paramedics";
        return view('paramedics.dashboard.index');
    }

    public function users()
    {
        $data['title'] = "Users";
        return view('paramedics.users.index');
    }
    public function add_user()
    {
        $data['title'] = "Users";
        return view('paramedics.users.call-details');
    }
}