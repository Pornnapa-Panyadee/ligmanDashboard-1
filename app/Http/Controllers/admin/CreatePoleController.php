<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Pole;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CreatePoleController extends Controller
{
    public function get()
    {
        $poles_info = DB::select('SELECT * FROM `poles_info`');
        return view('adminForm.admin.location', ['poles_info' => $poles_info]);
    }

    protected function validator(array $data)
    {
        return Validator::make($data, [
            'pole_id' => ['required', 'integer'],
            'location' => ['required', 'string', 'max:255'],
            'latitude' => ['required', 'between:-85.00,85.00'],
            'longitude' => ['required', 'between:-180.00,180.00'],
        ]);
    }

    protected function post(Request $request)
    {
        $data = $request->input();
        $validator = $this->validator($data);

        if ($validator->fails()){
            return back()->withStatus(__('Information Invalid. Try again.'));
        }

        $pole = new Pole;

        $pole->pole_info_id = $data['pole_id'];
        $pole->location = $data['location'];
        $pole->latitude = $data['latitude'];
        $pole->longitude = $data['longitude'];
        $pole->save();

        return back()->withStatus(__('Create Pole Successed.'));
    }
}
