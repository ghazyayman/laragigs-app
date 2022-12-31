<?php

namespace App\Http\Controllers;
use App\Models\Listing;


class ListingController extends Controller
{
    // Show all listings
    public function index() {
        return view('listings', [
            'listings' => Listing::all()
        ]);
    }

    // Show single listing
    public function show(Listing $listing) {
        return view('listing', [
            'listing' => $listing
        ]);
    }
}
