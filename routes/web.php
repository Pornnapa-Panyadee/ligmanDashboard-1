<?php

use Illuminate\Support\Facades\Route;

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
	Route::get('camera360', function () {return view('pages.camera360');})->name('camera360');
	// 2
	Route::get('camera_license', function () {return view('pages.camera_license');})->name('camera_license');
	// 3
	Route::get('camera_temp', function () {return view('pages.camera_temp');})->name('camera_temp');
	// 4
	Route::get('camera_face', function () {return view('pages.camera_face');})->name('camera_face');
	// 5
	Route::get('intercom', function () {return view('pages.intercom');})->name('intercom');
	// 6
	Route::get('exstreamer_loud_speaker', function () {return view('pages.ex_speaker');})->name('ex_speaker');
	// 7
	Route::get('instreamer_loud_speaker', function () {return view('pages.in_speaker');})->name('in_speaker');
	// 8
	Route::get('digital_signage', function () {	return view('pages.digital_signage');})->name('digital_signage');
	// 9
	Route::get('meteodata', function () {return view('pages.meteodata');})->name('meteodata');
	// 10
	Route::get('air_transmitter', function () {return view('pages.air_transmitter');})->name('air_transmitter');
	// 11
	Route::get('occupancy', function () {return view('pages.occupancy');})->name('occupancy');
	// 12
	Route::get('power_socket', function () {return view('pages.power_socket');})->name('power_socket');
	// 13
	Route::get('esave_dashboard', function () {return view('pages.esave_dashboard');})->name('esave_dashboard');
	// 14
	Route::get('cluster_projector', function () {return view('pages.cluster_projector');})->name('cluster_projector');
	// 15
	Route::get('cluster_projector_lador', function () {return view('pages.cluster_projector_lador');})->name('cluster_projector_lador');

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
	Route::get('superadmin/list', function () {return view('adminForm.superadmin.list');})->name('superadmin.list');
	// Route::get('superadmin/create', function () {return view('adminForm.superadmin.create');})->name('superadmin.create');
	Route::get('superadmin/create', ['as' => 'adminForm.superadmin.create', 'uses' => 'App\Http\Controllers\superadmin\CreateUserController@get']);
	Route::post('superadmin/create', ['as' => 'adminForm.superadmin.insert', 'uses' => 'App\Http\Controllers\superadmin\CreateUserController@post']);

	Route::get('admin/list', function () {return view('adminForm.admin.list');})->name('admin.list');
	// Route::get('admin/create_device', function () {return view('adminForm.admin/create_device');})->name('admin.create_device');
	// Route::get('admin/create_location', function () {return view('adminForm.admin/location');})->name('admin.create_location');
	Route::get('admin/device', ['as' => 'adminForm.admin.create_device', 'uses' => 'App\Http\Controllers\admin\CreateDeviceController@get']);
	Route::post('admin/device', ['as' => 'adminForm.admin.insert', 'uses' => 'App\Http\Controllers\admin\CreateDeviceController@post']);

	Route::get('admin/pole', ['as' => 'adminForm.admin.location', 'uses' => 'App\Http\Controllers\admin\CreateController@get']);
	Route::post('admin/pole', ['as' => 'adminForm.admin.insert', 'uses' => 'App\Http\Controllers\admin\CreateController@post']);
});
