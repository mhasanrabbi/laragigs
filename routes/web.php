<?php

use App\Http\Controllers\ListingController;
use GuzzleHttp\Psr7\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Listing;

/*
     Common Resource Routes:
     index - Show all listings
     show - show single listing
     create - show form to create new listing
     store - store new listing
     edit - show form to edit listing
     update - update listing
     destroy - delete listing

*/

// All Listings
Route::get('/', [ListingController::class, 'index']);


// Show Create Form
Route::get('/listings/create', [ListingController::class, 'create']);

// Store Listing Data
Route::post(
    '/listings',
    [ListingController::class, 'store']
);

// Show Edit Form
Route::get('/listings/{listing}/edit', [ListingController::class, 'edit']);

// Update Listing
Route::put('/listings/{listing}', [ListingController::class, 'update']);

// Single Listing
Route::get(
    '/listings/{listing}',
    [ListingController::class, 'show']
);