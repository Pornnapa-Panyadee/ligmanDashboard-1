<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

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
        if($user_id == 1){
            $admins_list = DB::select("SELECT `id`, `name` FROM `users` WHERE role!='user'");
            return view('adminForm.superadmin.dashboardAll', ['admins_list' => $admins_list]);
        }

        $sql = "SELECT * FROM devices
                LEFT OUTER JOIN (
                SELECT * FROM device_users
                WHERE device_users.user_id=".$user_id.") table_1 ON devices.id=table_1.device_id";

        $devices_list = DB::select($sql);
        // $poles_list = DB::select("SELECT * FROM `poles`");
        $poles_list = DB::select('SELECT * FROM `poles` WHERE `user_id`='.$user_id);
        
        $air_pole = "'NA'";
        $response = "'NA'";
        $air_device = $devices_list[13];

        if ($air_device->pole_id != null){
            $air_pole = DB::select("SELECT * FROM `poles` WHERE `id`=".$air_device->pole_id);
            
            $curl = curl_init();

            curl_setopt_array($curl, array(
            CURLOPT_URL => $air_device->api_link,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "GET",
            CURLOPT_HTTPHEADER => array(
                "cache-control: no-cache",
                "postman-token: 85a7d2b9-a34d-3301-7cad-aff332f4b4f1"
            ),
            ));

            $response = curl_exec($curl);

            curl_close($curl);
        }

        return view('dashboard', ['devices_list' => $devices_list, 'poles_list' => $poles_list, 'air_pole' => $air_pole, 'response' => $response]);
        // return view('dashboard', ['devices_list' => $devices_list, 'poles_list' => $poles_list]);
    }

    protected function index_i($admin_id)
    {
        $sql = "SELECT * FROM devices
                LEFT OUTER JOIN (
                SELECT * FROM device_users
                WHERE device_users.user_id=".$admin_id.") table_1 ON devices.id=table_1.device_id";

        $devices_list = DB::select($sql);
        // $poles_list = DB::select("SELECT * FROM `poles`");
        $poles_list = DB::select('SELECT * FROM `poles` WHERE `user_id`='.$admin_id);
        $air_pole = "'NA'";
        $response = "'NA'";
        $air_device = $devices_list[13];

        if ($air_device->pole_id != null){
            $air_pole = DB::select("SELECT * FROM `poles` WHERE `id`=".$air_device->pole_id);
            
            $curl = curl_init();

            curl_setopt_array($curl, array(
            CURLOPT_URL => $air_device->api_link,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "GET",
            CURLOPT_HTTPHEADER => array(
                "cache-control: no-cache",
                "postman-token: 85a7d2b9-a34d-3301-7cad-aff332f4b4f1"
            ),
            ));

            $response = curl_exec($curl);

            curl_close($curl);
        }

        return view('dashboard', ['devices_list' => $devices_list, 'poles_list' => $poles_list, 'air_pole' => $air_pole, 'response' => $response]);
    }
}
