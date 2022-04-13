<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashBoardController;
use App\Http\Controllers\HomeController;

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

Route::get('/', [HomeController::class,'HomePage']);

/*Route::get('/github/auth/redirect',[AuthController::class,'githubRedirect']);
Route::get('/github/auth/callback',[AuthController::class,'githubCallback']);*/
Route::get('/callGithub',[AuthController::class,'callGithub']);
Route::get('/githubCallBack',[AuthController::class,'gitHubCallBack']);
Route::get('/dashboardPage',[DashBoardController::class,'DashboardPage'])->middleware('checkLogin');
Route::get('/logout',[AuthController::class,'Logout']);
