<?php

if(version_compare(PHP_VERSION, '7.4.3', '>=')) {
    error_reporting(E_ALL ^ E_NOTICE ^ E_WARNING);
}
use Illuminate\Support\Facades\Route;

use App\Http\Controllers as Controller;

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
Route::get('/login', [Controller\Auth\LoginController::class, 'loginView'])->name('login');
Route::post('/login', [Controller\Auth\LoginController::class, 'login'])->name('auth.login.account');
Route::get('/logout', [Controller\Auth\LoginController::class, 'logout'])->name('auth.logout');
Route::get('/reset-password/{token}', [Controller\Auth\ResetPasswordController::class, 'resetPassword'])->name('auth.reset-password');
Route::post('/reset-password', [Controller\Auth\ResetPasswordController::class,'updatePassword'])->name('auth.update-password');
Route::post('/recover-password', [Controller\Auth\ForgotPasswordController::class,'recoverPassword'])->name('auth.recover-password');
Route::get('/forgot-password', [Controller\Auth\ForgotPasswordController::class,'forgotPassword'])->name('auth.forgot-password');
Route::get('/settings/profile', [Controller\Settings\SettingsController::class,'profile'])->name('settings');
Route::get('/settings', [Controller\Settings\SettingsController::class,'settings'])->name('settings.user');
Route::get('/dashboard',  [Controller\DashboardController::class, 'dashboard'])->name('user.dashboard');
Route::get('/blockhain',  [Controller\Blockchain\BlockchainController::class, 'pageSection'])->withoutMiddleware(['auth'])->name('page.blockhain');
Route::get('/admin',  [Controller\Admin\AdminController::class, 'dashboard'])->name('admin.dashboard');
Route::post('/admin/user/create',  [Controller\Admin\AdminController::class, 'createUser'])->name('admin.user.create');
Route::post('/admin/user/update',  [Controller\Admin\AdminController::class, 'updateUser'])->name('admin.user.update');
Route::post('/admin/user/delete',  [Controller\Admin\AdminController::class, 'deleteUser'])->name('admin.user.delete');
Route::get('/user-management',  [Controller\Admin\AdminController::class, 'userManagement'])->name('admin.user-management');
Route::get('/projects',  [Controller\ProjectsController::class, 'projects'])->name('admin.projects');
Route::get('/projects/create',  [Controller\ProjectsController::class, 'createProject'])->name('project.create');
Route::get('/', [Controller\HomeController::class, 'index'])->withoutMiddleware(['auth'])->name('frontend.home');
