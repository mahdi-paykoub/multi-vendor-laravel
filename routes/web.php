<?php

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

Route::get('/', [\App\Http\Controllers\IndexController::class, 'index'])->name('main');
Route::get('/blog/{articleSinglePage}', [\App\Http\Controllers\SingleArticleController::class, 'showSingleBlog'])->name('single.blog');
Route::get('/product/{singleProduct}', [\App\Http\Controllers\SingleProductController::class, 'showSingleProduct'])->name('single.product.view');
/*ajax*/
Route::post('/get-product-info-by-color', [\App\Http\Controllers\SingleProductController::class, 'getProductInfoByColor']);

/*shop cart*/
Route::post('/add-to-cart{productInfo}', [\App\Http\Controllers\CartController::class, 'add_to_cart'])->name('add.to.cart');
Route::get('/checkout/cart', [\App\Http\Controllers\CartController::class, 'shop_cart_view'])->name('shop.cart.view');


Route::get('/blog', [\App\Http\Controllers\SingleArticleController::class, 'showHomeBlog'])->name('blog');

Route::post('/upload-article-ckeditor', [\App\Http\Controllers\admin\ArticleController::class, 'uploadArticleCKEditor'])->name('articleCKEditor.upload');


Route::post('/register-comment', [\App\Http\Controllers\CommentController::class, 'registerComment'])->name('register.comment');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


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

//google register
Route::get('/google-register', [\App\Http\Controllers\Auth\GoogleRegisterController::class, 'startGoogleRegister'])->name('google.register');
Route::get('/auth/google/callback', [\App\Http\Controllers\Auth\GoogleRegisterController::class, 'googleBackUrlLogic']);


//seller register
Route::middleware(['checkSellerTokenSession'])->prefix('seller')->group(function () {
    //    step 1
    Route::get('/sign-in', [\App\Http\Controllers\SellerController::class, 'sign_in_view'])->name('sign.in.view')->middleware('verifySellerPhoneView');
    Route::post('/sign-in', [\App\Http\Controllers\SellerController::class, 'send_sms_to_seller_user'])->name('sign.in.logic')->middleware('verifySellerPhoneView');

    //  step 2
    Route::get('/verify/otp', [\App\Http\Controllers\SellerController::class, 'sign_in_verify_otp_view'])->name('verify.otp')->middleware('verifySellerPhoneView');
    Route::post('/verify/otp', [\App\Http\Controllers\SellerController::class, 'sign_in_verify_otp_logic'])->name('verify.otp.logic')->middleware('verifySellerPhoneView');

    //  step 3
    Route::get('/registration/1', [\App\Http\Controllers\SellerController::class, 'select_seller_status'])->name('select.seller.status')->middleware('verifySellerPhone');
    Route::post('/registration/1', [\App\Http\Controllers\SellerInfoController::class, 'sellerSelectStatus'])->name('select.seller.status.logic')->middleware('verifySellerPhone');

    //  step 4
    Route::get('/registration/2', [\App\Http\Controllers\SellerController::class, 'seller_business_info'])->name('seller.business.info')->middleware('verifySellerPhone');
    Route::post('/registration/2', [\App\Http\Controllers\SellerInfoController::class, 'sellerBusinessInfo'])->name('seller.business.info.logic')->middleware('verifySellerPhone');

    //  step 5
    Route::get('/registration/3', [\App\Http\Controllers\SellerController::class, 'seller_address'])->name('seller.address')->middleware('verifySellerPhone');
    Route::post('/registration/3', [\App\Http\Controllers\SellerInfoController::class, 'addSellerAddress'])->name('seller.address.logic')->middleware('verifySellerPhone');

    //  step 6
    Route::get('/registration/4', [\App\Http\Controllers\SellerController::class, 'seller_questions'])->name('seller.questions')->middleware('verifySellerPhone');
    //Route::post('/registration/4', [\App\Http\Controllers\SellerInfoController::class, 'seller_questions'])->name('seller.questions.logic')->middleware('verifySellerPhone');

    //  step 7
    Route::get('/registration/5', [\App\Http\Controllers\SellerController::class, 'final_seller_panel_view'])->name('final.seller.panel.view')->middleware('verifySellerPhone');
    Route::post('/registration/5', [\App\Http\Controllers\SellerInfoController::class, 'final_register_seller'])->name('final.seller.register')->middleware('verifySellerPhone');
});
//seller panel
Route::middleware(['CheckSellerPanelAccess'])->prefix('seller-panel')->group(function () {
    Route::get('/index', [\App\Http\Controllers\SellerPanelViewController::class, 'index'])->name('seller.panel.index');
    Route::get('/add-product', [\App\Http\Controllers\SellerPanelViewController::class, 'add_product_v'])->name('seller.panel.create.product');
    Route::get('/find/product', [\App\Http\Controllers\SellerPanelViewController::class, 'find_product'])->name('seller.panel.find.product');


    /*ajax to get product cats*/
    Route::post('/get-product-categories-ajax', [\App\Http\Controllers\ProductAjaxController::class, 'getCats']);

    Route::post('/seller-create-product', [\App\Http\Controllers\SellerCreateProductController::class, 'create_product'])->name('seller.create.product.logic');
});


//user userProfile
Route::prefix('profile')->group(function () {
    Route::get('/', [\App\Http\Controllers\userProfile\ProfileController::class, 'indexView'])->name('index.profile');
    Route::get('/comments', [\App\Http\Controllers\userProfile\ProfileController::class, 'commentsView'])->name('comments.profile');
    Route::get('/identify-confirmation', [\App\Http\Controllers\userProfile\ProfileController::class, 'identifyView'])->name('identify.profile');
    Route::get('/info', [\App\Http\Controllers\userProfile\ProfileController::class, 'infoView'])->name('info.profile');
    Route::get('/message', [\App\Http\Controllers\userProfile\ProfileController::class, 'messageView'])->name('message.profile');
    Route::get('/orders', [\App\Http\Controllers\userProfile\ProfileController::class, 'ordersView'])->name('orders.profile');
    Route::get('/lists', [\App\Http\Controllers\userProfile\ProfileController::class, 'wishListView'])->name('lists.profile');
    Route::get('/address', [\App\Http\Controllers\userProfile\ProfileController::class, 'addressView'])->name('address.profile');

    Route::post('/address', [\App\Http\Controllers\userProfile\InfoController::class, 'name_update'])->name('update.user.name');

});


