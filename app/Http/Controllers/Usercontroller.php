<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\UserData;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use PDF;

class Usercontroller extends Controller
{
    public function index()
    {
        $data['title'] = "User Dashboard";
        return view('users.dashboard.index');
    }

    public function report()
    {
        $data['title'] = "User Report";
        $data['user_data'] = $user_data = UserData::where('user_id', Auth::user()->id)->first();
        $data['call_details'] = $user_data->call_details;
        $data['assessment'] = $user_data->assessment;
        $data['treatment'] = $user_data->treatment;
        return view('users.report', $data);
    }

    public function download_pdf()
    {
        $data['user'] = $user = User::find(Auth::user()->id);
        $data['user_data'] = $user_data = UserData::where('user_id', Auth::user()->id)->first();
        $data['call_details'] = $user_data->call_details;
        $data['assessment'] = $user_data->assessment;
        $data['treatment'] = $user_data->treatment;

        $pdf = PDF::loadView('users.pdf', $data);

        return $pdf->download(time() . '-' . $user->unique_id . '.pdf');
    }
}