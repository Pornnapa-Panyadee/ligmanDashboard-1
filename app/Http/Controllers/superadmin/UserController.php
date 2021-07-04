<?php

namespace App\Http\Controllers\superadmin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class UserController extends Controller
{
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users,email'],  // unique:table,column,except,idColumn
            'password' => ['required', 'string', 'min:6', 'confirmed'],
            'role' => ['required', 'string'],
        ]);
    }

    protected function updateValidator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'password' => ['required', 'string', 'min:6', 'confirmed'],
            'role' => ['required', 'string'],
        ]);
    }

    public function getIndex()
    {
        $role = auth()->user()->role;
        if($role != 'superadmin'){
            return redirect('admin/list');
        }else{
            $admins_list = DB::select("SELECT name FROM `users` WHERE role='admin'");
            return view('adminForm.superadmin.create', ['admins_list' => $admins_list]);
        }
    }

    protected function getEdit($user_id)
    {
        $role = auth()->user()->role;
        if($role != 'superadmin'){
            return redirect('admin/list');
        }else{
            $user = DB::select('SELECT * FROM `users` WHERE `id`='.$user_id);
            $admins_list = DB::select("SELECT `name` FROM `users` WHERE role='admin'");
            return view('adminForm.superadmin.edit', ['admins_list' => $admins_list, 'user' => $user[0]]);
        }
    }

    protected function postInsert(Request $request)
    {
        $data = $request->input();
        $validator = $this->validator($data);

        if ($validator->fails()){
            return back()->withStatus(__('Information Invalid. Try again.'));
        }

        $role = $data['role'];
        if ($role == 'admin') {
            $permission = 'editor';
        }else{
            $permission = 'read only';
        }
        $under = $data['under'];    // can be null

        if($under != ''){
            $upper_user_id = User::select('id')->where('name','=',$under)->get();
            $upper_user_id = $upper_user_id[0]->id;
        }else{
            $upper_user_id = null;
        }

        $user = new User;

        $user->name = $data['name'];
        $user->email = $data['email'];
        $user->password = Hash::make($data['password']);
        $user->role = $role;
        $user->upper_user_id = $upper_user_id;
        $user->under = $under;
        $user->permission = $permission;
        $user->no_device = 0;
        $user->save();

        return redirect('superadmin/userlist')->withStatus(__('Account Successfully Created.'));
    }

    protected function postUpdate(Request $request)
    {
        $data = $request->input();
        $validator = $this->updateValidator($data);

        if ($validator->fails()){
            return back()->withStatus(__('Information Invalid. Try again.'));
        }

        $role = $data['role'];
        if ($role == 'admin') {
            $permission = 'editor';
        }else{
            $permission = 'read only';
        }
        $under = $data['under'];    // can be null

        if($under != ''){
            $upper_user_id = User::select('id')->where('name','=',$under)->get();
            $upper_user_id = $upper_user_id[0]->id;
        }else{
            $upper_user_id = null;
        }

        $user = User::find($data['id']);
        $user->name = $data['name'];
        $user->password = Hash::make($data['password']);
        $user->role = $role;
        $user->upper_user_id = $upper_user_id;
        $user->under = $under;
        $user->permission = $permission;
        $user->save();
        
        return redirect('superadmin/userlist')->withStatus(__('Account Successfully Updated.'));
    }
}
