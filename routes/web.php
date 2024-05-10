<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AgentController;

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




Route::get('/', [AgentController::class, 'index'])->name('agents.index');

Route::post('/agents', [AgentController::class, 'store'])->name('agents.store');

Route::get('/listing', [AgentController::class, 'listing'])->name('agents.listing');

Route::get('/agents/{id}', [AgentController::class, 'show'])->name('agents.show');
Route::get('/edit/{agent}', [AgentController::class, 'edit'])->name('agents.edit');
Route::put('/update/{agent}', [AgentController::class, 'update'])->name('agents.update');






