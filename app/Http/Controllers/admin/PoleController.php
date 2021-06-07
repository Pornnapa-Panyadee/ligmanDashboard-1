<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Pole;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class PoleController extends Controller
{
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'location' => ['required', 'string', 'max:255'],
            'latitude' => ['required', 'between:-85.00,85.00'],
            'longitude' => ['required', 'between:-180.00,180.00'],
        ]);
    }

    public function getIndex()
    {
        // $poles_list = DB::select('SELECT * FROM `poles`');
        $user_id = auth()->user()->id;
        $poles_list = DB::select('SELECT * FROM `poles` WHERE `user_id`='.$user_id);

        if($user_id==1) $slidebar = 'layouts.app_superadmin';
        else $slidebar = 'layouts.app_admin';
        return view('adminForm.admin.location', ['slidebar'=>$slidebar, 'poles_list' => $poles_list]);
    }

    protected function getEdit($pole_id)
    {
        $pole = DB::select('SELECT * FROM `poles` WHERE `id`='.$pole_id);

        if(auth()->user()->id==1) $slidebar = 'layouts.app_superadmin';
        else $slidebar = 'layouts.app_admin';
        return view('adminForm.admin.location_edit', ['slidebar'=>$slidebar, 'pole' => $pole[0]]);
    }

    protected function postInsert(Request $request)
    {
        $data = $request->input();
        $validator = $this->validator($data);

        if ($validator->fails()){
            return back()->withStatus(__('Information Invalid. Try again.'));
        }

        // Pole::create($request->all());
        Pole::create([
            'latitude' => $data['latitude'],
            'longitude' => $data['longitude'],
            'location' => $data['location'],
            'user_id' => auth()->user()->id,
        ]);


        return redirect('admin/list')->withStatus(__('Create Pole Successed.'));
    }

    protected function postUpdate(Request $request)
    {
        $data = $request->input();
        $validator = $this->validator($data);

        if ($validator->fails()){
            return back()->withStatus(__('Information Invalid. Try again.'));
        }

        // DB::table('poles')->where('id', $data['id'])->update($request->all());
        $pole = Pole::find($data['id']);
        $pole->update($request->all());
        
        return redirect('admin/list')->withStatus(__('Edit Pole Successed.'));
    }
}
