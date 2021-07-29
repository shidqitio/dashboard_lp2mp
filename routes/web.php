<?php

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


use Illuminate\Support\Facades\Auth;

Auth::routes();


// Route::get('/', function () {
//     return view('/login');
// });
Route::group(['middleware' => ['web', 'auth']], function () {
    Route::get('/', function () {
        return redirect('/login');
    });

    // Route untuk user yang admin
    Route::group(['prefix' => 'admin', 'middleware' => ['auth', 'role:admin']], function () {
        Route::get('/', function () {
            $data['users'] = \App\User::whereDoesntHave('roles')->get();
            return view('halaman_awal.antarmuka', $data);
        });
    });
    // Route untuk user yang puslaba
    Route::group(['prefix' => 'puslaba', 'middleware' => ['auth', 'role:puslaba']], function () {
        Route::get('/', function () {
            $data['users'] = \App\User::whereDoesntHave('roles')->get();
            return view('users.puslaba.dashboard', $data);
        });
    });
    // Route untuk user yang pusjian
    Route::group(['prefix' => 'pusjian', 'middleware' => ['auth', 'role:pusjian']], function () {
        Route::get('/', function () {
            $data['users'] = \App\User::whereDoesntHave('roles')->get();
            return view('users.pusjian.dashboard', $data);
        });
    });
    // Route untuk user yang pbb
    Route::group(['prefix' => 'pbb', 'middleware' => ['auth', 'role:pbb']], function () {
        Route::get('/', function () {
            $data['users'] = \App\User::whereDoesntHave('roles')->get();
            return view('users.pbb.dashboard', $data);
        });
    });
    // Route untuk user yang p2m2
    Route::group(['prefix' => 'p2m2', 'middleware' => ['auth', 'role:p2m2']], function () {
        Route::get('/', function () {
            $data['users'] = \App\User::whereDoesntHave('roles')->get();
            return view('users.p2m2.dashboard', $data);
        });
    });
});
// Route::group(['middleware' => ['web', 'auth']], function () {
//     Route::get('/', function () {
//         return redirect(route('admin'));
//     });


//     Route::get('/home', 'ControllerDashboard@index', function () {
//         if (Auth::user()->admin == 1) {
//             return view('users/user/dashboard');
//         } elseif (Auth::user()->admin == 2) {
//             return view('users/puslaba/dashboard');
//         } else {
//             $users['users'] = \App\User::all();
//             return view('users/admin/dashboard');
//         }
//     })->name('admin');
// });

//Routing ke Dashboard per Unit 

Route::get('/dashboard_lppmp','ControllerDashboard@sek_lppmp');
Route::get('/dashboard_p2m2','ControllerDashboard@p2m2');
Route::get('/dashboard_pbb','ControllerDashboard@pbbtuweb');
Route::get('/dashboard_pbb_sipas','ControllerDashboard@pbbsipas');
Route::get('/dashboard_puslaba','ControllerDashboard@puslaba');
Route::get('/dashboard_pusjian','ControllerDashboard@pusjian');

//pbb
Route::get('/pbb/searchtuweb','ControllerPBB@searchtuweb')->name('searchtuweb');
Route::get('/pbb/searchtuwebsipas','ControllerPBB@searchtuwebsipas')->name('searchtuwebsipas');

//end routing 

Route::get('/user', 'UserController@index');
Route::get('/createuser', 'UserController@create');
Route::post('/user', 'UserController@store');

Route::get('/stokitempaket', 'StokItemPaketController@index')->name('stok');
Route::get('/stokitempaket2', 'StokItemPaket2@index')->name('stok2');

// Route::get('/user',function(){
//     return view('user/dashboard');
// }) -> name('user');

// Route::get('/admins',function(){
//     return view('admin/dashboard');
// }) -> name('admins');

// Route::get('/','FrontendController@index', function () {
//     return view('frontend/frontend');
// });

Route::get('/download/{id}', 'FrontendController@pdf');
Route::get('/download/risalah/{id}', 'FrontendController@pdfrisalah');

