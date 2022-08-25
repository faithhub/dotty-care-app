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

    public function add_user()
    {
        $data['title'] = "Add New User";
        return view('paramedics.users.add-user');
    }

    public function call_details()
    {
        $data['title'] = "User Call Details";
        return view('paramedics.users.call-details');
    }

    public function assessment()
    {
        $data['title'] = "User Assessment";
        return view('paramedics.users.assessment');
    }
    public function treatement()
    {
        $data['title'] = "User Treatement";
        return view('paramedics.users.treatement');
    }
    public function call_report()
    {
        $data['title'] = "User Call Report";
        return view('paramedics.users.call-report');
    }
}