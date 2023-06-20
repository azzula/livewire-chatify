<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\Dashboard;

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

// Route::middleware([
//     'auth:sanctum',
//     config('jetstream.auth_session'),
//     'verified'
// ])->group(function () {
//     Route::get('/dashboard', function () {
//         return view('dashboard');
//     })->name('dashboard');
// });

Route::get('/', function () {
    if (Auth::check()) {
        if (Auth::user()->hasRole('admin')) {
            return redirect()->route('dashboard');
        } elseif (Auth::user()->hasRole('user')) {
            return redirect()->route('chat');
        }
    } else {
        return redirect()->route('login');
    }
})->name('welcome');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/', function () {
        if (Auth::check()) {
            if (Auth::user()->hasRole('admin')) {
                return redirect()->route('dashboard');
            } elseif (Auth::user()->hasRole('user')) {
                return redirect()->route('chat');
            }
        } else {
            return redirect()->route('login');
        }
    })->name('welcome');

    Route::get('dashboard', Dashboard::class)->middleware('role:admin')->name('dashboard');
});
