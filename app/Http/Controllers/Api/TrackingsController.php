<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use GuzzleHttp\Client;
use App\Rule;
use App\Record;
use App\Area;
use Illuminate\Support\Facades\DB;

class TrackingsController extends Controller
{
    public function store($lat, $long, $speed, $system_id)
    {
        $radius = 0.003;
        // return $lat;
        if ($lat == 0.000000) {
            $data_none = array(
                'note' => 'N/A Location / Error!'
            );

            return $data_none;
        } else {
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

            $areas = Area::all();
            
            foreach ($areas as $area => $value) {
                $radius = 0.0002;
                $latOffset = round($value->latitude - $lat, 6);
                $longOffset = round($value->longitude - $long, 6);
                // echo $latOffset .'<br>';
                // echo $longOffset .'<br>';
                if((($latOffset <= $radius) && ($latOffset >= ($radius * -1))) && (($longOffset <= $radius) && ($longOffset >= ($radius * -1)))) {
                    $area_location = $value->id;
                    // echo $area_location .'<br>';
                    // echo $value .'<br>';
                    $area_located = Area::where('id', $area_location)->get();
                    if (!$area_located->isEmpty()) {
                        $data = array(
                            'location' => $area_located[0]['area'],
                            'speed_limit' => $area_located[0]['speed_limit'],
                            'speed' => (int)$speed,
                            'violation' => 0
                        );
                        $data_violate = array(
                            'location' => $area_located[0]['area'],
                            'speed_limit' => $area_located[0]['speed_limit'],
                            'speed' => (int)$speed,
                            'violation' => 1
                        );
                        if ($speed > $area_located[0]['speed_limit']) {
                            $record = new Record;
                            $record->system_id = $system_id;
                            $record->speed = (int)$speed;
                            $record->speed_limit = $area_located[0]['speed_limit'];
                            $record->location = $area_located[0]['area'];
                            $record->save();
        
                            return $data_violate;
                        } else {
                            return $data;
                        }
                    }
                }
                
            }
            // if ($except == true) {
                
                // return $area_located;
            // }
            

            $rule = Rule::where('street',$result)->get();
            
            // $rule2 = DB::table('rules')->where('street', 'like', '%' .$result. '%')->get();
            // return $rule;   
            
            if (!$rule->isEmpty()) {
                $data = array(
                    'location' => $rule[0]['street'],
                    'speed_limit' => $rule[0]['speed_limit'],
                    'speed' => (int)$speed,
                    'violation' => 0
                );

                $data_violate = array(
                    'location' => $rule[0]['street'],
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
            } 
            
            else {
                $data_none = array(
                    'note' => 'N/A Location'
                );

                return $data_none;
            }
        } 
    }
}
