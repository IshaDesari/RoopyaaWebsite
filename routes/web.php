<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ExtraController;
use App\Http\Controllers\HomeController;;

use App\Http\Controllers\UserController;
use App\Http\Controllers\ProfileController;

use App\Http\Controllers\CKEditorController;

use App\Http\Controllers\FrontController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\SitemapController;


// Route::get('/', function () {
//     return view('welcome');
// });


// -------------------- Website Routes ---------------------
Route::get('/', [FrontController::class, 'index'])->name('home.index');
Route::get('/startup', [FrontController::class, 'startup'])->name('web.startup');
Route::get('/roopyaatradebizz', [FrontController::class, 'roopyaatradebizz'])->name('web.roopyaatradebizz');
Route::get('/freebies', [FrontController::class, 'freebies'])->name('web.freebies');
Route::get('/investor', [FrontController::class, 'investor'])->name('web.investor');
Route::get('/itservices', [FrontController::class, 'itservices'])->name('web.itservices');
Route::get('/capitalraising', [FrontController::class, 'capitalraising'])->name('web.capitalraising');
Route::get('/contact', [FrontController::class, 'contact'])->name('web.contact');
Route::post('/contact_store', [FrontController::class, 'contact_store'])->name('web.contact_store');

Route::get('sitemap.xml', [SitemapController::class, 'generate'])->name('sitemap');



// ----------------- Admin Panel Routes -----------------------------
Route::get('/admin-login', [ExtraController::class, 'login'])->name('admin.login');

Route::post('loginValidate', [ExtraController::class, 'loginValidate'])->name('loginValidate');

Auth::routes();
// Auth::routes(['verify' => true]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['middleware' => ['auth']], function () {
    Route::get('/dashboard', [ExtraController::class, 'dashboard'])->name('home.dashboard');

    Route::get('/clearcache', [ExtraController::class, 'clearcache'])->name('clearcache');

    // CKEditor Image Upload
    Route::post('ckeditor/upload', [CKEditorController::class,'upload'])->name('ckeditor.image-upload');

    // ------------------------------------------------------

    // User Routes
    Route::resource('users', UserController::class);
    Route::get('changeUserStatus', [UserController::class, 'changeStatus'])->name('user.changeStatus');
    Route::get('trashUsers', [UserController::class, 'trash'])->name('user.trash');
    Route::get('restoreUser/{id}', [UserController::class, 'restore'])->name('user.restore');
    Route::get('/chUserPwd/{id}', [UserController::class, 'chpwdform'])->name('user.chpwd');
    Route::put('/chUserPwdSubmit/{id}', [UserController::class, 'chpwdsubmit'])->name('user.chpwdsubmit');

    // Profile Routes
    Route::resource('profile', ProfileController::class);
    Route::get('viewprofile', [ProfileController::class, 'profile'])->name('profile.view');
    Route::get('editprofile', [ProfileController::class, 'editProfile'])->name('profile.editProfile');
    Route::get('chpwd', [ProfileController::class, 'chpwdform'])->name('profile.chpwd');
    Route::post('chpwd', [ProfileController::class, 'chpwdsubmit'])->name('profile.chpwdsubmit');

    // Contact Routes
    Route::resource('contacts', ContactController::class);

});
