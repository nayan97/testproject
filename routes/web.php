<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PeopleController;
use App\Http\Controllers\Admin\dashboardController;
use App\Http\Controllers\Frontend\FrontendController;

/***
 * frontend Controler
 */
Route::get('/',[FrontendController::class, 'ShowHomePage']) ->name('home.page');
Route::get('/menu',[FrontendController::class, 'ShowMenuPage']) ->name('menu.page');
Route::get('/blog',[FrontendController::class, 'ShowBlogPage']) ->name('blog.page');
Route::get('/staff',[FrontendController::class, 'ShowStaffPage']) ->name('staff.page');


/**
 * Backend routes 
 */
Route::get('dashboard', [dashboardController::class, 'showdashBoard']) -> name('dashboard.index');
Route::resource('people', PeopleController::class);