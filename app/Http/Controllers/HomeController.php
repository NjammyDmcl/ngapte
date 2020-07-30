<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \Torann\GeoIP\Facades\GeoIP;
use Filipac\Ip;
class HomeController extends Controller {
//composer require geoip2/geoip2

    function index(Request $request) {
        //$ip = $request->ip();
        //dd($ip);
        $loc = geoip()->getLocation(Ip::get());
        dd($loc);
        return view('home');
    }

}
