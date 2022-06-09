<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TicketController;

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

/*Route::get('/tickets', function () {
    return view('/tickets.index');
});
*/
//Route::get('dashboard', [CustomAuthController::class, 'dashboard']);

Route::get('/tickets', [TicketController::class, 'index'])->name('tickets.index'); //view tickets
Route::get('/tickets/create', [TicketController::class, 'create'])->name('tickets.create'); //create new ticket in form
Route::post('/tickets/create', [TicketController::class, 'store'])->name('tickets.store'); //create new ticket in database
Route::get('/tickets/delete/{ticket}', [TicketController::class, 'delete'])->name('tickets.delete'); //create new ticket in database
Route::get('/tickets/{ticket}', [TicketController::class, 'show'])->name('tickets.show');
Route::post('/tickets/{ticket}', [TicketController::class, 'update'])->name('tickets.update');
