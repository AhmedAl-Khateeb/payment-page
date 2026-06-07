<nav class="main-header navbar navbar-expand navbar-white navbar-light">

    <!-- Left -->
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#">
                <i class="fas fa-bars"></i>
            </a>
        </li>
    </ul>

    <!-- Center Icons -->
    <ul class="navbar-nav mx-auto">
        <li class="nav-item dropdown mx-2">
            <a class="nav-link" data-toggle="dropdown" href="#">
                <i class="far fa-bell"></i>
                <span class="badge badge-warning navbar-badge">15</span>
            </a>
        </li>

        <li class="nav-item dropdown mx-2">
            <a class="nav-link" data-toggle="dropdown" href="#">
                <i class="far fa-comments"></i>
                <span class="badge badge-danger navbar-badge">3</span>
            </a>
        </li>
    </ul>

    <!-- Right -->
    <ul class="navbar-nav">
        <li class="nav-item dropdown">
            <a class="nav-link" data-toggle="dropdown" href="#">
                <i class="fas fa-globe"></i>
            </a>

            <div class="dropdown-menu dropdown-menu-right">
                <a class="dropdown-item"
                    href="{{ LaravelLocalization::getLocalizedURL('en') }}">
                    English
                </a>

                <a class="dropdown-item"
                    href="{{ LaravelLocalization::getLocalizedURL('ar') }}">
                    العربية
                </a>
            </div>
        </li>

        <li class="nav-item">
            <form action="{{ route('admin.logout') }}" method="POST" class="mb-0">
                @csrf
                <button type="submit" class="btn btn-link nav-link border-0">
                    <i class="fas fa-power-off text-danger"></i>
                </button>
            </form>
        </li>
    </ul>

</nav>