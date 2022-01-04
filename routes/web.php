<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ExpertiseController;

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
Route::get('lecturer/profile/view', [HomeController::class, 'LectProfileView'])->name('lecturer.profile.view');

Route::get('lecturer/profile/edit', [HomeController::class, 'LectProfileEdit'])->name('lecturer.profile.edit');

Route::post('lecturer/profile/store', [HomeController::class, 'LectProfileStore'])->name('lecturer.profile.store');

//Lecturer Expertise
Route::prefix('expertise')->group(function(){

    //teaching
Route::get('lecturer/teaching/view', [ExpertiseController::class, 'LectTeachingView'])->name('lecturer.teaching.view');

Route::get('lecturer/teaching/add', [ExpertiseController::class, 'LectTeachingAdd'])->name('lecturer.teaching.add');

Route::post('lecturer/teaching/store', [ExpertiseController::class, 'LectTeachingStore'])->name('lecturer.teaching.store');

//Profile Student
Route::get('student/profile/view', [HomeController::class, 'StudProfileView'])->name('student.profile.view');

Route::get('student/profile/edit', [HomeController::class, 'StudProfileEdit'])->name('student.profile.edit');

Route::post('student/profile/store', [HomeController::class, 'StudProfileStore'])->name('student.profile.store');
});


//Profile Technician
Route::get('technician/profile/view', [HomeController::class, 'TechProfileView'])->name('technician.profile.view');

Route::get('technician/profile/edit', [HomeController::class, 'TechProfileEdit'])->name('technician.profile.edit');

Route::post('technician/profile/store', [HomeController::class, 'TechProfileStore'])->name('technician.profile.store');

//SVhunting
Route::get('svhunting/list', [HomeController::class, 'SvhuntingList'])->name('svhunting.list');
Route::get('svhunting/view{lect}', [HomeController::class, 'SvhuntingView'])->name('svhunting.view');
Route::get('svhunting/form{lect}', [HomeController::class, 'SvhuntingForm'])->name('svhunting.form');
Route::get('svhunting/upload{lect}', [HomeController::class, 'SvhuntingUpload'])->name('svhunting.upload');
Route::post('svhunting/upload{lect}', [HomeController::class, 'SvhuntingUploadPost'])->name('svhunting.upload.post');
Route::get('svhunting/Update{lect}', [HomeController::class, 'SvhuntingUpdate'])->name('svhunting.update');
Route::get('svhunting/list{lect}', [HomeController::class, 'SvhuntingDelete'])->name('svhunting.delete');
Route::get('svhunting/edit{lect}', [HomeController::class, 'SvhuntingEdit'])->name('svhunting.edit');
Route::post('svhunting/Edit{lect}', [HomeController::class, 'SvhuntingEditPost'])->name('svhunting.edit.post');

//ManageApprovalandReport
Route::get('/submitfile',[SubmitController::class,'submitForm']);

Route::post('/submitfile',[SubmitController::class,'submitFile'])->name('submit.submitfile');