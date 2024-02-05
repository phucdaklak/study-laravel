<?php

use Illuminate\Support\Facades\Route;

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
});


Route::apiResoure('staff', [StaffController::class]);
Route::apiResoure('candidate', [StaffController::class]);
Route::apiResoure('kanban', [KanbanController::class]);
Route::apiResoure('home', [HomeController::class]);
Route::apiResoure('ticket', [TicketController::class]);