//Set Harga
Route::get('/setmasterharga', 'ControllerAdmin@viewsetharga');
Route::post('/setskrektorBAC', 'ControllerAdmin@updatesetharga');
Route::post('/setharga', 'ControllerAdmin@updatesetharga');
Route::post('/sethandling', 'ControllerAdmin@updatesetharga');
Route::post('/setdesign', 'ControllerAdmin@updatesetharga');
Route::post('/setpengadaan', 'ControllerAdmin@updatesetharga');
Route::post('/setkendalimutu', 'ControllerAdmin@updatesetharga');
Route::post('/setpemeliharaan', 'ControllerAdmin@updatesetharga');
Route::post('/setpendukung', 'ControllerAdmin@updatesetharga');
Route::post('/setresikopenyimpanan', 'ControllerAdmin@updatesetharga');
Route::post('/setresiko_mutu', 'ControllerAdmin@updatesetharga');
Route::post('/setmitra', 'ControllerAdmin@updatesetharga');
Route::post('/setpengembanganmateri', 'ControllerAdmin@updatesetharga');
Route::post('/setpengembangan', 'ControllerAdmin@updatesetharga');
Route::post('/setprodukba', 'ControllerAdmin@updatesetharga');
Route::post('/setgudangba', 'ControllerAdmin@updatesetharga');
Route::post('/royalti', 'ControllerAdmin@updatesetharga');
Route::post('/setmitranonmhs', 'ControllerAdmin@updatesetharga');

//set harga bnbb 
Route::get('/setmasterbnbb','ControllerBNBB@viewsetbnbb');
Route::post('/updatebnbb','ControllerBNBB@updatesetbnbb');

//Harga
Route::get('/hargabuku', 'ControllerAdmin@viewharga');
Route::post('/harga_buku', 'ControllerAdmin@hitung_harga');
Route::get('/harga_buku/destroy/{id}', 'ControllerAdmin@destroy');
Route::get('/download/coba/{id}', 'ControllerAdmin@skrektorBA')->name('downloadskrektorbac');
Route::get('/harga_bnbb','ControllerBNBB@viewhargabnbb');
Route::post('/harga_buku_bnbb','ControllerBNBB@hitung_bnbb');
Route::get('/download/bnbb/{id}','ControllerBNBB@downloadskbnbb');
Route::get('/harga_bnbb/destroy/{id}', 'ControllerBNBB@destroy');

//jadwal
Route::get('/jadwal', 'ControllerJadwal@index');
Route::get('/jadwal/create', 'ControllerJadwal@create');
Route::post('/jadwal', 'ControllerJadwal@store');
Route::get('/edit/{id}', 'ControllerJadwal@edit');
Route::post('/jadwal/update', 'ControllerJadwal@update');
Route::get('jadwal/deletepdf/{id}', 'ControllerJadwal@deletepdf');
Route::get('/jadwal/destroy/{id}', 'ControllerJadwal@destroy');
Route::get('/jadwal/excel', 'ControllerJadwal@excel')->name('jadwal.excel');

//Kalender
Route::get('/viewall', 'ControllerKalender@index')->name('kalender.view');
Route::post('/viewall', 'ControllerKalender@index');
Route::post('/tambahkalender', 'ControllerKalender@create');
Route::post('/kalender/update/{id}', 'ControllerKalender@update_kalender');
Route::get('/kalender/destroy/{id}', 'ControllerKalender@destroy');
Route::get('/kalender/excel', 'ControllerKalender@downloadexcel')->name('kalender.excel');
//Puslaba
Route::get('/kalender', 'ControllerPuslaba@index')->name('kalenderplb.view');
Route::resource('/eventpagepuslaba', 'EventController');
//Pusjian
Route::get('/kalenderpusjian', 'ControllerPusjian@index')->name('kalenderpjn.view');
Route::resource('/eventpagepusjian', 'EventController');
//pbb
Route::get('/kalenderpbb', 'ControllerPBB@index')->name('kalenderpbb.view');
Route::resource('/eventpagepbb', 'EventController');
//p2m2
Route::get('/kalenderp2m2', 'ControllerP2M2@index')->name('kalenderp2m2.view');
Route::resource('/eventpagep2m2', 'EventController');

//events 
Route::resource('/eventpage', 'EventController');

//Route::get('addeventurl','EventController@create')->name('EventController.store');
Route::get('addeventurl', 'EventController@display')->name('EventController.store');
Route::post('addeventurl/store', 'EventController@store')->name('addevent.store');

Route::get('editeventurl', 'EventController@show');
Route::get('deleteeventurl', 'EventController@show');

Route::post('editeventurl/update/{id}', 'EventController@update')->name('editform_update');

Route::get('deleteeventurl/{id}', 'EventController@destroy');


Route::get('layouts/layout/logout', 'HomeController@logout');
