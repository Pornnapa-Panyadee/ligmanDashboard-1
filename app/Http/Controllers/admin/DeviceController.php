<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\DeviceUsers;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DeviceController extends Controller
{
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'device_id' => ['required', 'integer'],
            'device_username' => ['required', 'string', 'max:255'],
            'device_password' => ['required', 'string', 'max:255'],
            'api_link' => ['required', 'string'],
            'pole_id' => ['required', 'integer'],
        ]);
    }

    public function getIndex()
    {
        $devices_list = DB::select('SELECT * FROM `devices`');
        $poles_list = DB::select('SELECT * FROM `poles`');
        return view('adminForm.admin.create_device', ['devices_list' => $devices_list, 'poles_list' => $poles_list]);
    }

    protected function getEdit($device_id)
    {
        $devices_list = DB::select('SELECT * FROM `devices`');
        $poles_list = DB::select('SELECT * FROM `poles`');
        $device_user = DB::select('SELECT * FROM `device_users` WHERE `id`='.$device_id);
        return view('adminForm.admin.device_edit', ['devices_list' => $devices_list, 'poles_list' => $poles_list, 'device_user' => $device_user[0]]);
    }

    protected function postInsert(Request $request)
    {
        $data = $request->input();
        $validator = $this->validator($data);

        if ($validator->fails()){
            return back()->withStatus(__('Information Invalid. Try again.'));
        }

        $device = new DeviceUsers;

        $device->device_id = $data['device_id'];
        $device->device_username = $data['device_username'];
        $device->device_password = $data['device_password'];
        $device->api_link = $data['api_link'];
        $device->user_id = auth()->user()->id;
        $device->pole_id = $data['pole_id'];
        $device->save();

        $user = User::find(auth()->user()->id);
        $user->no_device++;
        $user->save();

        return redirect('admin/list')->withStatus(__('Create Device Successed.'));
    }

    protected function postUpdate(Request $request)
    {
        $data = $request->input();
        $validator = $this->validator($data);

        if ($validator->fails()){
            return back()->withStatus(__('Information Invalid. Try again.'));
        }

        $device = DeviceUsers::find($data['id']);
        // $device->update($request->all());
        $device->device_id = $data['device_id'];
        $device->device_username = $data['device_username'];
        $device->device_password = $data['device_password'];
        $device->api_link = $data['api_link'];
        $device->pole_id = $data['pole_id'];
        $device->save();
        
        return redirect('admin/list')->withStatus(__('Edit Device Successed.'));
    }
}
