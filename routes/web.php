<?php

use App\Http\Controllers\userProfile\WishListController;
use Illuminate\Support\Facades\Auth;
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
Route::post('/like/product', [\App\Http\Controllers\SingleProductController::class, 'like_product']);


/*shop cart*/
Route::post('/add-to-cart/{productInfo}', [\App\Http\Controllers\CartController::class, 'add_to_cart'])->name('add.to.cart');
Route::post('/delete-from-cart/{productInfo}', [\App\Http\Controllers\CartController::class, 'delete_from_cart'])->name('delete.from.cart');
Route::post('/increase-product-count/{productInfo}', [\App\Http\Controllers\CartController::class, 'increaseProductCount'])->name('increase.product.count');
Route::get('/checkout/cart', [\App\Http\Controllers\CartController::class, 'shop_cart_view'])->name('shop.cart.view');
/*register order*/
Route::post('/register/order', [\App\Http\Controllers\OrderController::class, 'registerOrder'])->name('register.order');
Route::get('/checkout/shipping', [\App\Http\Controllers\OrderController::class, 'shipping_view'])->name('shipping.view');
Route::post('/payment/callback', [\App\Http\Controllers\OrderController::class, 'payment_callback'])->name('payment.callback');
Route::get('/checkout/thank-you/fali', [\App\Http\Controllers\OrderController::class, 'show_thank_you_fail'])->name('checkout.thank-you.fail');
Route::get('/checkout/thank-you/success', [\App\Http\Controllers\OrderController::class, 'show_thank_you_success'])->name('checkout.thank-you.success');


Route::get('/blog', [\App\Http\Controllers\SingleArticleController::class, 'showHomeBlog'])->name('blog');

Route::post('/upload-article-ckeditor', [\App\Http\Controllers\admin\ArticleController::class, 'uploadArticleCKEditor'])->name('articleCKEditor.upload');


Route::post('/register-comment', [\App\Http\Controllers\CommentController::class, 'registerComment'])->name('register.comment');
Route::post('/register-product-comment', [\App\Http\Controllers\CommentController::class, 'registerProductComment'])->name('register.product.comment');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

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


//user Profile
Route::middleware('auth')->prefix('profile')->group(function () {
    Route::get('/', [\App\Http\Controllers\userProfile\ProfileController::class, 'indexView'])->name('index.profile');
    Route::get('/comments', [\App\Http\Controllers\userProfile\ProfileController::class, 'commentsView'])->name('comments.profile');
    Route::get('/identify-confirmation', [\App\Http\Controllers\userProfile\ProfileController::class, 'identifyView'])->name('identify.profile');
    Route::get('/info', [\App\Http\Controllers\userProfile\ProfileController::class, 'infoView'])->name('info.profile');
    Route::get('/notification', [\App\Http\Controllers\userProfile\ProfileController::class, 'messageView'])->name('message.profile');
    Route::get('/notification/detail/{notification}', [\App\Http\Controllers\userProfile\ProfileController::class, 'getNotificationDetail'])->name('notification.detail.profile');

    Route::get('/orders', [\App\Http\Controllers\userProfile\ProfileController::class, 'ordersView'])->name('orders.profile');
    Route::get('/orders/detail/{order}', [\App\Http\Controllers\userProfile\ProfileController::class, 'orderDetailView'])->name('orders.detail.profile');
    Route::get('/lists', [\App\Http\Controllers\userProfile\ProfileController::class, 'wishListView'])->name('lists.profile');
    Route::get('/wish-list/{wishList}/details', [\App\Http\Controllers\userProfile\ProfileController::class, 'wishListDetailView'])->name('wish.lists.detail.profile');


    Route::post('/add/wish-lists', [WishListController::class, 'addWishList'])->name('add.wish.list');
    Route::delete('/delete/wish-lists/{wishList}', [WishListController::class, 'deleteWishList'])->name('delete.wish.list');
    // ajax
    Route::post('/add/product/to/wish-lists', [WishListController::class, 'addProductToWishList'])->name('add.product.to.wish.list');


    Route::get('/address', [\App\Http\Controllers\userProfile\ProfileController::class, 'addressView'])->name('address.profile');

    Route::post('/update/user-name', [\App\Http\Controllers\userProfile\InfoController::class, 'name_update'])->name('update.user.name');
    Route::post('/update/user-national-code', [\App\Http\Controllers\userProfile\InfoController::class, 'national_code_update'])->name('update.user.nationalCode');
    Route::post('/update/user-email', [\App\Http\Controllers\userProfile\InfoController::class, 'email_update'])->name('update.user.email');
    Route::post('/update/user-phone-number', [\App\Http\Controllers\userProfile\InfoController::class, 'phone_number_update'])->name('update.user.phoneNumber');
    Route::post('/update/user-job', [\App\Http\Controllers\userProfile\InfoController::class, 'job_update'])->name('update.user.job');
});
/*set user or seller address*/
Route::post('/set/user/address', [\App\Http\Controllers\AddressController::class, 'setUserAddress'])->name('set.user.address');
Route::Delete('/delete/address/{address}', [\App\Http\Controllers\AddressController::class, 'delete_address'])->name('delete.address');


// category
Route::get('/category/{productCategorySlug}', [\App\Http\Controllers\CategoryController::class, 'mainOrSubCategory'])->name('category.mainOrSubCategory');
//search
Route::get('/serach', [\App\Http\Controllers\SearchController::class, 'getSearchedProduct'])->name('search.product');
Route::post('/search/ajax', [\App\Http\Controllers\SearchController::class, 'searchAjax'])->name('search.ajax');
