<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

class CreateController extends Controller
{
    public function filldata()
    {
        return view('adminForm.superadmin.create');
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
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:5', 'confirmed'],
            'status' => ['required', 'string'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(Request $request)
    {
        $data = $request->input();

        $status = $data['status'];
        if ($status == 'admin') {
            $permission = 'editor';
        }else{
            $permission = 'read only';
        }
        $under = $data['under'];    // can be null
        $upper_user_id = null; // find by $under

        $user = new User;

        $user->name = $data['name'];
        $user->email = $data['email'];
        $user->password = Hash::make($data['password']);
        $user->status = $status;
        $user->upper_user_id = $upper_user_id;
        $user->under = $under;
        $user->permission = $permission;
        $user->no_device = 0;
        $user->save();

        return back()->withStatus(__('Create user success.'));

        
        // return User::create([
        //     'name' => $data['name'],
        //     'email' => $data['email'],
        //     'password' => Hash::make($data['password']),
        //     'status' => $status,
        //     'upper_user_id' => $upper_user_id,
        //     'under' => $under,
        //     'permission' => $permission,
        //     'no_device' => 0,
        // ]);
    }
}
