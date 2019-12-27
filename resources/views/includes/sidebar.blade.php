
<div class="sidebar">
    <nav class="sidebar-nav">
        <ul class="nav">
            <li class="nav-item">
                <a class="nav-link" href="{{ route('dashboard.index') }}">
                    <i class="nav-icon icon-home"></i> Dashboard
                </a>
            </li>

            <li class="nav-item nav-dropdown">
                <a class="nav-link" href="{{ route('clients.index') }}">
                    <i class="nav-icon icon-people"></i> Clients
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="{{ route('vehicles.index') }}">
                    <i class="nav-icon fa fa-car"></i> Vehicles
                </a>
            </li>

            <li class="nav-item nav-dropdown">
                <a class="nav-link" href="{{ route('records.index') }}">
                    <i class="nav-icon fa fa-file-o"></i> Records
                </a>
            </li>

            <li class="nav-item nav-dropdown">
                <a class="nav-link" href="{{ route('maps.index') }}">
                    <i class="nav-icon fa fa-map-marker"></i> Maps
                </a>
            </li>
        </ul>
    </nav>

    <button class="sidebar-minimizer brand-minimizer" type="button"></button>
</div>