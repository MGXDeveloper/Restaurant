<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\SuperAdminController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\WebSiteController;
use App\Models\User;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

/* Route::get('/', function () {
    return view('WebSite.index');
}); */


Route::controller(WebSiteController::class)->group(function(){

    Route::get('/','index')->name('/');
    Route::get('/about','about')->name('about');
    Route::get('/contact','contact')->name('contact');
    Route::get('/booking','booking')->name('booking');
    Route::get('/menu','menu')->name('menu');
    Route::get('/service','service')->name('service');
    Route::get('/team','team')->name('team');
    Route::get('/testimonial','testimonial')->name('testimonial');


});


Route::get('Role',[RoleController::class,'Role'])->name('Role');






/*Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');*/

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


Route::controller(UserController::class)->group(function(){

    Route::get('User.Menu','Menu')->name('User.Menu');

});



require __DIR__.'/auth.php';
