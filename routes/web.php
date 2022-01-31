<?php

use Illuminate\Support\Facades\Route;

use Illuminate\Support\Facades\Auth;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ConfirmServiceController;
use App\Http\Controllers\BillController;
use App\Http\Controllers\ProductReviewController;
use App\Http\Controllers\ServiceReviewController;
use App\Http\Controllers\SslCommerzPaymentController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\ProviderController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProfileController;




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


Route::post('cart/product/{id}', [App\Http\Controllers\CartProductController::class, 'addtocart'])->name('cartproduct')->middleware('customer');
Route::get('cart/product/{id}', [App\Http\Controllers\CartProductController::class, 'index'])->name('index')->middleware('customer');

Route::post('/cartitem/{id}', [App\Http\Controllers\CartProductController::class, 'removeItem'])->name('removeitem')->middleware('customer');

// Route::get('/confirming', [ConfirmServiceController::class, 'index']);
// Route::post('/confirming', [ConfirmServiceController::class, 'store'])->name('confirming');
// Route::post('/product/{id}', [App\Http\Controllers\Customer\ProductController::class, 'addtocart'])->name('addtocart')->middleware('customer');
// Route::post('/cart/{id}', [App\Http\Controllers\Customer\CartController::class, 'removeItem'])->name('removeitem')->middleware('customer');

Route::get('service/{id}/confirm', [ConfirmServiceController::class, 'index'])->name('confirming');
Route::post('/add-confirm/{id}', [ConfirmServiceController::class, 'store']);

Route::get('/myconfirmedservices', [ConfirmServiceController::class, 'customer']);
Route::get('/confirmedservices', [ConfirmServiceController::class, 'provider']);
Route::get('/allconfirmedservices', [ConfirmServiceController::class, 'admin']);


Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::get('/side', function () {
    return view('side');
})->name('side');

Route::get('/admin', function () {
    return view('admin.dashboard');
})->name('dashboard');

Route::get('about', function () {
    return view('about');
})->name('about');
Route::get('contact', function () {
    return view('contact');
})->name('contact');

Route::get('faq', function () {
    return view('faq');
})->name('faq');

Route::get('catering', function() {
    return view('catering');
})->name('catering');

Route::get('carrental', function() {
    return view('carrental');
})->name('carrental');

Route::get('musicsystem', function() {
    return view('musicsystem');
})->name('musicsystem');

Route::get('/wedding', function () {
    return view('wedding');
})->name('wedding');
Route::get('/birthday', function () {
    return view('birthday');
})->name('birthday');

Route::get('/parlour', function () {
    return view('category.parlour');
})->name('parlour');

Route::get('/worker', function () {
    return view('category.worker');
})->name('worker');

Route::get('/gifts', function () {
    return view('category.gifts');
})->name('gifts');


Route::get('/seminar', function () {
    return view('category.seminar');
})->name('seminar');

Route::get('/officeparty', function () {
    return view('category.officeparty');
})->name('officeparty');

Route::get('/conference', function () {
    return view('category.conference');
})->name('conference');


Route::get('/review', [ReviewController::class, 'index']);
Route::post('/review', [ReviewController::class, 'store'])->name('review');


Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::post('/contact', [HomeController::class, 'send_mail'])->name('sendmail');


