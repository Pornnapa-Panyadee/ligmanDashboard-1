<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CreateDeviceController extends Controller
{
    public function get()
    {
        $device_list = DB::select('SELECT * FROM `devices`');
        return view('adminForm.admin.create_device', ['device_list' => $device_list]);
    }

    protected function validator(array $data)
    {
        return Validator::make($data, [
            'devices' => ['required', 'string', 'max:255'],
            'username' => ['required', 'string', 'max:255'],
            'link' => ['required', 'string', 'min:6', 'confirmed'],
            'pole' => ['required', 'string'],
        ]);
    }

    protected function post(Request $request)
    {
        $data = $request->input();
        $validator = $this->validator($data);

        if ($validator->fails()){
            return back()->withStatus(__('Information Invalid. Try again.'));
        }

        $status = $data['role'];
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

        return back()->withStatus(__('Create Account Successed.'));
    }
}
