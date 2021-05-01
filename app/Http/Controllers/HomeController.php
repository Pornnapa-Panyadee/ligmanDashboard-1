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

        $sql = "SELECT * FROM devices
                LEFT OUTER JOIN (
                SELECT * FROM device_users
                WHERE device_users.user_id=".$user_id.") table_1 ON devices.id=table_1.device_id";

        $devices_list = DB::select($sql);
        return view('dashboard', ['devices_list' => $devices_list]);
    }
}
