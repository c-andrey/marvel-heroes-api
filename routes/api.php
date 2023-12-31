<?php

use App\Http\Controllers\VotesController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/heroes/vote', [VotesController::class, 'store'])->name('vote.store');
Route::get('/heroes', [VotesController::class, 'listHeroesWithVotes'])->name('vote.index');
