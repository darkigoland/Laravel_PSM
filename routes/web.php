<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

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
});

//Login
Route::get('/redirects',[HomeController::class,"index"]);
Route::get('/user/logout', [HomeController::class, 'Logout'])->name('user.logout');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

//Profile
Route::get('profile/view', [HomeController::class, 'ProfileView'])->name('profile.view');

Route::get('profile/edit', [HomeController::class, 'ProfileEdit'])->name('profile.edit');

//SV Hunting
Route::get('svhunting/list', [HomeController::class, 'SVhuntingList'])->name('svhunting.list');

//ManageApprovalandReport
Route::get('/submitfile',[SubmitController::class,'submitForm']);

Route::post('/submitfile',[SubmitController::class,'submitFile'])->name('submit.submitfile');