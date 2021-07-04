<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\DeviceUsers;
use Illuminate\Support\Facades\DB;

class ListController extends Controller
{
    public function getIndex()
    {
        $user_id = auth()->user()->id;
        $role = auth()->user()->role;
        $sql = "SELECT device_users.id, devices.device_name, device_users.device_username, poles.id AS pole_id, device_users.api_link FROM device_users INNER JOIN devices ON devices.id=device_users.device_id INNER JOIN poles ON poles.id=device_users.pole_id WHERE device_users.user_id=".$user_id;
        $devices_list = DB::select($sql);
        $poles_list = DB::select('SELECT * FROM `poles` WHERE `user_id`='.$user_id);
        
        if($role == 'superadmin') $slidebar = 'layouts.app_superadmin';
        elseif ($role == 'admin') $slidebar = 'layouts.app_admin';
        else return redirect('profile');;
        return view('adminForm.admin.list', ['slidebar'=>$slidebar, 'devices_list' => $devices_list, 'poles_list' => $poles_list]);
    }

    public function getSuper()
    {
        $user_id = auth()->user()->id;
        $role = auth()->user()->role;
        if
        if($role != 'superadmin'){
            return redirect('admin/list');
        }else{
            $users_list = DB::select('SELECT * FROM `users` WHERE `id`!='.$user_id);
            return view('adminForm.superadmin.list', ['users_list' => $users_list]);
        }
    }


    protected function deletePole($pole_id)
    {
        DB::table('device_users')->where('pole_id', $pole_id)->delete();
        DB::table('poles')->where('id', $pole_id)->delete();

        return back()->withStatus(__('Pole Successfully Deleted.'));
    }

    protected function deleteDevice($device_id)
    {
        $device_user = DeviceUsers::find($device_id);
        $user = User::find($device_user->user_id);
        $device_user->delete();
        $user->no_device--;
        $user->save();
        // DB::table('device_users')->where('id', $device_id)->delete();

        return back()->withStatus(__('Device Successfully Deleted.'));
    }

    protected function deleteAccount($user_id)
    {
        DB::table('device_users')->where('user_id', $user_id)->delete();
        DB::table('poles')->where('user_id', $user_id)->delete();
        DB::table('users')->where('id', $user_id)->delete();

        return back()->withStatus(__('Account Successfully Deleted.'));
    }
}
