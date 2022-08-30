<?php

namespace App\Http\Controllers;

use App\Models\CallDetails;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class ParamedicsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    
    public function index()
    {
        $data['title'] = "Paramedics";
        return view('paramedics.dashboard.index');
    }

    public function add_user(Request $request)
    {
        if ($_POST) {
            $rules = array(
                'unique_id' => ['required', 'string', 'max:255'],
            );

            $validator = Validator::make($request->all(), $rules);

            if ($validator->fails()) {
                Session::flash(__('warning'),  __('All fields are required'));
                return back()->withErrors($validator)->withInput();
            }

            $user = User::where('unique_id', $request->unique_id)->first();
            if (!$user) {
                Session::flash(__('error'), __('The user does not exist'));
                return back();
            }
            $user_data = ['id' => $user->id, 'name' => $user->name];
            Session::put('user_data_id', $user->id);
            Session::put('user_data_email', $user->email);
            Session::put('user_data_unique_id', $user->unique_id);
            return back();
        }
        $data['title'] = "Add New User";
        // Session::forget('user_data_id');
        // Session::forget('user_data_email');
        // Session::forget('user_data_unique_id');
        return view('paramedics.users.add-user');
    }

    public function call_details(Request $request)
    {
        if ($_POST) {
            $data = $request->except(['_token']);
            $user_id = Session::get('user_data_id');

            // dd($data);
            // $rules = array(
            //     'first_name' => ['required', 'string', 'max:255'],
            //     'last_name' => ['required', 'string', 'max:255'],
            // );

            // $validator = Validator::make($request->all(), $rules);

            // if ($validator->fails()) {
            //     Session::flash(__('warning'),  __('All fields are required'));
            //     return back()->withErrors($validator)->withInput();
            // }

            $user = User::find($user_id);
            if ($user) {
                DB::table('call_details')
                ->where('user_id', $user_id)
                    ->update(
                        [
                            'paramedic_id' => Auth::user()->id, 'user_id' => $user_id, 'data' => $data, 'is_filled' =>  false
                        ]
                    );
            } else {
                CallDetails::create(['paramedic_id' => Auth::user()->id, 'user_id' => $user_id, 'data' => $data, 'is_filled' =>  false]);
            }
            // dd($data);

            $user_data = CallDetails::where('user_id', $user_id)->first();
            $fileName = time() . '_user_data.json';
            $path = public_path('/upload/json/');
            if (!File::exists($path)) {
                // path does not exist
                File::makeDirectory($path, 0777, true, true);
            }
            File::put(public_path('/upload/json/' . $fileName), json_encode($user_data->data));
            // Session::flash(__('success'), __('Profile updated successfully'));
            return redirect()->route('assessment');
        }
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