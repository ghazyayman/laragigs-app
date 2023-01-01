<?php

use App\Http\Controllers\ListingController;
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

// Common Resource Routes :
// index - Show all listings
// show - Show single listing
// create - Show form to create new listing 
// store - Store new listing
// edit - show form to edit listing
// update - Update listing
// destroy - Delete listing 


// All listings
Route::get('/', [ListingController::class, 'index']);

// Single listing 
Route::get('/listings/{listing}', [ListingController::class, 'show']); 