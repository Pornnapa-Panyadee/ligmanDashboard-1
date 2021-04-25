<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\DeviceUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CreateDeviceController extends Controller
{
    public function get()
    {
        $device_list = DB::select('SELECT * FROM `devices`');
        $pole_list = DB::select('SELECT * FROM `poles`');
        return view('adminForm.admin.create_device', ['device_list' => $device_list, 'pole_list' => $pole_list]);
    }

    protected function validator(array $data)
    {
        return Validator::make($data, [
            'devices' => ['required', 'integer'],
            'username' => ['required', 'string', 'max:255'],
            'password' => ['required', 'string', 'max:255'],
            'link' => ['required', 'string'],
            'pole_id' => ['required', 'integer'],
        ]);
    }

    protected function post(Request $request)
    {
        $data = $request->input();
        $validator = $this->validator($data);

        if ($validator->fails()){
            return back()->withStatus(__('Information Invalid. Try again.'));
        }

        $device = new DeviceUsers;

        $device->device_id = $data['devices'];
        $device->device_username = $data['username'];
        $device->device_password = $data['password'];
        $device->api_link = $data['link'];
        $device->user_id = auth()->user()->id;
        $device->pole_id = $data['pole_id'];
        $device->save();

        return back()->withStatus(__('Create Device Successed.'));
    }
}
