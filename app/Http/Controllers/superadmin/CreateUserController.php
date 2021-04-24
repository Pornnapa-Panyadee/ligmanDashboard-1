<?php

namespace App\Http\Controllers\superadmin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

class CreateUserController extends Controller
{
    public function get()
    {
        return view('adminForm.superadmin.create');
    }

    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users,email'],  // unique:table,column,except,idColumn
            'password' => ['required', 'string', 'min:6', 'confirmed'],
            'role' => ['required', 'string'],
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
