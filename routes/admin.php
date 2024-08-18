<?php

use App\Http\Controllers\AccountController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\SuperAdminController;
use App\Http\Controllers\TeamController;
use App\Models\Comment;
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




/*Route::controller(AdminController::class)->group(function(){
    Route::get('team','team')->name('team');
}); */

Route::controller(AdminController::class)->group(function(){
    Route::get('Admin.dashboard','index')->name('Admin.dashboard');
});

Route::controller(TeamController::class)->group(function(){
    Route::get('Admin.team','index')->name('Admin.team');
    Route::post('Add_Team','store')->name('Add_Team');
    Route::post('delete_Team','destroy')->name('delete_Team');
});

Route::resource('Team', TeamController::class);

Route::resource('Menu',MenuController::class);

Route::resource('Account',AccountController::class);

Route::resource('Comment',CommentController::class);


require __DIR__.'/auth.php';
