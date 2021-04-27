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
        $poles_list = DB::select('SELECT * FROM `poles`');
        return view('adminForm.admin.location', ['poles_list' => $poles_list]);
    }

    protected function getEdit($pole_id)
    {
        $pole = DB::select('SELECT * FROM `poles` WHERE `id`='.$pole_id);
        return view('adminForm.admin.location_edit', ['pole' => $pole[0]]);
    }

    protected function postInsert(Request $request)
    {
        $data = $request->input();
        $validator = $this->validator($data);

        if ($validator->fails()){
            return back()->withStatus(__('Information Invalid. Try again.'));
        }

        Pole::create($request->all());

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
