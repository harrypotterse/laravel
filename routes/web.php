<?php

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

Route::get('/mm', function () {
    trim_characters();
  //  return view('welcome');
});



Route::get('/clear-cache', function () {
    $exitCode = Artisan::call('cache:clear');
    // return what you want
});
//Clear Cache facade value:
Route::get('/clear-cache', function () {
    $exitCode = Artisan::call('cache:clear');
    return '<h1>Cache facade value cleared</h1>';
});

//Reoptimized class loader:
Route::get('/optimize', function () {
    $exitCode = Artisan::call('optimize');
    return '<h1>Reoptimized class loader</h1>';
});

//Route cache:
Route::get('/route-cache', function () {
    $exitCode = Artisan::call('route:cache');
    return '<h1>Routes cached</h1>';
});

//Clear Route cache:
Route::get('/route-clear', function () {
    $exitCode = Artisan::call('route:clear');
    return '<h1>Route cache cleared</h1>';
});

//Clear View cache:
Route::get('/view-clear', function () {
    $exitCode = Artisan::call('view:clear');
    return '<h1>View cache cleared</h1>';
});

//Clear Config cache:
Route::get('/config-cache', function () {
    $exitCode = Artisan::call('config:cache');
    return '<h1>Clear Config cleared</h1>';
});
//====================================
Route::get('lang/{locale}', function ($locale) {
    App::setLocale($locale);
    //store the locale in session so that the middleware can register it
    session()->put('locale', $locale);
    $a = session()->get('locale');
    $segment1 = Request::segment(1);
    return Redirect::back();
});
/*
|-------------------------------------------------------
| home
 */
Route::get('/maile', function () {






            $users = DB::table('sections_pro')
            ->join('portfolio', 'sections_pro.id', '=', 'portfolio.sections_prog')
            ->get();


   dd($users[0]->sections);
   
});


Route::get('users/{id}', function($id) {
    $users = DB::table('users')
    ->join('contacts', 'users.id', '=', 'contacts.user_id')
    ->join('orders', 'users.id', '=', 'orders.user_id')
    ->get();
});





Route::namespace ('front')->group(function () {
    Route::get('/blog/{id?}', 'blog_controler@show_blog')->name('show_blog');
    Route::get('/blog_controler/{id}', 'blog_controler@blog_categories')->name('blog_categories');
    Route::match(['get', 'post'], '/contact/', 'blog_controler@contact')->name('contact');
    Route::get('/portfolio', 'portfoliocma@portfolio')->name('portfolio');
    Route::get('/about', 'about_controler@about_controler')->name('about');
    Route::get('/about', 'about_controler@planning')->name('plan arning');
    Route::get('/', 'index@index')->name('index');
    Route::get('/contact', 'contacts_cma@contact')->name('contact');
});
Route::namespace ('Back')->prefix('admin')->group(function () {
    Route::get('auth/{probider}', 'socialmedia@redirectToProvider');
    Route::get('auth/{probider}/callback', 'socialmedia@handleProviderCallback');
    //=============================================
    Route::get('/tabel', 'dashboard@index')->name('home');
    Route::get('/add', 'dashboard@add')->name('home');
    Route::get('/tabel', 'dashboard@index')->name('home');
    // ######################################################
    Route::get('/login', 'indexController@login')->name('login');
    Route::get('/index', 'indexController@showindex')->name('index.show');
    Route::match(['get', 'post'], '/login/user', 'indexController@login_user')->name('login.user');
    //#######################################################
    Route::get('/Show/customers', 'maincontrol@showcustomers')->name('Show.customers');
    Route::get('/addpag/customers', 'maincontrol@add_customers')->name('add.customers');
    Route::get('/editpag/customers/{id}', 'maincontrol@customers_up')->name('editpag.customers');
    Route::match(['get', 'post'], '/dell/customers/{id}/{img}', 'maincontrol@customers_del')->name('users.destroy');
    Route::match(['get', 'post'], '/save/customers/', 'maincontrol@save_customers')->name('save.customers');
    Route::match(['get', 'post'], '/up/customers/{id}', 'maincontrol@updata_customers')->name('up.customers');
    Route::match(['get', 'post'], '/destroy/services/{id}/{img}', 'servicesController@destroy')->name('services.destroy.dell');
    Route::match(['get', 'post'], '/destroy/brands/{id}/{img}', 'brandsController@destroy')->name('brands.destroy.dell');
    Route::match(['get', 'post'], '/destroy/ads/{id}/{img}', 'adsController@destroy')->name('ads.destroy.dell');
    Route::match(['get', 'post'], '/destroy/steps/{id}/{img}', 'stepsController@destroy')->name('steps.destroy.dell');
    Route::match(['get', 'post'], '/destroy/idea/{id}', 'ideaController@destroy')->name('idea.destroy.dell');
    Route::match(['get', 'post'], '/destroy/planning/{id}', 'planningController@destroy')->name('planning.destroy.dell');
    Route::match(['get', 'post'], '/destroy/portfolio/{id}/{img}', 'portfolioController@destroy')->name('portfolio.destroy.dell');
    Route::match(['get', 'post'], '/ajax/lang/{lang}/', 'portfolioController@lang_ajax')->name('lang_ajax');
    Route::match(['get', 'post'], '/destroy/sections_pro/{id}/{img}', 'sections_proController@destroy')->name('sections_pro.destroy.dell');
    Route::match(['get', 'post'], '/destroy/users/{id}/{img}', 'usersController@destroy')->name('users.destroy.dell');
    Route::resource('social', 'socialController');
    Route::resource('services', 'servicesController');
    Route::resource('banner', 'bannerController');
    Route::resource('brands', 'brandsController');
    Route::resource('ads', 'adsController');
    Route::resource('steps', 'stepsController');
    Route::resource('idea', 'ideaController');
    Route::resource('planning', 'planningController');
    Route::resource('portfolio', 'portfolioController');
    Route::resource('sections_pro', 'sections_proController');
    Route::resource('users', 'usersController');

    
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('adminr', function () {
    $password = Hash::make('admin');
    dd($password);

});
