<?php

// use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\HowtoUseController;
use App\Http\Controllers\TermsAndConditionsController;
use App\Http\Controllers\PrivacyPolicyController;
use App\Http\Controllers\OurTeamController;
// use App\Http\Controllers\AboutUsController;

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


// ▼ローカルDocker環境下で機能

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/welcome', function () {
//     return view('welcome');
// });

// Route::get('/HowtoUse', function () {
//     return view('HowtoUse');
// });

// Route::get('/terms&conditions', function () {
//     return view('terms&conditions');
// });

// Route::get('/PrivacyPolicy', function () {
//     return view('PrivacyPolicy');
// });

// Route::get('/AboutUs', function () {
//     return view('AboutUs');
// });



// ▼本番環境下で機能

Route::get('/', [WelcomeController::class, 'index']);
Route::get('/welcome', [WelcomeController::class, 'index']);
Route::get('/HowtoUse', [HowtoUseController::class, 'index']);
Route::get('/terms&conditions', [TermsAndConditionsController::class, 'index']);
Route::get('/PrivacyPolicy', [PrivacyPolicyController::class, 'index']);
Route::get('/OurTeam', [OurTeamController::class, 'index']);
// Route::get('/AboutUs', [AboutUsController::class, 'index']);
