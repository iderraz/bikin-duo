<?php

use App\Http\Controllers\AboutUsController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\FeatureController;
use App\Http\Controllers\FooterBottomController;
use App\Http\Controllers\FooterController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\NavbarController;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\Section2Controller;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\TestimonialController;
use App\Http\Controllers\TitreController;
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

Route::get('/', function () {
    return view('welcome');
});



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');


Route::get('/main', [MainController::class, 'index'])->name('main');


//Routes Resources

Route::resource('/aboutUs', AboutUsController::class);
Route::resource('/contact', ContactController::class);
Route::resource('/feature', FeatureController::class);
Route::resource('/footer', FooterController::class);
Route::resource('/footerBottom', FooterBottomController::class);
Route::resource('/navbar', NavbarController::class);
Route::resource('/portfolio', PortfolioController::class);
Route::resource('/role', RoleController::class);
Route::resource('/section2', Section2Controller::class);
Route::resource('/service', ServiceController::class);
Route::resource('/team', TeamController::class);
Route::resource('/testimonial', TestimonialController::class);
Route::resource('/titre', TitreController::class);




require __DIR__.'/auth.php';
