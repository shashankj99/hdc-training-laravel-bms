<?php

use App\Http\Controllers\BookController;
use App\Http\Controllers\ReservationController;
use App\Http\Controllers\StudentController;
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

Route::get("/students", [StudentController::class, 'index'])
    ->name("students.index");

Route::post("/students", [StudentController::class, 'store'])
    ->name("students.store");

Route::get("/students/create", [StudentController::class, 'create'])
    ->name("students.create");

Route::get("/students/{id}", [StudentController::class, 'edit'])
    ->name("students.edit");

Route::get("/books", [BookController::class, 'index'])
    ->name("books.index");

Route::get("/reservations", [ReservationController::class, 'index'])
    ->name("reservations.index");
