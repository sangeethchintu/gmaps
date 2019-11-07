<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class VenueController extends Controller
{
    public function getVenues(){

        $data = DB::table('adress')
        ->select ('Latitude','Longitude')
        ->where('AddressID', '<', '3');
          
           
        return view('venues', compact('data'));

    }
}
