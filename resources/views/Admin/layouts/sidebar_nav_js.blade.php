<body>

    <div class="d-flex" id="wrapper">
        <!-- Sidebar-->
        <div class="border-end bg-white" id="sidebar-wrapper">
            <div class="sidebar-heading border-bottom bg-light"><h4 class="text-primary m-0"><i class="fa fa-utensils me-3"></i>Restoran</h4></div>
            <div class="list-group list-group-flush">
                <a class="list-group-item list-group-item-action list-group-item-light p-3" href="{{route('Admin.dashboard')}}">Dashboard</a>
                <a class="list-group-item list-group-item-action list-group-item-light p-3" href="{{route('Account.index')}}">Accounts</a>
                <a class="list-group-item list-group-item-action list-group-item-light p-3" href="{{route('Menu.index')}}">Menu</a>
                <a class="list-group-item list-group-item-action list-group-item-light p-3" href="{{route('Team.index')}}">Team</a>

                <x-responsive-nav-link :href="route('profile.edit')">
                    <a class="list-group-item list-group-item-action list-group-item-light p-3" href="{{route('profile.edit')}}">{{ __('Profile') }}</a>
                </x-responsive-nav-link>

                <form method="POST" action="{{ route('logout') }}">
                    @csrf

                    <x-responsive-nav-link :href="route('logout')"
                            onclick="event.preventDefault();
                                        this.closest('form').submit();">
                        <h6 class="list-group-item list-group-item-action list-group-item-light p-3">{{ __('Log Out') }}</h6>
                    </x-responsive-nav-link>
                </form>
            </div>
        </div>
        <!-- Page content wrapper-->
        <div id="page-content-wrapper">
            <!-- Top navigation-->
            
            <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
                <div class="container-fluid">
            
                    @yield('button')

                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ms-auto mt-2 mt-lg-0">
                            <li class="nav-item active"><a class="nav-link" href="{{route('/')}}">Home</a></li>
                            <li class="nav-item"><a class="nav-link" href="#!">Link</a></li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown</a>
                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="#!">Action</a>
                                    <a class="dropdown-item" href="#!">Another action</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="#!">Something else here</a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            <!-- Page content-->
            <div class="container-fluid">
                
                @yield('content')

            </div>
        </div>
    </div>
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="{{ asset('assets/admin/js/scripts.js') }}"></script>

    <!-- استبدال السكريبت الموجود -->
    <script>
        window.onload = function() {
            // تعطيل الـ Spinner بعد تحميل جميع ملفات CSS والمحتوى
            document.getElementById('spinner').style.display = 'none';
        };
    </script>


    @yield('js')
</body>