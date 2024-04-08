<?php

use Illuminate\Support\Facades\Auth;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', 'FrontendController@index')->name('welcome');
Route::get('/contact', 'FrontendController@contact')->name('contact');
Route::get('/about', 'FrontendController@about')->name('about');
Route::get('/our/service/{slug}', 'FrontendController@service')->name('frontend.service');
Route::get('/blog', 'FrontendController@posts')->name('frontend.posts');
Route::get('/blog/{slug}', 'FrontendController@post')->name('frontend.post');
Route::get('/clear-cache', 'FrontendController@clearWebsiteCache');
Route::get('/our-services', 'FrontendController@Ourservices')->name("Ourservices");
Route::post('/newsletter/subscription', 'FrontendController@newsletter');
// Route::get('/clear-cache', [HomeController::class, 'clearWebsiteCache']);

Route::group(['middleware' => 'auth'], function() {
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::resource('user', 'UserController');
    Route::resource('permission', 'PermissionController');
    Route::get('/profile', 'UserController@profile')->name('user.profile');
    Route::post('/profile', 'UserController@postProfile')->name('user.postProfile');
    Route::get('/password/change', 'UserController@getPassword')->name('userGetPassword');
    Route::get('/service/index', 'HomeController@index_service')->name('services.index');
    Route::get('/service/create', 'HomeController@create_service')->name('services.create');
    Route::post('/service/store', 'HomeController@store_service')->name('services.store');
    Route::get('/service/delete/{id}', 'HomeController@service_delete')->name('service.delete');
    Route::get('/service/{id}', 'HomeController@edit_service')->name('service.edit');
    Route::post('/service/update/{id}', 'HomeController@update_service')->name('service.update');
    Route::post('/password/change', 'UserController@postPassword')->name('userPostPassword');
    Route::resource('/home/blog', 'PostsController');
    Route::resource('/blog/category', 'CategoryController');
    Route::get('/newsletter', 'HomeController@newsletter')->name("newsletter");
    Route::get('/newsletter/{id}', 'HomeController@newsletter_delete')->name("newsletter.delete");
    Route::get('/email_export', 'HomeController@get_email_data')->name("email.export");
    // Route::get('student_export',[StudentController::class, 'get_student_data'])->name('student.export');
    // Route::resource('/blog', PostsController::class);


    // Setting
			Route::prefix('setting')->group(function () {
                Route::get('/website-setting/edit', 'SettingController@edit')->name('website-setting.edit');
                Route::post('/website-setting/update/{id}', 'SettingController@update')->name('website-setting.update');
				// Route::get('/website-setting/edit', 		 [App\Http\Controllers\Admin\SettingController::class, 'edit'])->name('website-setting.edit');
				// Route::post('/website-setting/update/{id}',  [App\Http\Controllers\Admin\SettingController::class, 'update'])->name('website-setting.update');
			});
});


Route::group(['middleware' => ['auth', 'role_or_permission:admin|create role|create permission']], function() {

    Route::resource('role', 'RoleController');

});

Auth::routes();

//////////////////////////////// axios request

Route::get('/getAllPermission', 'PermissionController@getAllPermissions');
Route::post("/postRole", "RoleController@store");
Route::get("/getAllUsers", "UserController@getAll");
Route::get("/getAllRoles", "RoleController@getAll");
Route::get("/getAllPermissions", "PermissionController@getAll");

/////////////axios create user
Route::post('/account/create', 'UserController@store');
Route::put('/account/update/{id}', 'UserController@update');
Route::delete('/delete/user/{id}', 'UserController@delete');
Route::get('/search/user', 'UserController@search');
