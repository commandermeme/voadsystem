<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>


    <!--styles-->
    <link href="{{ asset('dist/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('dist/vendors/pace-progress/css/pace.min.css') }}" rel="stylesheet">
    <link href="{{ asset('dist/vendors/datatables.net-bs4/css/dataTables.bootstrap4.css') }}" rel="stylesheet">
    <link href="{{ asset('dist/vendors/quill/css/quill.snow.css') }}" rel="stylesheet">
    <link href="{{ asset('dist/vendors/ion-rangeslider/css/ion.rangeSlider.min.css') }}" rel="stylesheet">

    <!--Icons-->
    {{-- <link href="{{ asset('css/font-awesome.min.css') }}" rel="stylesheet"> --}}
    <link href="{{ asset('dist/vendors/@coreui/icons/css/coreui-icons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('dist/vendors/flag-icon-css/css/flag-icon.min.css') }}" rel="stylesheet">
    <link href="{{ asset('dist/vendors/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('dist/vendors/simple-line-icons/css/simple-line-icons.css') }}" rel="stylesheet">
    
</head>
<body class="app header-fixed sidebar-fixed aside-menu-fixed sidebar-lg-show">
    @include('includes.header') 
    <div class="app-body">
        @include('includes.sidebar') 
        <main class="main">
            @yield('content')
        </main>
    </div>
    @include('includes.footer')  
    
    <!-- Bootstrap and necessary plugins-->
    <script src="{{ asset('dist/vendors/jquery/js/jquery.min.js') }}"></script>
    <script src="{{ asset('dist/vendors/popper.js/js/popper.min.js') }}"></script>
    <script src="{{ asset('dist/vendors/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('dist/vendors/pace-progress/js/pace.min.js') }}"></script>
    <script src="{{ asset('dist/vendors/perfect-scrollbar/js/perfect-scrollbar.min.js') }}"></script>
    <script src="{{ asset('dist/vendors/@coreui/coreui-pro/js/coreui.min.js') }}"></script>

    <!-- Plugins and scripts required by this view-->
    <script src="{{ asset('dist/vendors/chart.js/js/Chart.min.js') }}"></script>
    <script src="{{ asset('dist/vendors/@coreui/coreui-plugin-chartjs-custom-tooltips/js/custom-tooltips.min.js') }}"></script>
    <script src="{{ asset('dist/js/main.js') }}"></script>
    <script src="{{ asset('dist/vendors/datatables.net/js/jquery.dataTables.js') }}"></script>
    <script src="{{ asset('dist/vendors/datatables.net-bs4/js/dataTables.bootstrap4.js') }}"></script>
    <script src="{{ asset('dist/js/datatables.js') }}"></script>
    <script src="{{ asset('dist/vendors/quill/js/quill.min.js') }}"></script>
    <script src="{{ asset('dist/js/text-editor.js') }}"></script>
    <script src="{{ asset('dist/vendors/ion-rangeslider/js/ion.rangeSlider.min.js') }}"></script>
    <script src="{{ asset('dist/js/sliders.js') }}"></script>
    <script src="{{ asset('dist/js/google-maps.js') }}"></script>
    <script src="{{ asset('https://maps.googleapis.com/maps/api/js?callback=InitMap&amp;key=AIzaSyASyYRBZmULmrmw_P9kgr7_266OhFNinPA') }}"></script>
    <script src="{{ asset('dist/vendors/jquery-validation/js/jquery.validate.js') }}"></script>
    <script src="{{ asset('dist/js/validation.js') }}"></script>
    <script type='text/javascript' src='https://www.bing.com/api/maps/mapcontrol?key=Agvytz8jwxkgDtH0ZuwSPyWA6EIRC3XB08G3i2AfZWny6fHaYJ1EVt79UY9lRlxu'></script>
    <script type='text/javascript'>
        var map = null, infobox, dataLayer;

        function loadMapScenario() {
            map = new Microsoft.Maps.Map(document.getElementById('myMap'), {
                center: new Microsoft.Maps.Location(10.3157, 123.8854) });
            dataLayer = new Microsoft.Maps.EntityCollection();
            map.entities.push(dataLayer);
            
            map.setOptions({
            maxZoom: 18,
            minZoom: 13
        });
            var infoboxLayer = new Microsoft.Maps.EntityCollection();
            map.entities.push(infoboxLayer);
            infobox = new Microsoft.Maps.Infobox();
            infoboxLayer.push(infobox);
            addPinLocations();
        }

        function addPinLocations() {

            var speed1 = "25kpH";
            var pin1 = new Microsoft.Maps.Pushpin(new Microsoft.Maps.Location(10.299041, 123.881008), {
                color: 'red',
            });
            pin1.Title = "70 Meters from Labangon Elementary";
            pin1.Description = speed1;
            Microsoft.Maps.Events.addHandler(pin1, 'click', displayInfobox);
            dataLayer.push(pin1);

            var pin2 = new Microsoft.Maps.Pushpin(new Microsoft.Maps.Location(10.301798, 123.895952), {
                color: 'red'
            });
            pin2.Title = "100 Meters from Abellana National School";
            pin2.Description = "35kpH";
            Microsoft.Maps.Events.addHandler(pin2, 'click', displayInfobox);
            dataLayer.push(pin2);

            var pin3 = new Microsoft.Maps.Pushpin(new Microsoft.Maps.Location(10.307598, 123.894042), {
                color: 'red'
            });
            pin3.Title = "60 Meters from Crown Regency Hotel";
            pin3.Description = "30kpH";
            Microsoft.Maps.Events.addHandler(pin3, 'click', displayInfobox);
            dataLayer.push(pin3);

            var pin4 = new Microsoft.Maps.Pushpin(new Microsoft.Maps.Location(10.327489, 123.906383), {
                color: 'red'
            });
            pin4.Title = "IT Park";
            pin4.Description = "20kpH";
            Microsoft.Maps.Events.addHandler(pin4, 'click', displayInfobox);
            dataLayer.push(pin4);
        }

        function displayInfobox(e){
            if (e.targetType == 'pushpin') {
                infobox.setLocation(e.target.getLocation());
                        
                infobox.setOptions({
                    visible: true,
                    title: e.target.Title,
                    description: e.target.Description
                });
                }
        }
    </script>

</body>
</html>
