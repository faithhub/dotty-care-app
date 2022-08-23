<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class SettingsController extends Controller
{
    public function update_profile(Request $request)
    {
        try {
            # code...
            $data['title'] = 'Profile';
            if ($_POST) {
                $rules = array(
                    'name' => ['required', 'string', 'max:255'],
                    'email' => ['required', 'string', 'email', 'max:255', 'unique:users,email,' . Auth::user()->id],
                );

                $validator = Validator::make($request->all(), $rules);
                if ($validator->fails()) {
                    Session::flash(__('warning'),  __('All fields are required'));
                    return back()->withErrors($validator)->withInput();
                }

                $user = User::find(Auth::user()->id);
                $user->name = $request->name;
                $user->email = $request->email;
                $user->save();

                Session::flash('success', 'Profile updated successfully');
                return back();
            }
            return view('settings.profile', $data);
        } catch (\Throwable $th) {
            Session::flash('error', $th->getMessage());
            return back();
        }
    }

    public function update_password(Request $request)
    {
        # code...
        try {
            $data['title'] = 'Update Password';
            if ($_POST) {
                $rules = array(
                    'current_password'     => 'required',
                    'new_password'  => ['required', 'min:8', 'same:confirm_new_password', 'max:16', 'regex:/[a-z]/', 'regex:/[A-Z]/', 'regex:/[0-9]/', 'regex:/[@$!%*#?&+-]/'],
                    'confirm_new_password' => 'required'
                );

                $fieldNames = array(
                    'current_password'     => 'Current Password',
                    'new_password'  => 'New Password',
                    'confirm_new_password' => 'Confirm New Password'
                );
                //dd($request);
                $validator = Validator::make($request->all(), $rules);
                $validator->setAttributeNames($fieldNames);
                if ($validator->fails()) {
                    Session::flash(__('warning'), __('Password must 8 character long, maximum of 16 character, One English uppercase characters (A – Z), One English lowercase characters (a – z), One Base 10 digits (0 – 9) and One Non-alphanumeric (For example: !, $, #, or %)'));
                    return back()->withErrors($validator);
                }

                $current_password = Auth::user()->password;
                if (!Hash::check($request->current_password, $current_password)) {
                    Session::flash(__('warning'), __('Password Wrong'));
                    return back()->withErrors(['current_password' => __('Please enter correct current password')]);
                }

                $obj_user = User::find(Auth::user()->id);
                $obj_user->password = Hash::make($request->new_password);
                $obj_user->save();
                Session::flash(__('success'), __('Password changed successfully'));
                return \back();
            }
            return view('settings.update-password', $data);
        } catch (\Throwable $th) {
            Session::flash('error', $th->getMessage());
            return back();
        }
    }
}