<!--Header-->
<header class="app-header navbar pr-4">
    <button class="navbar-toggler sidebar-toggler d-lg-none mr-auto" type="button" data-toggle="sidebar-show">
        <span class="navbar-toggler-icon"></span>
    </button>

    <a class="navbar-brand" href="#">
        <img class="navbar-brand-full" src="{{ asset('dist/img/brand/voad.svg') }}" width="89" height="25" alt="CoreUI Logo">
        <img class="navbar-brand-minimized" src="{{ asset('dist/img/brand/sygnet.svg') }}" width="30" height="30" alt="CoreUI Logo">
    </a>

    <button class="navbar-toggler sidebar-toggler d-md-down-none" type="button" data-toggle="sidebar-lg-show">
        <span class="navbar-toggler-icon"></span>
    </button>

    <ul class="nav navbar-nav d-md-down-none">
        <li class="nav-item px-3">
            {{-- <div class="input-group">
                <input class="form-control" id="appendedInputButton" size="16" type="text" placeholder="Search">
                <span class="input-group-append">
                    <button class="btn btn-secondary" type="button">Go</button>
                </span>
            </div> --}}
        </li>
    </ul>
    
    <ul class="nav navbar-nav ml-auto">
        
        <li class="nav-item dropdown">
        <a class="nav-link nav-link" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
            <img class="img-avatar" src="{{ asset('dist/img/avatars/img-avat.png') }}" alt="admin@bootstrapmaster.com"><span class="caret"></span>
        </a>
        <div class="dropdown-menu dropdown-menu-right">
            <div class="dropdown-header text-center">
                <strong>Admin</strong>
            </div>

            <a class="dropdown-item" href="#">
                <i class="fa fa-wrench"></i> Settings
            </a>
            <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                <i class="fa fa-lock"></i> Logout
            </a>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>

        </div>
        </li>
    </ul>
</header>