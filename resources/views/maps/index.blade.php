@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="animated fadeIn">
            <h2 class="my-4">Map</h2>
            <div class="row">
                <div class="col-md-4">
                    <div class="card">
                        <form action="{{ route('maps.store') }}" method="POST" class="form" id="signupForm">
                            @csrf

                            <div class="card-header bg-primary">
                                <i class="fa fa-tachometer"></i> <span class="lead">Add Speed Limit</span>
                            </div>
                            <div class="card-body">
                                <div class="form-group" id="address_container">
                                    <label for="address">Address</label>
                                    <input type="text" class="form-control" id="address" name="address">
                                </div>
                                <div class="form-group">
                                    <label for="street">Street</label>
                                    <input type="text" class="form-control" id="street" name="street">
                                </div>
                                <div class="form-group">
                                    <label for="speed_limit">Speed Limit</label>
                                    <div class="input-group">
                                        <input type="text" class="form-control" id="speed_limit" name="speed_limit">
                                        <div class="input-group-append">
                                            <span class="input-group-text">km/h</span>
                                        </div>
                                    </div>
                                </div>
                                <input type="submit" value="Save" class="btn btn-primary">
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-body p-0">
                            <div id="myMap" class="img-fluid" style='width: 100vw; height: 70vh;'></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script type='text/javascript'>
        var location_map = [
            @foreach ($rules as $rule)
                [ '{{ $rule->latitude }}', '{{ $rule->longitude }}', '{{ $rule->street }}', '{{ $rule->speed_limit }}' ],
            @endforeach
        ];
    </script>

    <script type='text/javascript'
            src='http://www.bing.com/api/maps/mapcontrol?callback=GetMap&key=Arr8rRtGsDs4Wd5RmcwJlEBI9VeE7Zc00CfGaKhktcC87JwSfikFInKiVWRVVWKc' 
            async defer></script>
    
    <script type='text/javascript'>
     
     
    
    var icon = '<svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="21" height="32" viewBox="0 0 365 560" xml:space="preserve"><path fill="{color}" d="M182.9,551.7c0,0.1,0.2,0.3,0.2,0.3S358.3,283,358.3,194.6c0-130.1-88.8-186.7-175.4-186.9 C96.3,7.9,7.5,64.5,7.5,194.6c0,88.4,175.3,357.4,175.3,357.4S182.9,551.7,182.9,551.7z"/><circle cx="183" cy="183" r="150" fill="#17062b"/><text x="183" y="250" style="font-size:180px;font-family:arial;fill:#ffffff;" text-anchor="middle">{text}</text></svg>'
    
    function GetMap() {
                var map = new Microsoft.Maps.Map('#myMap', {
                    center: new Microsoft.Maps.Location(10.297487, 123.896628),
                    zoom:16,
                    minZoom: 8,
                    
                });

                // var bounds = map.getCenter();

                Microsoft.Maps.loadModule('Microsoft.Maps.AutoSuggest', function () {
                    var manager = new Microsoft.Maps.AutosuggestManager({ map: map });
                    manager.attachAutosuggest('#address', '#address_container', suggestionSelected);
                });

                

                function suggestionSelected(result) {
                    //Remove previously selected suggestions from the map.
                    map.entities.clear();
                    //Show the suggestion as a pushpin and center map over it.
                    // var pin = new Microsoft.Maps.Pushpin(result.location);

                    var pushpin = new Microsoft.Maps.Pushpin(result.location, {
                        icon: icon,	
                        anchor: new Microsoft.Maps.Point(10, 32),	
                        color: '#20a8d8',
                        text: '1' , 
                        // title: String(location_map[0]), 
                        // subTitle: 'Subtitle',
                    });
                    
                    var input = document.createElement('input');
                        input.type = 'hidden';
                        input.name = 'location';
                        // input.value = String(result.location);
                        var loc = String(result.location);
                        input.value = loc.slice(14, -2);

                    document.querySelector('.form').appendChild(input);

                    map.entities.push(pushpin);
                    map.setView({ bounds: result.bestView });
                }

                for (let i = 0; i < location_map.length; i++) {

                    var pushpin = new Microsoft.Maps.Pushpin(new Microsoft.Maps.Location(location_map[i][0], location_map[i][1]), {
                        icon: icon,	
                        anchor: new Microsoft.Maps.Point(10, 32),	
                        color: '#20a8d8',
                        text: location_map[i][3], 
                        title: location_map[i][2], 
                        // subTitle: 'Subtitle',
                    });
                    map.entities.push(pushpin);
                }
                
                
            }
            
    </script>
@endsection