Route::group(['middleware' => 'prevent-back-history'], function () {
    Auth::routes();
    Route::prefix('/customer')->name('customer.')->namespace('customer')->group(function () {

        Route::get('/dashboard', [App\Http\Controllers\Customer\DashboardController::class, 'index'])->name('dashboard')->middleware('customer');
        
        Route::get('/profile', [App\Http\Controllers\Customer\ProfileController::class,'index'])->name('profile')->middleware('customer');
        Route::post('/profile', [App\Http\Controllers\Customer\ProfileController::class,'update'])->name('customer.profile.update')->middleware('customer');



        //Login Register Routes
        Route::get('/register', [App\Http\Controllers\Customer\Auth\RegisterController::class, 'CustomerRegisterForm'])->name('showregister');
        Route::post('/register', [App\Http\Controllers\Customer\Auth\RegisterController::class, 'RegisterCustomer'])->name('register');
        Route::get('/login', [App\Http\Controllers\Customer\Auth\LoginController::class, 'showLoginForm'])->name('showlogin');
        Route::post('/login', [App\Http\Controllers\Customer\Auth\LoginController::class, 'login'])->name('login');
        Route::post('/logout', [App\Http\Controllers\Customer\Auth\LoginController::class, 'logout'])->name('logout');
        Route::get('auth/google', [App\Http\Controllers\Customer\Auth\GoogleController::class, 'redirectToGoogle'])->name('googlelogin');
        Route::get('auth/google/callback', [App\Http\Controllers\Customer\Auth\GoogleController::class, 'handleGoogleCallback'])->name('googlecallback');
        //customerservice
        Route::get('/service/all', [App\Http\Controllers\Customer\ServiceController::class, 'allservice'])->name('allservice')->middleware('customer');
        Route::get('/service/booked', [App\Http\Controllers\Customer\ServiceController::class, 'showservice'])->name('showservice')->middleware('customer');
        Route::get('/service/pending', [App\Http\Controllers\Customer\ServiceController::class, 'pendingservice'])->name('pendingservice')->middleware('customer');
        Route::get('/service/all/{id}', [App\Http\Controllers\Customer\ServiceController::class, 'addservice'])->name('addservice')->middleware('customer');
        Route::get('/service/booked/{id}', [App\Http\Controllers\Customer\ServiceController::class, 'deleteservice'])->name('deleteservice')->middleware('customer');


        Route::get('/event/add', [App\Http\Controllers\Customer\ServiceController::class, 'showaddevent'])->name('showaddevent')->middleware('customer');
        Route::post('/event/add', [App\Http\Controllers\Customer\ServiceController::class, 'makeevent'])->name('addevent')->middleware('customer');

        Route::get('/provider', [App\Http\Controllers\Customer\MeetingController::class, 'showprovider'])->name('showprovider')->middleware('customer');
        Route::get('/provider/{id}', [App\Http\Controllers\Customer\MeetingController::class, 'showmeeting'])->name('showmeeting')->middleware('customer');
        Route::post('/provider/{id}', [App\Http\Controllers\Customer\MeetingController::class, 'schedulemeeting'])->name('addmeeting')->middleware('customer');

        Route::get('/meeting', [App\Http\Controllers\Customer\MeetingController::class, 'meetinglist'])->name('meetinglist')->middleware('customer');
        Route::get('/message/{id}', [App\Http\Controllers\Customer\MessageController::class, 'showmessage'])->name('showmessage')->middleware('customer');
        Route::post('/message/{id}', [App\Http\Controllers\Customer\MessageController::class, 'sendmessage'])->name('sendmessage')->middleware('customer');


        Route::get('/product', [App\Http\Controllers\Customer\ProductController::class, 'show'])->name('showproduct')->middleware('customer');

        Route::post('/product/{id}', [App\Http\Controllers\Customer\ProductController::class, 'addtocart'])->name('addtocart')->middleware('customer');
        Route::get('/cart', [App\Http\Controllers\Customer\ProductController::class, 'getcart'])->name('showcart')->middleware('customer');
        Route::post('/cart/{id}', [App\Http\Controllers\Customer\CartController::class, 'removeItem'])->name('removeitem')->middleware('customer');
        Route::get('/cart/clear', [App\Http\Controllers\Customer\CartController::class, 'clear'])->name('clear')->middleware('customer');
        Route::get('/cart/update/{itemId}', [App\Http\Controllers\Customer\ProductController::class, 'update'])->name('update')->middleware('customer');
        

        //Complain Routes
        Route::get('/complain/create', [App\Http\Controllers\Customer\BackComplainsController::class, 'create'])->name('createcomplain')->middleware('customer');
        Route::get('/complain', [App\Http\Controllers\Customer\BackComplainsController::class, 'index'])->name('allcomplains')->middleware('customer');
        Route::post('/complain/create', [App\Http\Controllers\Customer\BackComplainsController::class, 'store'])->name('complain.store')->middleware('customer');
        Route::get('/complain/edit/{id}', [App\Http\Controllers\Customer\BackComplainsController::class, 'edit'])->name('complain.edit')->middleware('customer');
        Route::post('/complain/edit/{id}', [App\Http\Controllers\Customer\BackComplainsController::class, 'update'])->name('complain.update')->middleware('customer');
        Route::post('/complain/delete/{id}', [App\Http\Controllers\Customer\BackComplainsController::class, 'delete'])->name('complain.delete')->middleware('customer');
    });

    //Admin Routes
    Route::prefix('/admin')->name('admin.')->namespace('admin')->group(function () {

        Route::get('/dashboard', [App\Http\Controllers\Admin\DashboardController::class, 'index'])->name('dashboard')->middleware('admin');

        Route::get('/customer', [App\Http\Controllers\CustomerController::class, 'index'])->name('customer')->middleware('admin');

        Route::get('/provider', [App\Http\Controllers\ProviderController::class, 'index'])->name('provider')->middleware('admin');

        Route::get('/products', [App\Http\Controllers\ProductController::class, 'index'])->name('products')->middleware('admin');

        Route::post('/products/create', [App\Http\Controllers\ProductController::class, 'store'])->name('products.store')->middleware('admin');


        Route::get('/provider/edit', [App\Http\Controllers\ProviderController::class, 'edit'])->name('update')->middleware('admin');
        Route::get('/provider/show', [App\Http\Controllers\ProviderController::class, 'show'])->name('show')->middleware('admin');

        Route::get('/complain', [App\Http\Controllers\Admin\ComplainController::class, 'show'])->name('showcomplain')->middleware('admin');
        
        Route::resource('customer', 'CustomerController');
        Route::resource('provider', 'ProviderController');
        Route::resource('products', 'ProductController');
        Route::resource('service', 'ServiceController');
        Route::resource('admin','AdminController');

        Route::get('/profile', [App\Http\Controllers\Admin\ProfileController::class,'index'])->name('profile')->middleware('admin');
        Route::post('/profile', [App\Http\Controllers\Admin\ProfileController::class,'update'])->name('admin.profile.update')->middleware('admin');

        //Login Register Routes

        Route::get('/login', [App\Http\Controllers\Admin\Auth\LoginController::class, 'showLoginForm'])->name('showlogin');
        Route::post('/login', [App\Http\Controllers\Admin\Auth\LoginController::class, 'login'])->name('login');
        Route::post('/logout', [App\Http\Controllers\Admin\Auth\LoginController::class, 'logout'])->name('logout');
        //Add Customer
        Route::get('/customer/add', [App\Http\Controllers\Admin\Customer\AddCustomerController::class, 'CustomerRegisterForm'])->name('addcustomerpage')->middleware('admin');
        Route::post('/customer/add', [App\Http\Controllers\Admin\Customer\AddCustomerController::class, 'AddCustomer'])->name('customer.add')->middleware('admin');
        //Add Provider
        Route::get('/provider/add', [App\Http\Controllers\Admin\Provider\AddProviderController::class, 'ProviderRegisterForm'])->name('addproviderpage')->middleware('admin');
        Route::post('/provider/add', [App\Http\Controllers\Admin\Provider\AddProviderController::class, 'AddProvider'])->name('provider.add')->middleware('admin');
    });
    Route::prefix('/provider')->name('provider.')->namespace('provider')->group(function () {

        Route::get('/dashboard', [App\Http\Controllers\Provider\DashboardController::class, 'index'])->name('dashboard')->middleware('provider');

        Route::get('/profile', [App\Http\Controllers\Provider\ProfileController::class,'index'])->name('profile')->middleware('provider');
        Route::post('/profile', [App\Http\Controllers\Provider\ProfileController::class,'update'])->name('provider.profile.update')->middleware('provider');


        //Login Register Routes

        Route::get('/login', [App\Http\Controllers\Provider\Auth\LoginController::class, 'showLoginForm'])->name('showlogin');
        Route::post('/login', [App\Http\Controllers\Provider\Auth\LoginController::class, 'login'])->name('login');
        Route::post('/logout', [App\Http\Controllers\Provider\Auth\LoginController::class, 'logout'])->name('logout');

        //Service
        Route::get('/service/add', [App\Http\Controllers\Provider\ServiceController::class, 'addservicepage'])->name('addservicepage')->middleware('provider');
        Route::post('/service/add', [App\Http\Controllers\Provider\ServiceController::class, 'addservice'])->name('addservice')->middleware('provider');
        Route::get('/service/all', [App\Http\Controllers\Provider\ServiceController::class, 'allservice'])->name('allservice')->middleware('provider');
        Route::get('/service/edit/{id}', [App\Http\Controllers\Provider\ServiceController::class, 'edit'])->name('service.edit')->middleware('provider');
        Route::post('/service/edit/{id}', [App\Http\Controllers\Provider\ServiceController::class, 'update'])->name('service.update')->middleware('provider');
        Route::post('/service/delete/{id}', [App\Http\Controllers\Provider\ServiceController::class, 'delete'])->name('service.delete')->middleware('provider');
        //Meeting
        Route::get('/meeting', [App\Http\Controllers\Provider\MeetingController::class, 'showmeeting'])->name('showmeeting')->middleware('provider');
        Route::post('/meeting/{id}', [App\Http\Controllers\Provider\MeetingController::class, 'acceptmeeting'])->name('acceptmeeting')->middleware('provider');

        //message
        Route::get('/message/{id}', [App\Http\Controllers\Provider\MessageController::class, 'showmessage'])->name('showmessage')->middleware('provider');
        Route::post('/message/{id}', [App\Http\Controllers\Provider\MessageController::class, 'sendmessage'])->name('sendmessage')->middleware('provider');

        //Product Routes
        Route::get('/product/create', [App\Http\Controllers\Provider\BackProductsController::class, 'create'])->name('createproduct')->middleware('provider');

        Route::get('/product', [App\Http\Controllers\Provider\BackProductsController::class, 'index'])->name('allproducts')->middleware('provider');


        Route::post('/product/create', [App\Http\Controllers\Provider\BackProductsController::class, 'store'])->name('product.store')->middleware('provider');

        Route::get('/product/edit/{id}', [App\Http\Controllers\Provider\BackProductsController::class, 'edit'])->name('product.edit')->middleware('provider');


        Route::post('/product/edit/{id}', [App\Http\Controllers\Provider\BackProductsController::class, 'update'])->name('product.update')->middleware('provider');

        Route::post('/product/delete/{id}', [App\Http\Controllers\Provider\BackProductsController::class, 'delete'])->name('product.delete')->middleware('provider');
    });
});

