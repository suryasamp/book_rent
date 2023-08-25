<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('storage/img/logo.png') }}">
    <link rel="icon" type="image/png" href="{{ asset('storage/img/logo.png') }}">

    <!--     Fonts and icons     -->
    <link rel="stylesheet" type="text/css"
        href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />

    <!-- Nucleo Icons -->
    {{-- <link href="./assets/css/nucleo-icons.css" rel="stylesheet" /> --}}
    <link href="{{ asset('storage/css/nucleo-icons.css') }}" rel="stylesheet" />

    {{-- <link href="./assets/css/nucleo-svg.css" rel="stylesheet" /> --}}
    <link href="{{ asset('storage/css/nucleo-svg.css') }}" rel="stylesheet" />

    <!-- Font Awesome Icons -->
    {{-- <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script> --}}
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v6.0.0-beta3/css/all.css">

    <!-- Material Icons -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">

    <!-- CSS Files -->
    {{-- <link id="pagestyle" href="./assets/css/material-dashboard.css?v=3.1.0" rel="stylesheet" /> --}}
    <link id="pagestyle" href="{{ asset('storage/css/material-dashboard.css') }}" rel="stylesheet" />

    <title>Book Rent | @yield('title')</title>

</head>

<body class="g-sidenav-show bg-gray-200">
    <aside
        class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3 bg-dark"
        id="sidenav-main">
        <div class="sidenav-header d-flex align-items-center">
            <i class="fas fa-times p-3 cursor-pointer text-white opacity-5 position-absolute end-0 top-0 d-none d-xl-none"
                aria-hidden="true" id="iconSidenav"></i>
            <a class="m-0 bg-dark d-flex align-items-center" href="#">
                <img src="{{ asset('storage/img/logo.png') }}" class="w-20 h-20 m-4" alt="main_logo">
                <span class="fw-bold fs-4 pt-2 text-white">Book Rent</span>
            </a>
        </div>


        <hr class="horizontal light mt-0 mb-2">

        <div class="collapse navbar-collapse w-auto" id="sidenav-collapse-main">
            <ul class="navbar-nav">
                @if (Auth::User()->role_id == 1)
                    <li class="nav-item">
                        <a class="nav-link text-white {{ Request::is('dashboard') ? 'active bg-primary' : '' }}"
                            href="/dashboard">
                            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                                <i class="material-icons opacity-10">dashboard</i>
                            </div>
                            <span class="nav-link-text ms-1">Dashboard</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white {{ Request::is('book') ? 'active bg-primary' : '' }}"
                            href="/book">
                            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                                <i class="material-icons opacity-10">menu_book</i>
                            </div>
                            <span class="nav-link-text ms-1">Books</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white {{ Request::is('categories') ? 'active bg-primary' : '' }}"
                            href="/categories">
                            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                                <i class="material-icons opacity-10">category</i>
                            </div>
                            <span class="nav-link-text ms-1">Categories</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white {{ Request::is('rentLog') ? 'active bg-primary' : '' }}"
                            href="/rentLog">
                            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                                <i class="material-icons opacity-10">list_alt</i>
                            </div>
                            <span class="nav-link-text ms-1">Rent Log</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white {{ Request::is('user') ? 'active bg-primary' : '' }}"
                            href="/user">
                            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                                <i class="material-icons opacity-10">group</i>
                            </div>
                            <span class="nav-link-text ms-1">Users</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white {{ Request::is('profile') ? 'active bg-primary' : '' }}"
                            href="/profile">
                            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                                <i class="material-icons opacity-10">person</i>
                            </div>
                            <span class="nav-link-text ms-1">Profile</span>
                        </a>
                    </li>
                @else
                    <li class="nav-item">
                        <a class="nav-link text-white {{ Request::is('dashboard') ? 'active bg-primary' : '' }}"
                            href="/dashboard">
                            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                                <i class="material-icons opacity-10">dashboard</i>
                            </div>
                            <span class="nav-link-text ms-1">Dashboard</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white {{ Request::is('book') ? 'active bg-primary' : '' }}"
                            href="/book">
                            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                                <i class="material-icons opacity-10">menu_book</i>
                            </div>
                            <span class="nav-link-text ms-1">Books</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white {{ Request::is('profile') ? 'active bg-primary' : '' }}"
                            href="/profile">
                            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                                <i class="material-icons opacity-10">person</i>
                            </div>
                            <span class="nav-link-text ms-1">Profile</span>
                        </a>
                    </li>
                @endif

            </ul>
        </div>
    </aside>
    <main class="main-content border-radius-lg ">
        <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur"
            data-scroll="true">
            <div class="container-fluid py-1 px-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
                        <li class="nav-item d-xl-none ps-3 d-flex align-items-center">
                            <a href="javascript:;" class="nav-link text-body p-0" id="iconNavbarSidenav">
                                <div class="sidenav-toggler-inner">
                                    <i class="sidenav-toggler-line"></i>
                                    <i class="sidenav-toggler-line"></i>
                                    <i class="sidenav-toggler-line"></i>
                                </div>
                            </a>
                        </li>
                        <li class="breadcrumb-item text-sm ps-4"><a class="opacity-5 text-dark"
                                href="/dashboard">Pages</a>
                        </li>
                        <li class="breadcrumb-item text-sm text-dark active" aria-current="page">@yield('submenu')
                        </li>
                    </ol>
                </nav>
                <ul class="navbar-nav justify-content-end">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Settings
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li>
                                <hr class="dropdown-divider bg-gray-300">
                            </li>
                            <li>
                                <a href="/logout" class="dropdown-item">
                                    <div class="text-dark d-flex">
                                        <i class="material-icons ps-1">logout</i>
                                        <span class="nav-link-text ms-2 fw-bold">Logout</span>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </nav>

        <div class="container-fluid pt-4">
            <div class="row">
                @yield('content')
            </div>
        </div>

    </main>

    <!--   Core JS Files   -->
    {{-- <script src="./assets/js/core/popper.min.js"></script> --}}
    <script src="{{ asset('storage/js/core/popper.min.js') }}"></script>

    {{-- <script src="./assets/js/core/bootstrap.min.js"></script> --}}
    <script src="{{ asset('storage/js/core/bootstrap.min.js') }}"></script>

    {{-- <script src="./assets/js/plugins/perfect-scrollbar.min.js"></script> --}}
    <script src="{{ asset('storage/js/plugins/perfect-scrollbar.min.js') }}"></script>

    {{-- <script src="./assets/js/plugins/smooth-scrollbar.min.js"></script> --}}
    <script src="{{ asset('storage/js/plugins/smooth-scrollbar.min.js') }}"></script>

    {{-- <script src="../assets/js/material-dashboard.min.js?v=3.1.0"></script> --}}
    <script src="{{ asset('storage/js/material-dashboard.min.js') }}"></script>
</body>

</html>
