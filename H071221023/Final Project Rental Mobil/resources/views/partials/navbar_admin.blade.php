{{-- Header --}}

<body>
    <header id="header" class="header fixed-top d-flex align-items-center">
        <div class="d-flex align-items-center justify-content-between"> <a href="#"
                class="logo d-flex align-items-center"> <img src="/image/logo.png" alt=""> <span
                    class="d-none d-lg-block">Sarfaraz Rent Car</span> </a>
            <i class="bi bi-list toggle-sidebar-btn"></i>
        </div>
        <nav class="header-nav ms-auto">
            <ul class="d-flex align-items-center">
                <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
                    <img src="{{ asset('image/admin.jpg')}}" alt="Profile" class="rounded-circle"> <span
                        class="d-none d-md-block dropdown-toggle ps-2">Admin</span> </a>
                <li class="nav-item dropdown pe-3">
                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
                        <li class="dropdown-header">
                            <h6>Sarfaraz Rent Car</h6>
                            <span>Admin</span>
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li> <a class="dropdown-item d-flex align-items-center" href="/setting"> <i
                                    class="bi bi-person"></i> <span>About Us</span> </a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li> <a class="dropdown-item d-flex align-items-center" href="{{ route('logout') }}"> <i
                                    class="bi bi-box-arrow-right"></i> <span>Sign Out</span> </a></li>
                    </ul>
                </li>
            </ul>
        </nav>
    </header>


</body>
