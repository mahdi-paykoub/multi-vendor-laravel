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
Route::get('/product/unpublished', [admin\ProductController::class, 'unpublished_products'])->name('unpublished.products');
Route::get('/product/published', [admin\ProductController::class, 'published_products'])->name('published.products');
Route::post('/product/approved/{product}', [admin\ProductController::class, 'approved_product_status'])->name('approved.products');

Route::resource('product', admin\ProductController::class);

Route::resource('user', admin\UserController::class)->except('show');
Route::resource('article-category', admin\ArticleCategoryController::class)->except('show');
Route::resource('product-category', admin\ProductCategoryController::class)->except('show');
Route::resource('permission', admin\PermissionController::class)->except('show');
Route::resource('role', admin\RoleController::class)->except('show');
Route::resource('brand', admin\BrandController::class)->except('show');
Route::resource('seller', admin\SellerController::class);
Route::resource('notification', admin\NotificationController::class);
Route::post('/set-seller-status/{seller}', [admin\SellerController::class, 'setSellerStatus'])->name('setSellerStatus');
Route::post('/attribute/values', [admin\AttributeValueController::class, 'getAttrVal']);
Route::post('/varAttribute/values', [admin\AttributeValueController::class, 'getVarAttrVal']);

//landing product category
Route::get('/select/category', [admin\ProductCategoryController::class, 'select_category_view'])->name('select.category.view');
Route::get('/landing/{productCategory}', [admin\ProductCategoryController::class, 'show_landing'])->name('show.landing.category');
Route::post('/create/landing/slider/{id}', [admin\ProductCategoryController::class, 'create_landing_slider'])->name('create.landing.slider');
Route::post('/create/landing/banner/{id}', [admin\ProductCategoryController::class, 'create_landing_banner'])->name('create.landing.banner');


Route::get('/set-user-role/{id}', [admin\UserController::class, 'setUserRole'])->name('setUserRole');
Route::post('/set-user-role-logic/{user}', [admin\UserController::class, 'addUserRole'])->name('setUserRoleLogic');


//global options
Route::get('/global-option', [admin\GlobalOptionController::class, 'mainPageView'])->name('global.option');
Route::get('/global-option/menu', [admin\GlobalOptionController::class, 'menuPageView'])->name('global.option.menu');
Route::get('/global-option/footer', [admin\GlobalOptionController::class, 'footerPageView'])->name('global.option.footer');
Route::post('/global-option/footer/register-text', [admin\GlobalOptionController::class, 'footerRegisterText'])->name('global.option.regoster.text');
Route::post('/global-option/register/main/menu', [admin\GlobalOptionController::class, 'registerMainMenu'])->name('global.option.register.main.menu');
Route::post('/set-logo', [admin\GlobalOptionController::class, 'setLogo'])->name('set.logo');
Route::post('/set-mail-slider', [admin\GlobalOptionController::class, 'setMainSlider'])->name('set.main.slider');
Route::post('/set-main-first-banner', [admin\GlobalOptionController::class, 'setMainFirstBanner'])->name('set.main.first.banner');
Route::post('/set-top-bar-img', [admin\GlobalOptionController::class, 'set_top_bar_img'])->name('set.top.bar.img');






Route::get('routes', function () {
    $routeCollection = Route::getRoutes();

    echo "<table style='width:100%'>";
    echo "<tr>";
    echo "<td width='10%'><h4>HTTP Method</h4></td>";
    echo "<td width='10%'><h4>Route</h4></td>";
    echo "<td width='10%'><h4>Name</h4></td>";
    echo "<td width='70%'><h4>Corresponding Action</h4></td>";
    echo "</tr>";
    foreach ($routeCollection as $value) {
        echo "<tr>";
        echo "<td>" . $value->methods()[0] . "</td>";
        echo "<td>" . $value->uri() . "</td>";
        echo "<td>" . $value->getName() . "</td>";
        echo "<td>" . $value->getActionName() . "</td>";
        echo "</tr>";
    }
    echo "</table>";
});
