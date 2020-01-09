<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use GuzzleHttp\Client;

class TrackingsController extends Controller
{
    public function store($lat, $long, $speed, $system_id)
    {
        $client = new Client();
        // $responce = $client->request('GET', 'http://dev.virtualearth.net/REST/v1/Locations/'. $lat .','. $long .'?o=json&maxRes=1&key=Arr8rRtGsDs4Wd5RmcwJlEBI9VeE7Zc00CfGaKhktcC87JwSfikFInKiVWRVVWKc&IncludeSpeedLimit=true&speedUnit=MPH');

        $responce = $client->request('GET', 'https://dev.virtualearth.net/REST/v1/Routes/SnapToRoad?points='. $lat .', '. $long .'&IncludeSpeedLimit=true&speedUnit=KPH&travelMode=driving&key=Arr8rRtGsDs4Wd5RmcwJlEBI9VeE7Zc00CfGaKhktcC87JwSfikFInKiVWRVVWKc');

        $result = json_decode($responce->getBody(), true);
        return $result['resourceSets'][0]['resources'][0]['snappedPoints'][0];
        // return $result;
    }

    
}
