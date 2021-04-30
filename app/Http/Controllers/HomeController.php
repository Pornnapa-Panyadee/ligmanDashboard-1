<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $user_id = auth()->user()->id;
        $devices_id = DB::select('SELECT devices.id FROM `devices` INNER JOIN device_users ON devices.id=device_users.device_id WHERE device_users.user_id='.$user_id);
        return view('dashboard', ['devices_id' => $devices_id]);
    }
}
