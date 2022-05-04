<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\StudentController;
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

Route::get('/',[HomeController::class,'index'])->name('/');
Route::get('/course',[HomeController::class,'course'])->name('Home.course');
Route::match(['get','post'],'/apply',[HomeController::class,'apply'])->name('Home.apply');
Route::match(['get','post'],'/payment',[HomeController::class,'onlinepayment'])->name('Home.onlinepayment');
Route::post('/makepayment',[HomeController::class,'order'])->name('makePayment');
Route::post('/payment-call-back',[HomeController::class,'paymentcallBack'])->name('callback');


Route::prefix('admin')->middleware('auth')->group(function(){
    Route::get('/',[AdminController::class,'dashboard'])->name('admin.dashboard');
    Route::get('/manage/student/active',[StudentController::class,'manageStudent'])->name('admin.manageStudent.active');
    Route::get('/manage/student/new',[StudentController::class,'newAdmission'])->name('admin.manageStudent.newAd');
    Route::get('/manage/student/passout',[StudentController::class,'passOut'])->name('admin.manageStudent.passOut');
    Route::get('/approveStudent/{id}',[AdminController::class,'approveStd'])->name('admin.approve');
    Route::get('/delete/{id}',[AdminController::class,'deleteStd'])->name('admin.delete');
    Route::get('/passOut/{id}',[AdminController::class,'passout'])->name('admin.passout');
    Route::get('/makeCashPayment/{std_id}/{id}',[AdminController::class,'makeCashPayment'])->name('admin.makeCashPayment');
    Route::resource('course', CourseController::class);
    Route::get('/course/setDisable/{id}',[CourseController::class,'setDisable'])->name('course.setDisable');
    Route::get('/course/setActive/{id}',[CourseController::class,'setActive'])->name('course.setActive');
    Route::get('/course/delete/{id}',[CourseController::class,'delete'])->name('course.delete');
});



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
