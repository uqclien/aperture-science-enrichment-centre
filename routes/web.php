<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Models\Submission;

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
    $user = Auth::user();
    $submissions = $user->is_admin ? Submission::all() : $user->submissions()->get();
    return view('dashboard', ['submissions' => $submissions]);
})->middleware(['auth'])->name('dashboard');

Route::get('/submission/{id}', function ($id) {
    $submission = Submission::where(['id' => $id, 'user_uid' => Auth::user()->uid])->firstOrFail();
    return view('submission', ['submission' => $submission]);
})->middleware(['auth'])->name('submission');

require __DIR__.'/auth.php';
