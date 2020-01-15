<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use GuzzleHttp\Client;
use App\Rule;
use App\Record;

class TrackingsController extends Controller
{
    public function store($lat, $long, $speed, $system_id)
    {
        $client = new Client();
        $responce = $client->request('GET', 'http://dev.virtualearth.net/REST/v1/Locations/'. $lat .','. $long .'?o=json&maxRes=1&key=Arr8rRtGsDs4Wd5RmcwJlEBI9VeE7Zc00CfGaKhktcC87JwSfikFInKiVWRVVWKc');

        // $responce = $client->request('GET', 'https://dev.virtualearth.net/REST/v1/Routes/SnapToRoad?points='. $lat .', '. $long .'&IncludeSpeedLimit=true&speedUnit=KPH&travelMode=driving&key=Arr8rRtGsDs4Wd5RmcwJlEBI9VeE7Zc00CfGaKhktcC87JwSfikFInKiVWRVVWKc');

        $partial_result = json_decode($responce->getBody(), true);
        $result = $partial_result['resourceSets'][0]['resources'][0]['address']['addressLine'];
       
        $data = array(
            'street' => $result,
            'speed' => (int)$speed,
            'system_id' => $system_id
        );

        $rule = Rule::where('street', $result)->get();

        if (!$rule->isEmpty()) {
            $data = array(
                'street' => $rule[0]['street'],
                'speed_limit' => $rule[0]['speed_limit'],
                'speed' => (int)$speed,
                'violation' => 0
            );

            $data_violate = array(
                'street' => $rule[0]['street'],
                'speed_limit' => $rule[0]['speed_limit'],
                'speed' => (int)$speed,
                'violation' => 1
            );

            if ($speed > $rule[0]['speed_limit']) {
                $record = new Record;
                $record->system_id = $system_id;
                $record->speed = (int)$speed;
                $record->speed_limit = $rule[0]['speed_limit'];
                $record->location = $rule[0]['street'];
                $record->save();

                return $data_violate;
            } else {
                return $data;
            }
        } else {
            $data_none = array(
                'note' => 'N/A Location'
            );

            return $data_none;
        }
    }
}
