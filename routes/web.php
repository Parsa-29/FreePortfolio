<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\RegisterController;

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
    $data = DB::table('maininfo')->first();
    $data_portfolio = DB::table('portfolio')->orderBy('created_at', 'DESC')->get();
    return view('index', ['data' => $data, 'data_portfolio' => $data_portfolio]);
});


// Route::get('/login', function () {
//     return view('login');
// });

Route::middleware(['auth', 'admin'])->group(function(){
    
    Route::get('admin', function () {
        $data_value = DB::table('maininfo')->first();
        $data_portfolio = DB::table('portfolio')->get();
        $users = DB::table('users')->get();
        return view('admin', ['data_value' => $data_value, 'data_portfolio' => $data_portfolio, 'users' => $users]);
    });
    
    Route::post('admin/register', [RegisterController::class, 'register'])->name('admin.register');

    Route::get('deleteuser/{id}', [RegisterController::class, 'userDelete']);

    Route::post('add', [MainController::class, 'add']);
    
    Route::post('portfolio/add', [PortfolioController::class, 'add']);
    
    Route::get('delete/{id}', [PortfolioController::class, 'PortfolioDelete']);
    
});

Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
