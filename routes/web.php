<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('auth.login');
})->name('main')->middleware('guest');

Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Auth::routes();

Route::get('/home', 'App\Http\Controllers\HomeController@index')->name('home')->middleware('auth');

Route::group(['middleware' => 'auth'], function () {
	// 1
	Route::get('camera360', function () {
		$data = DB::select("SELECT * FROM `device_users` WHERE `user_id`=".auth()->user()->id." and `device_id`=1");
		return view('pages.camera360', ['data' => $data[0]]);})->name('camera360');
	// 2
	Route::get('camera_license', function () {
		$data = DB::select("SELECT * FROM `device_users` WHERE `user_id`=".auth()->user()->id." and `device_id`=4");
		return view('pages.camera_license', ['data' => $data[0]]);})->name('camera_license');
	// 3
	Route::get('camera_temp', function () {
		$data = DB::select("SELECT * FROM `device_users` WHERE `user_id`=".auth()->user()->id." and `device_id`=3");
		return view('pages.camera_temp', ['data' => $data[0]]);})->name('camera_temp');
	// 4
	Route::get('camera_face', function () {
		$data = DB::select("SELECT * FROM `device_users` WHERE `user_id`=".auth()->user()->id." and `device_id`=5");
		return view('pages.camera_face', ['data' => $data[0]]);})->name('camera_face');
	// 5
	Route::get('intercom', function () {
		$data = DB::select("SELECT * FROM `device_users` WHERE `user_id`=".auth()->user()->id." and `device_id`=2");
		return view('pages.intercom', ['data' => $data[0]]);})->name('intercom');
	// 6
	Route::get('exstreamer_loud_speaker', function () {
		$data = DB::select("SELECT * FROM `device_users` WHERE `user_id`=".auth()->user()->id." and `device_id`=11");
		return view('pages.ex_speaker', ['data' => $data[0]]);})->name('ex_speaker');
	// 7
	Route::get('instreamer_loud_speaker', function () {
		$data = DB::select("SELECT * FROM `device_users` WHERE `user_id`=".auth()->user()->id." and `device_id`=12");
		return view('pages.in_speaker', ['data' => $data[0]]);})->name('in_speaker');
	// 8
	Route::get('digital_signage', function () {
		$data = DB::select("SELECT * FROM `device_users` WHERE `user_id`=".auth()->user()->id." and `device_id`=13");
		return view('pages.digital_signage', ['data' => $data[0]]);})->name('digital_signage');
	// 9
	Route::get('meteodata', function () {
		$data = DB::select("SELECT * FROM `device_users` WHERE `user_id`=".auth()->user()->id." and `device_id`=9");
		return view('pages.meteodata', ['data' => $data[0]]);})->name('meteodata');
	// 10
	Route::get('air_transmitter', function () {
		$data = DB::select("SELECT * FROM `device_users` WHERE `user_id`=".auth()->user()->id." and `device_id`=15");
		$pole = DB::select("SELECT * FROM `poles` WHERE `id`=".$data[0]->pole_id);

		$curl = curl_init();

		curl_setopt_array($curl, array(
		CURLOPT_URL => $data[0]->api_link,
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
		$err = curl_error($curl);

		curl_close($curl);

		return view('pages.air_transmitter', ['pole' => $pole, 'response' => $response]);})->name('air_transmitter');
	// 11
	Route::get('occupancy', function () {
		$data = DB::select("SELECT * FROM `device_users` WHERE `user_id`=".auth()->user()->id." and `device_id`=10");
		return view('pages.occupancy', ['data' => $data[0]]);})->name('occupancy');
	// 12
	Route::get('power_socket', function () {
		$data = DB::select("SELECT * FROM `device_users` WHERE `user_id`=".auth()->user()->id." and `device_id`=14");
		return view('pages.power_socket', ['data' => $data[0]]);})->name('power_socket');
	// 13
	Route::get('esave_dashboard', function () {
		$data = DB::select("SELECT * FROM `device_users` WHERE `user_id`=".auth()->user()->id." and `device_id`=6");
		return view('pages.esave_dashboard', ['data' => $data[0]]);})->name('esave_dashboard');
	// 14
	Route::get('cluster_projector', function () {
		$data = DB::select("SELECT * FROM `device_users` WHERE `user_id`=".auth()->user()->id." and `device_id`=7");
		return view('pages.cluster_projector', ['data' => $data[0]]);})->name('cluster_projector');
	// 15
	Route::get('cluster_projector_lador', function () {
		$data = DB::select("SELECT * FROM `device_users` WHERE `user_id`=".auth()->user()->id." and `device_id`=8");
		return view('pages.cluster_projector_lador', ['data' => $data[0]]);})->name('cluster_projector_lador');

	// old template
		Route::get('table-list', function () {
			return view('pages.table_list');
		})->name('table');

		Route::get('typography', function () {
			return view('pages.typography');
		})->name('typography');

		Route::get('icons', function () {
			return view('pages.icons');
		})->name('icons');

		Route::get('map', function () {
			return view('pages.map');
		})->name('map');

		Route::get('notifications', function () {
			return view('pages.notifications');
		})->name('notifications');

		Route::get('rtl-support', function () {
			return view('pages.language');
		})->name('language');

		Route::get('upgrade', function () {
			return view('pages.upgrade');
		})->name('upgrade');
});

Route::group(['middleware' => 'auth'], function () {
	// Route::resource('user', 'App\Http\Controllers\UserController', ['except' => ['show']]);
	Route::get('profile', ['as' => 'profile.edit', 'uses' => 'App\Http\Controllers\ProfileController@edit']);
	Route::put('profile', ['as' => 'profile.update', 'uses' => 'App\Http\Controllers\ProfileController@update']);
	Route::put('profile/password', ['as' => 'profile.password', 'uses' => 'App\Http\Controllers\ProfileController@password']);
});

Route::group(['middleware' => 'auth'], function () {
	// Route::get('superadmin/list', function () {return view('adminForm.superadmin.list');})->name('superadmin.list');
	Route::get('superadmin/list', ['as' => 'adminForm.superadmin.list', 'uses' => 'App\Http\Controllers\ListController@getSuper']);
  	// Route::get('superadmin/dashboard', function () {return view('adminForm.superadmin.dashboardAll');})->name('adminForm.superadmin.dashboard');
	Route::get('superadmin/dashboard', ['as' => 'adminForm.superadmin.dashboard', 'uses' => 'App\Http\Controllers\HomeController@index']);
	Route::get('superadmin/dashboard/{admin_id}', ['as' => 'adminForm.superadmin.dashboard_i', 'uses' => 'App\Http\Controllers\HomeController@index_i']);

	// Delete
	Route::post('superadmin/delaccount{user_id}', ['as' => 'adminForm.admin.delete_account', 'uses' => 'App\Http\Controllers\ListController@deleteAccount']);
	// Add Account
	Route::get('superadmin/create', ['as' => 'adminForm.superadmin.create', 'uses' => 'App\Http\Controllers\superadmin\UserController@getIndex']);
	Route::post('superadmin/create', ['as' => 'adminForm.superadmin.insert', 'uses' => 'App\Http\Controllers\superadmin\UserController@postInsert']);
	// Edit Account
	Route::get('superadmin/editaccount/{device_id}', ['as' => 'adminForm.superadmin.edit_account', 'uses' => 'App\Http\Controllers\superadmin\UserController@getEdit']);
	Route::post('superadmin/editaccount', ['as' => 'adminForm.superadmin.update_account', 'uses' => 'App\Http\Controllers\superadmin\UserController@postUpdate']);
	
	// List Device and Pole
	Route::get('admin/list', ['as' => 'adminForm.admin.list', 'uses' => 'App\Http\Controllers\ListController@getIndex']);
	// Delete
	Route::post('admin/deldevice{device_id}', ['as' => 'adminForm.admin.delete_device', 'uses' => 'App\Http\Controllers\ListController@deleteDevice']);
	Route::post('admin/delpole{pole_id}', ['as' => 'adminForm.admin.delete_pole', 'uses' => 'App\Http\Controllers\ListController@deletePole']);

	// Add Device
	Route::get('admin/device', ['as' => 'adminForm.admin.create_device', 'uses' => 'App\Http\Controllers\admin\DeviceController@getIndex']);
	Route::post('admin/device', ['as' => 'adminForm.admin.insert', 'uses' => 'App\Http\Controllers\admin\DeviceController@postInsert']);
	// Edit Device
	Route::get('admin/editdevice/{device_id}', ['as' => 'adminForm.admin.edit_device', 'uses' => 'App\Http\Controllers\admin\DeviceController@getEdit']);
	Route::post('admin/editdevice', ['as' => 'adminForm.admin.update_device', 'uses' => 'App\Http\Controllers\admin\DeviceController@postUpdate']);

	// Add Pole
	Route::get('admin/pole', ['as' => 'adminForm.admin.location', 'uses' => 'App\Http\Controllers\admin\PoleController@getIndex']);
	Route::post('admin/pole', ['as' => 'adminForm.admin.insert_pole', 'uses' => 'App\Http\Controllers\admin\PoleController@postInsert']);
	// Edit Pole
	Route::get('admin/editpole/{pole_id}', ['as' => 'adminForm.admin.edit_pole', 'uses' => 'App\Http\Controllers\admin\PoleController@getEdit']);
	Route::post('admin/editpole', ['as' => 'adminForm.admin.update_pole', 'uses' => 'App\Http\Controllers\admin\PoleController@postUpdate']);
});
