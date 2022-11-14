<?php

use App\Models\Listing;
use Illuminate\Http\Request;
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

// |--------------------------------------------------------------------------
// | Employee listing --------------------------------------------------------
// |--------------------------------------------------------------------------
// | All Employee pange 
// | Single Employee page 
// |--------------------------------------------------------------------------
  // All Employees ---------------

Route::get('/', function () {
    return view('listings', [

        'heading' => 'Latest Listings',
        'listings' => Listing::all()

    ]);
});

// Single Employee ------------

Route::get('/listings/{id}', function(Listing $listing ){
    return view('listing', [
        'listing' => $listing

    ]);
   
    });

// |--------------------------------------------------------------------------
// |--------------------------------------------------------------------------
// |--------------------------------------------------------------------------

