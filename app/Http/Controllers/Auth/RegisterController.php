<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    // protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            // 'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(array $data)
    {
        $unique_id = Str::random(7);
        return User::create([
            // 'name' => $data['name'],
            'email' => $data['email'],
            'unique_id' => $unique_id,
            'role' => 'user',
            'password' => Hash::make($data['password']),
        ]);
    }

    public function user(Request $request)
    {
        $data['title'] = "User Sign Up";
        return view('auth.user-sign-up', $data);
    }

    public function paramedics(Request $request)
    {
        if ($_POST) {
            # code...
            $rules = array(
                'name' => ['required', 'string', 'max:50'],
                'unique_id' => ['required', 'string', 'max:50', 'unique:users'],
                'email' => ['required', 'string', 'email', 'max:50', 'unique:users'],
                'password' => ['required', 'string', 'min:8', 'max:16', 'confirmed'],
            );

            $fieldNames = array(
                'unique_id' => 'Vehicle ID Number',
            );

            $validator = Validator::make($request->all(), $rules);
            $validator->setAttributeNames($fieldNames);

            if ($validator->fails()) {
                if (isset($request->id)) {
                    # code...
                    return back()->withErrors($validator);
                }
                return back()->withErrors($validator)->withInput();
            }

            User::create([
                'name' => $request->name,
                'email' => $request->email,
                'role' => 'paramedic',
                'unique_id' => $request->unique_id,
                'password' => Hash::make($request->password),
            ]);

            Session::flash('success', 'Registered Successfully');
            return redirect()->route('login');
        }
        $data['title'] = "Paramedics Sign Up";
        return view('auth.paramedic-sign-up', $data);
    }
    public function redirectTo()
    {
        $role = Auth::user()->role;
        switch ($role) {

            case 'user':
                return route('home');
                break;

            case 'paramedic':
                // return route('mtn_home');
                break;
            default:
                return '/home';
                break;
        }
    }
}