//bill and payment
Route::get('/paymentmethod', function () {
    return view('bill.payment');
});

Route::get('/bill', function () {
    return view('bill.billing');
});

Route::get('/thankyou', function () {
    return view('bill.thankyou');
});

Route::get('/bill', [BillController::class, 'index'])->name('bill');
Route::post('/bill', [BillController::class, 'store']);
Route::get('/myconfirmedorders', [BillController::class, 'customer']);
Route::get('/confirmedorders', [BillController::class, 'provider']);
Route::get('/allCODconfirmedorders', [BillController::class, 'admin']);
Route::get('/onlinepayment', [BillController::class, 'onlineCustomer']);
Route::get('/allonlinepayments', [BillController::class, 'onlineProvider']);
Route::get('/allcustomeronlinepayment', [BillController::class, 'adminOnline']);



Route::post('/example1', [SslCommerzPaymentController::class, 'exampleEasyCheckout'])->name('example_1');
Route::get('/example2', [SslCommerzPaymentController::class, 'exampleHostedCheckout']);

Route::post('/pay', [SslCommerzPaymentController::class, 'index']);
Route::post('/pay-via-ajax', [SslCommerzPaymentController::class, 'payViaAjax']);

Route::post('/success', [SslCommerzPaymentController::class, 'success']);
Route::post('/fail', [SslCommerzPaymentController::class, 'fail']);
Route::post('/cancel', [SslCommerzPaymentController::class, 'cancel']);

