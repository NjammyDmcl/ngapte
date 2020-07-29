<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \Torann\GeoIP\Facades\GeoIP;

class HomeController extends Controller {
//composer require geoip2/geoip2

    function index(Request $request) {

        $loc = geoip()->getLocation($request->ip());
        dd($loc);
        return view('home');
    }

}
