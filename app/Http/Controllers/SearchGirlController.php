<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Girl;

class SearchGirlController extends Controller
{
   public function index(){
    $lat = 51.5270;
    $lng = -2.5828;

    $girls=Girl::whereBetween('lat',[$lat-0.1,$lat+0.1])
                ->whereBetween('lng',[$lng-0.1,$lng+0.1])
                ->get();
    return $girls;
   }

    public function searchGirls(Request $request){
        $lat = $request->lat;
        $lng = $request->lng;

        $venues= DB::table('address')
      ->select('City', 'Latitude','Longitude')
      ->whereBetween('Latitude',[$lat-0.1,$lat+0.1])
      ->whereBetween('Longitude',[$lng-0.1,$lng+0.1])
      ->get();


        // $girls=Girl::whereBetween('lat',[$lat-0.1,$lat+0.1])
        //             ->whereBetween('lng',[$lng-0.1,$lng+0.1])
        //             ->get();
        // return $girls;
    }
}
