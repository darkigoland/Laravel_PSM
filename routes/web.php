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
Route::get('/redirects',[HomeController::class,"index"])->name('index');
Route::get('/user/logout', [HomeController::class, 'Logout'])->name('user.logout');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

//Profile Lecturer
Route::get('profile/view', [HomeController::class, 'LectProfileView'])->name('profile.view');

Route::get('profile/edit', [HomeController::class, 'LectProfileEdit'])->name('profile.edit');

Route::post('profile/store', [HomeController::class, 'LectProfileStore'])->name('profile.store');

//Profile Student
Route::get('profile/view', [HomeController::class, 'StudProfileView'])->name('profile.view');

Route::get('profile/edit', [HomeController::class, 'StudProfileEdit'])->name('profile.edit');

Route::post('profile/store', [HomeController::class, 'StudProfileStore'])->name('profile.store');


//ManageApprovalandReport
Route::get('/submitfile',[SubmitController::class,'submitForm']);

Route::post('/submitfile',[SubmitController::class,'submitFile'])->name('submit.submitfile');