Route::post('/ipn', [SslCommerzPaymentController::class, 'ipn']);

//search

Route::get('/providerproductsearch', [App\Http\Controllers\SearchController::class, 'providerproductsearch']);
Route::get('/customersearch', [App\Http\Controllers\SearchController::class, 'customersearch']);
Route::get('/providerservicesearch', [App\Http\Controllers\SearchController::class, 'providerservicesearch']);
Route::get('/customerservicesearch', [App\Http\Controllers\SearchController::class, 'customerservicesearch']);




//reviews

Route::get('/product-review', [ProductreviewController::class, 'index']);
Route::get('/myreviews', [ProductreviewController::class, 'myreview']);

Route::get('product/{id}/review', [ProductreviewController::class, 'review'])->middleware('customer');
Route::post('/add-review/{id}', [ProductreviewController::class, 'storeReview'])->middleware('customer');
//Route::get('product/{{$product->id}}/customerreview', [ProductreviewController::class, 'customerreview']);
Route::get('product/{id}/providerreview', [ProductreviewController::class, 'providerreview']);

Route::get('/service-review', [ServicereviewController::class, 'index']);
Route::get('/myservicereviews', [ServicereviewController::class, 'myreview']);

Route::get('service/{id}/review', [ServicereviewController::class, 'review'])->middleware('customer');
Route::post('/add-servicereview/{id}', [ServicereviewController::class, 'storeReview'])->middleware('customer');
Route::get('service/{id}/servicereview', [ServicereviewController::class, 'providerreview']);

Route::get('/myservicereviews', [ServicereviewController::class, 'myreview']);

 //Complain Routes
