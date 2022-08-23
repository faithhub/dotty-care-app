<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CallDetailsController extends Controller
{
    public function index()
    {
        $data['title'] = "Call Details";
        return view('users.call-details');
    }

    public function add()
    {
    }
}