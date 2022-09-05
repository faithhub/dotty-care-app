<?php

namespace App\Http\Controllers;

use App\Models\CallDetails;
use App\Models\User;
use App\Models\UserData;
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

    public function delete_session()
    {
        # code...
        Session::forget('user_data_id');
        Session::forget('user_data_email');
        Session::forget('user_data_unique_id');
        return redirect()->route('add-user');
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

            $user = User::where('unique_id', $request->unique_id)->where('role', 'user')->first();
            if (!$user) {
                Session::flash(__('error'), __('The user does not exist'));
                return back();
            }

            Session::put('user_data_id', $user->id);
            Session::put('user_data_email', $user->email);
            Session::put('user_data_unique_id', $user->unique_id);
            return back();
        }
        $data['title'] = "Add New User";
        return view('paramedics.users.add-user');
    }

    public function call_details(Request $request)
    {
        if ($_POST) {
            // dd($request->all());
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

            $user = UserData::where('user_id', $user_id)->first();
            if ($user) {
                DB::table('user_data')
                ->where('user_id', $user_id)
                    ->update(
                        [
                        'paramedic_id' => Auth::user()->id, 'user_id' => $user_id, 'call_details' => $data, 'is_call_details_filled' =>  true
                        ]
                    );
            } else {
                UserData::create(['paramedic_id' => Auth::user()->id, 'user_id' => $user_id, 'call_details' => $data, 'is_call_details_filled' =>  true]);
            }
            return redirect()->route('assessment');
        }

        $user_id = Session::get('user_data_id');
        $user_data = UserData::where('user_id', $user_id)->first();
        $data['call_details'] = $user_data->call_details;
        $data['is_call_details_filled'] = $user_data->is_call_details_filled;
        // $user = CallDetails::where('user_id', $user_id)->select('data', 'created_at')->get();
        // $json1 = json_encode($user[0]->is_call_details_filled);
        // dd($json1);
        $data['title'] = "User Call Details";
        return view('paramedics.users.call-details', $data);
    }

    public function assessment(Request $request)
    {
        if ($_POST) {
            $data = $request->except(['_token']);
            $user_id = Session::get('user_data_id');

            $user = UserData::where('user_id', $user_id)->first();
            if ($user) {
                DB::table('user_data')
                ->where('user_id', $user_id)
                    ->update(
                        [
                            'paramedic_id' => Auth::user()->id, 'user_id' => $user_id, 'assessment' => $data, 'is_assessment_filled' =>  true
                        ]
                    );
            } else {
                UserData::create(['paramedic_id' => Auth::user()->id, 'user_id' => $user_id, 'assessment' => $data, 'is_assessment_filled' =>  true]);
            }
            return redirect()->route('treatment');
        }
        // $user_id = Session::get('user_data_id');
        // $user = UserData::where('user_id', $user_id)->select('call_details', 'assessment')->get();
        // $json1 = json_encode($user[0]->call_details);
        // $json2 = json_encode($user[0]->assessment);
        // $json = (object)array_merge((array) json_decode($json1), (array) json_decode($json2));

        // $fileName = time() . '_user_data.json';
        // $path = public_path('/upload/json/');
        // if (!File::exists($path)) {
        //     // path does not exist
        //     File::makeDirectory($path, 0777, true, true);
        // }

        // File::put(public_path('/upload/json/' . $fileName), json_encode($json));
        // DB::table('user_data')
        // ->where('user_id', $user_id)
        //     ->update(
        //         [
        //             'file' =>  $fileName
        //         ]
        //     );


        $data['title'] = "User Assessment";
        return view('paramedics.users.assessment');
    }

    public function treatment(Request $request)
    {
        if ($_POST) {
            $data = $request->except(['_token']);
            $user_id = Session::get('user_data_id');

            $user = UserData::where('user_id', $user_id)->first();
            if ($user) {
                DB::table('user_data')
                ->where('user_id', $user_id)
                    ->update(
                        [
                            'paramedic_id' => Auth::user()->id, 'user_id' => $user_id, 'treatment' => $data, 'is_treatment_filled' =>  true
                        ]
                    );
            } else {
                UserData::create(['paramedic_id' => Auth::user()->id, 'user_id' => $user_id, 'treatment' => $data, 'is_treatment_filled' =>  true]);
            }
            return redirect()->route('call-report');
        }
        $data['title'] = "User Treatment";
        return view('paramedics.users.treatment');
    }
    public function call_report()
    {
        $data['title'] = "User Call Report";
        $user_id = Session::get('user_data_id');
        $user_data = UserData::where('user_id', $user_id)->first();
        $data['call_details'] = $user_data->call_details;
        $data['assessment'] = $user_data->assessment;
        $data['treatment'] = $user_data->treatment;
        return view('paramedics.users.call-report', $data);
    }

    public function download_json()
    {
        $user_id = Session::get('user_data_id');
        $user_data = UserData::where('user_id', $user_id)->first();
        $data['call_details'] = $user_data->call_details;
        $data['is_call_details_filled'] = $user_data->is_call_details_filled;
        // $user = CallDetails::where('user_id', $user_id)->select('data', 'created_at')->get();
        // $json1 = json_encode($user[0]->is_call_details_filled);

        $user_data = CallDetails::where('user_id', $user_id)->first();
        $fileName = time() . '_user_data.json';
        $path = public_path('/upload/json/');
        if (!File::exists($path)) {
            // path does not exist
            File::makeDirectory($path, 0777, true, true);
        }
        $json = json_encode($user_data->data) . json_encode($user_data->data);
        File::put(public_path('/upload/json/' . $fileName), $json);

        Session::flash(__('success'), __('Profile updated successfully'));
    }
    public function download_pdf()
    {

    }
}