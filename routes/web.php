<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\JobController;
use App\Http\Controllers\JobpostController;
use App\Http\Controllers\Auth\RegisterController;

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

Route::group([

	'namespace' => 'App\Http\Controllers',

], function() {
    Route::get('/','PageController@index')->name('index');

    Route::get('register','PageController@getRegisterform')->name('register');

    Route::get('/about_us','PageController@aboutUs')->name('about_us');
    Route::get('/contact_us','PageController@contactUs')->name('contact_us');
    Route::post('/feedback',[Pagecontroller::class,'store']);
    Route::get('/job_list','PageController@joblist')->name('job_list');
    Route::get('/job_detail/{id}','PageController@jobdetail')->name('job_detail');
    Route::get('/category','PageController@category')->name('category');
    Route::get('/testimonial','PageController@testimonial')->name('testimonial');
    Route::get('/404','PageController@error')->name('404');
    Route::get('/job_post','PageController@jobpost')->name('job_post');
    Route::get('/job_dashboard','PageController@profile')->name('job_dashboard');
    Route::get('/list','JobController@list');
    Route::get('/upload','PageController@companyregister')->name('comapnyform');
    Route::post('/upload',[PageController::class,'company']);


    /* resource route for contact us */

    // Route::group(['prefix'=>'admin','middleware'=>'auth'], function(){

    Route::resource('contact-us', 'ContactusController');
    Route::post('contact-us/getdata', 'ContactusController@getData')->name('contact-us.getcontact-us');
    /* resource route for admin dashboard */
    Route::get('/dashboard','PageController@dashboard')->name('dashboard');
    Route::resource('users','UserController');
    Route::post('users/getdata', 'UserController@getData')->name('users.getUsers');

    /* resouce route for adminside job dashboard*/
    Route::resource('jobs','JobController');
    Route::post('Jobs/getdata', 'JobController@getData')->name('jobs.getJobs');

    Route::resource('jobposts', 'JobpostController');
    Route::post('jobposts/getdata', 'JobpostController@getData')->name('jobposts.getJobposts');

    // });


    /* resource route for user side job post dashboard */


    Route::get('/search', [pagecontroller::class, 'search'])->name('job.search');
});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['middleware' => ['role:admin']], function () {


});

// Route::group(['prefix'=>'recruiter','middleware'=>'auth'], function(){


// });

// Route::group(['middleware' => ['auth']], function() {
//     Route::resource('roles', RoleController::class);
//     Route::resource('users', UserController::class);
//     Route::resource('jobs', JobController::class);
//     Route::resource('Contact-us', ContactusController::class);
//     Route::resource('job_dashboard', JobpostController::class);
// });
