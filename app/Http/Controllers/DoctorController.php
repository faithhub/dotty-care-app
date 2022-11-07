<?php

namespace App\Http\Controllers;

use App\Models\Report;
use App\Models\User;
use App\Models\UserData;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class DoctorController extends Controller
{
    public function index()
    {
        $data['title'] = "Doctor Dashboard";
        return view('doctor.dashboard.index');
    }

    public function patient(Request $request)
    {
        try {
            $patient_id = Session::get('patient_id');
            if ($patient_id) {
                return redirect()->route('patient-report');
            }

            if ($_POST) {

                $rules = array(
                    'unique_id' => ['required', 'string', 'max:255'],
                    'password' => ['required'],
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

                $doctor = User::where(['id' => Auth::user()->id, 'role' => 'doctor'])->first();
                $confirmPassword = Hash::check($request->password, $doctor->password);
                if (!$confirmPassword) {
                    Session::flash(__('error'), __('Incorrect paswword'));
                    return back();
                }

                Session::put('patient_id', $user->id);
                return redirect()->route('patient-report');
            }
            $data['title'] = "Check Patient";
            return view('doctor.patients.index');
        } catch (\Throwable $th) {
            //throw $th;
            dd($th->getMessage());
        }
    }

    public function patient_report(Request $request)
    {
        try {
            if ($_POST) {
                $rules = array(
                    'report' => ['required', 'string', 'max:255']
                );

                $validator = Validator::make($request->all(), $rules);

                if ($validator->fails()) {
                    Session::flash(__('error'),  __('All report field is required'));
                    return back()->withErrors($validator)->withInput();
                }

                $detail = UserData::where('id', $request->detail_id)->first();

                if (!$detail) {
                    Session::flash('error', "No User Details found for the ID");
                    return redirect()->back()->withInput();
                }
                $doctor = User::where(['id' => Auth::user()->id, 'role' => 'doctor'])->first();
                $user = User::where(['id' => $detail->user_id, 'role' => 'user'])->first();
                $paramedic = User::where(['id' => $detail->paramedic_id, 'role' => 'paramedic'])->first();
                Report::create([
                    'doctor_id' => $doctor->id,
                    'user_id' => $user->id,
                    'paramedic_id' => $paramedic->id,
                    'detail_id' => $detail->id,
                    'report' => $request->report
                ]);
                Session::flash('success', "Report Updated Successfully");
                return redirect()->route('patient-report');
            }
            $patient_id = Session::get('patient_id');
            if (!$patient_id) {
                return redirect()->route('patient');
            }
            $data['title'] = "User Report";
            $data['user_data'] = $user_data = UserData::where('user_id', $patient_id)->first();
            $data['reports'] = Report::where(['detail_id' => $user_data->id, 'user_id' => $user_data->user_id, 'paramedic_id' => $user_data->paramedic_id])->with('doctor')->get();
            if ($user_data) {
                $data['call_details'] = unserialize(Crypt::decryptString($user_data->call_details));
                $data['assessment'] = unserialize(Crypt::decryptString($user_data->assessment));
                $data['treatment'] = unserialize(Crypt::decryptString($user_data->treatment));
            }
            return view('doctor.patients.report', $data);
        } catch (\Throwable $th) {
            //throw $th;
            dd($th->getMessage());
        }
    }
}