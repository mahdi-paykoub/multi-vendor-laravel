<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\admin;

/*
|--------------------------------------------------------------------------
| admin Routes
|--------------------------------------------------------------------------
|
| Here is where you can register admin routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('admin.index');
});

Route::resource('article', admin\ArticleController::class)->except('show');
Route::resource('product', admin\ProductController::class);
Route::resource('user', admin\UserController::class)->except('show');
Route::resource('article-category', admin\ArticleCategoryController::class)->except('show');
Route::resource('product-category', admin\ProductCategoryController::class)->except('show');
Route::resource('permission', admin\PermissionController::class)->except('show');
Route::resource('role', admin\RoleController::class)->except('show');
Route::resource('brand', admin\BrandController::class)->except('show');
Route::resource('seller', admin\SellerController::class);
Route::post('/set-seller-status/{seller}', [admin\SellerController::class, 'setSellerStatus'])->name('setSellerStatus');
Route::post('/attribute/values', [admin\AttributeValueController::class, 'getAttrVal']);
Route::post('/varAttribute/values', [admin\AttributeValueController::class, 'getVarAttrVal']);


Route::get('/set-user-role/{id}', [admin\UserController::class, 'setUserRole'])->name('setUserRole');
Route::post('/set-user-role-logic/{user}', [admin\UserController::class, 'addUserRole'])->name('setUserRoleLogic');


//global options
Route::get('/global-option', [admin\GlobalOptionController::class, 'mainPageView'])->name('global.option');
Route::post('/set-logo', [admin\GlobalOptionController::class, 'setLogo'])->name('set.logo');
Route::post('/set-mail-slider', [admin\GlobalOptionController::class, 'setMainSlider'])->name('set.main.slider');
Route::post('/set-main-first-banner', [admin\GlobalOptionController::class, 'setMainFirstBanner'])->name('set.main.first.banner');
Route::post('/set-top-bar-img', [admin\GlobalOptionController::class, 'set_top_bar_img'])->name('set.top.bar.img');
