<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\gethungrycontroller;

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

// Route::get('/', function () {
//     return view('welcome');
// });

// login pages
Route::view('login','login');
Route::post('logurl',[gethungrycontroller::class,'logfn']);

Route::get('admin',[gethungrycontroller::class,'logreqa']);
Route::get('homer',[gethungrycontroller::class,'logreqr']);
Route::get('home',[gethungrycontroller::class,'logrequ']);
Route::view('homeu','homeuser');
Route::view('homer','homeres');

//logout
Route::get('logout',[gethungrycontroller::class,'logout']);

Route::get('',[gethungrycontroller::class,'vegshow']);

 //user pages
Route::view('usignup','usersignup');
Route::post('userurl',[gethungrycontroller::class,'uinsert']);
Route::view('rsignup','resignup');

Route::view('userad','user_address');
Route::view('userad2','user_addres2');
Route::view('cart','cart');
Route::view('userorder','user_order');
Route::get('userad',[gethungrycontroller::class,'useraddr']);
Route::get('userad2',[gethungrycontroller::class,'useraddr2']);
Route::view('uprofile','userprofile');

Route::get('userprofileedit',[gethungrycontroller::class,'userprof']);
Route::post('useradd',[gethungrycontroller::class,'userpa']);
Route::view('uedit','userprofileedit2');
Route::get('uedit',[gethungrycontroller::class,'userprof2']);
Route::post('editu',[gethungrycontroller::class,'usereditupdate']);


//restuarent pages

Route::view('rprofile','reprofile');
Route::post('rurl',[gethungrycontroller::class,'rinsert']);

Route::view('item','res_item');
Route::post('addfood',[gethungrycontroller::class,'addfoods']);
Route::get('res_nonveg',[gethungrycontroller::class,'nonvegshow']);
Route::get('res_fast',[gethungrycontroller::class,'fastshow']);
Route::get('res_desert',[gethungrycontroller::class,'desertshow']);








// Route::view('admin_res','admin_res');
Route::get('admin_res',[gethungrycontroller::class,'rshow']);
Route::get('aborted/{id}',[gethungrycontroller::class,'delete_res']);
Route::get('approve/{id}',[gethungrycontroller::class,'approve_res']);

//admin page-> user view & Restaurent view 
Route::get('admin_user',[gethungrycontroller::class,'ushow']);
Route::get('abortuser/{id}',[gethungrycontroller::class,'delete_user']);






// Route::view('nonveg','res_nonveg');
// Route::view('prjlogin','prj_login');
// Route::post('prjlog',[gethungrycontroller::class,'logf']);
// Route::view('prjreg','prj_ref');
// Route::post('rinsert',[gethungrycontroller::class,'reinsert']);
// Route::view('prjcq','prj_cq');
// Route::view('prjuser','prj_user');
// Route::post('cqinsert',[gethungrycontroller::class,'qinsert']);
// // Route::get('prj_admin',[gethungrycontroller::class,'adminshow']);
// Route::get('prj_admin',[gethungrycontroller::class,'adminshow']);
// Route::get('approveq/{id}',[gethungrycontroller::class,'approveq']);
// Route::get('deleteq/{id}',[gethungrycontroller::class,'deleteqq']);
// Route::get('prj_like',[gethungrycontroller::class,'likeshow']);
// Route::get('like/{id}',[gethungrycontroller::class,'likeinsert']);
// Route::get('userprofile',[gethungrycontroller::class,'userp']);
// Route::post('editu',[gethungrycontroller::class,'usereditupdate']);
// Route::view('page1','ormm');
// Route::post('ormurl',[sample::class,'insertorm']);
// Route::get('ormshow',[sample::class,'showorm']);






