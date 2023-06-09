<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Controller;
use App\Http\Controllers\StudentController;
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

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/student_add', [StudentController::class, 'student_add'])->name('student_add');

Route::post('/student_add', [StudentController::class, 'student_addReq'])->name('student_addReq');

Route::get('/student_all', [StudentController::class, 'student_allPage'])->name('student_allPage');