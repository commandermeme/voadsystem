@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="animated fadeIn">
            <h2 class="my-4">Regulations</h2>
            <div class="row">
                <div class="col-md-4">
                    <button type="button" class="btn btn-lg btn-primary mb-3 btn-block" data-toggle="modal" data-target="#addClient">
                        <i class="fa fa-plus"></i> <i class="fa fa-tachometer"></i> Specific Street
                    </button>
                    <button type="button" class="btn btn-lg btn-primary mb-3 btn-block" data-toggle="modal" data-target="#addClient2">
                        <i class="fa fa-plus"></i> <i class="fa fa-tachometer"></i> Accident Prone Area
                    </button>
                    <div class="card">
                        <div class="card-header bg-primary">
                            <i class="icon-graph"></i> <span class="lead">Legend</span>
                        </div>
                        <div class="card-body">
                            <div class="mb-4">
                                <h5>Specific Street 
                                    <svg class="float-right" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="21" height="32" viewBox="0 0 365 560" xml:space="preserve"><path fill="#20a8d8" d="M182.9,551.7c0,0.1,0.2,0.3,0.2,0.3S358.3,283,358.3,194.6c0-130.1-88.8-186.7-175.4-186.9 C96.3,7.9,7.5,64.5,7.5,194.6c0,88.4,175.3,357.4,175.3,357.4S182.9,551.7,182.9,551.7z"/><circle cx="183" cy="183" r="150" fill="#17062b"/><text x="183" y="250" style="font-size:180px;font-family:arial;fill:#ffffff;" text-anchor="middle"></text></svg>
                                </h5>
                            </div>
                            <div class="">
                                <h5>Accident Prone Area
                                    <svg class="float-right" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="21" height="32" viewBox="0 0 365 560" xml:space="preserve"><path fill="#ff4d4d" d="M182.9,551.7c0,0.1,0.2,0.3,0.2,0.3S358.3,283,358.3,194.6c0-130.1-88.8-186.7-175.4-186.9 C96.3,7.9,7.5,64.5,7.5,194.6c0,88.4,175.3,357.4,175.3,357.4S182.9,551.7,182.9,551.7z"/><circle cx="183" cy="183" r="150" fill="#17062b"/><text x="183" y="250" style="font-size:180px;font-family:arial;fill:#ffffff;" text-anchor="middle"></text></svg>
                                </h5>
                            </div>
                        </div>
                    </div>
                </div>

                <!--modals-->
                <div class="modal fade" id="addClient" tabindex="-1" role="dialog" aria-labelledby="addClientLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <form action="{{ route('maps.store') }}" method="POST" class="form" id="signupForm">
                            @csrf
                            <div class="modal-content">
                                <div class="modal-header bg-primary">
                                    <div class="modal-title" id="addClientLabel">
                                        <i class="fa fa-tachometer"></i> <span class="lead">Specific Street</span>
                                    </div>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
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
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                    <input class="btn btn-primary" type="submit" value="Save">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="modal fade" id="addClient2" tabindex="-1" role="dialog" aria-labelledby="addClientLabel2" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <form action="{{ route('maps.area') }}" method="POST" id="signupForm2">
                            @csrf
                            <div class="modal-content">
                                <div class="modal-header bg-primary">
                                    <div class="modal-title" id="addClientLabel2">
                                        <i class="fa fa-tachometer"></i> <span class="lead">Accident Prone Area</span>
                                    </div>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <div class="form-group" id="address_container">
                                        <label for="latitude">Latitude</label>
                                        <input type="text" class="form-control" id="latitude" name="latitude">
                                    </div>
                                    <div class="form-group">
                                        <label for="longitude">Longitude</label>
                                        <input type="text" class="form-control" id="longitude" name="longitude">
                                    </div>
                                    <div class="form-group">
                                        <label for="area">Area</label>
                                        <input type="text" class="form-control" id="area" name="area">
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
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                    <input class="btn btn-primary" type="submit" value="Save">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

                <!--end modal-->

                <div class="col-md-8">
                    <div class="card">
                        <div class="card-body p-0">
                            <div id="myMap" class="img-fluid" style='width: 100vw; height: 70vh;'></div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="card-header bg-primary">
                    <i class="fa fa-map-signs"></i> <span class="lead">Specific Streets</span>
                </div>
                <div class="card-body">
                    <div class="table-responsive-xl">
                        <table  class="table table-striped table-borderless datatable">
                            <thead>
                                <tr>
                                    <th>Address</th>
                                    <th>Street</th>
                                    <th>Speed Limit</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($rules as $rule)
                                    <tr>
                                        <td>{{ $rule->address }}</td>
                                        <td>{{ $rule->street }}</td>
                                        <td>{{ $rule->speed_limit }} km/h</td>
                                        <td>
                                            <form action="{{ route('maps.destroy', $rule->id) }}" method="POST">
                                                @csrf
                                                @method('DELETE')

                                                <button type="submit" class="btn btn-outline-primary"><i class="fa fa-close"></i></button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header bg-primary">
                    <i class="fa fa-map-signs"></i> <span class="lead">Accident Prone Areas</span>
                </div>
                <div class="card-body">
                    <div class="table-responsive-xl">
                        <table  class="table table-striped table-borderless datatable">
                            <thead>
                                <tr>
                                    <th>Area</th>
                                    <th>Speed Limit</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($areas as $area)
                                    <tr>
                                        <td>{{ $area->area }}</td>
                                        <td>{{ $area->speed_limit }} km/h</td>
                                        <td>
                                            <form action="{{ route('maps.area_destroy', $area->id) }}" method="POST">
                                                @csrf
                                                @method('DELETE')

                                                <button type="submit" class="btn btn-outline-primary"><i class="fa fa-close"></i></button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
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

        var location_map_area = [
            @foreach ($areas as $area)
                [ '{{ $area->latitude }}', '{{ $area->longitude }}', '{{ $area->area }}', '{{ $area->speed_limit }}' ],
            @endforeach
        ];
    </script>

    <script type='text/javascript'
            src='http://www.bing.com/api/maps/mapcontrol?callback=GetMap&key=Arr8rRtGsDs4Wd5RmcwJlEBI9VeE7Zc00CfGaKhktcC87JwSfikFInKiVWRVVWKc' 
            async defer></script>
    
    <script type='text/javascript'>
     
     
    
    var icon = '<svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="21" height="32" viewBox="0 0 365 560" xml:space="preserve"><path fill="{color}" d="M182.9,551.7c0,0.1,0.2,0.3,0.2,0.3S358.3,283,358.3,194.6c0-130.1-88.8-186.7-175.4-186.9 C96.3,7.9,7.5,64.5,7.5,194.6c0,88.4,175.3,357.4,175.3,357.4S182.9,551.7,182.9,551.7z"/><circle cx="183" cy="183" r="150" fill="#17062b"/><text x="183" y="250" style="font-size:180px;font-family:arial;fill:#ffffff;" text-anchor="middle">{text}</text></svg>'

    var icon2 = '<svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="21" height="32" viewBox="0 0 365 560" xml:space="preserve"><path fill="{color}" d="M182.9,551.7c0,0.1,0.2,0.3,0.2,0.3S358.3,283,358.3,194.6c0-130.1-88.8-186.7-175.4-186.9 C96.3,7.9,7.5,64.5,7.5,194.6c0,88.4,175.3,357.4,175.3,357.4S182.9,551.7,182.9,551.7z"/><circle cx="183" cy="183" r="150" fill="#17062b"/><text x="183" y="250" style="font-size:180px;font-family:arial;fill:#ffffff;" text-anchor="middle">{text}</text></svg>'
    
    function GetMap() {
                var map = new Microsoft.Maps.Map('#myMap', {
                    center: new Microsoft.Maps.Location(10.297487, 123.896628),
                    zoom:15,
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

                for (let i = 0; i < location_map_area.length; i++) {
                    var pushpin2 = new Microsoft.Maps.Pushpin(new Microsoft.Maps.Location(location_map_area[i][0], location_map_area[i][1]), {
                        icon: icon2,	
                        anchor: new Microsoft.Maps.Point(10, 32),	
                        color: '#ff4d4d',
                        text: location_map_area[i][3], 
                        title: location_map_area[i][2], 
                        // subTitle: 'Subtitle',
                    });
                    map.entities.push(pushpin2);
                }
                
                
            }
            
    </script>
@endsection