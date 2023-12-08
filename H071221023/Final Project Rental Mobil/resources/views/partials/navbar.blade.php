{{-- Navbar --}}

<body>
    <div class="oleez-loader"></div>
    <header class="oleez-header">
        <nav class="navbar navbar-expand-lg navbar-light">
            <a class="navbar-brand ml-5" href="/"> <img src="/image/logo.png" width="30px" alt="logo">
                <strong> SARFARAZ <span class="text-danger">Rent Car</span></strong></a>
            <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#oleezMainNav"
                aria-controls="oleezMainNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="oleezMainNav">
                <ul class="navbar-nav mx-auto mt-2">
                    <li class="nav-item ">
                        <a class="nav-link  {{ $title === 'Home' ? 'active' : '' }}" href="/">Home <span
                                class="sr-only"></span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link  {{ $title === 'Katalog' ? 'active' : '' }}" href="/katalog">Katalog</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link  {{ $title === 'Testimoni' ? 'active' : '' }}"
                            href="/testimoni">Testimoni</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link  {{ $title === 'About Us' ? 'active' : '' }}" href="/aboutus">About Us</a>
                        {{-- {{Session()->get('fullname', '')}} --}}
                    </li>
                    {{-- @if (session()->has('username'))
                        <li class="nav-item">
                            <a class="nav-link  {{ $title === 'Profile' ? 'active' : '' }}" href="/profile">Profile</a>
                        </li>
                    @endif --}}
                    <li class="nav-item">
                        @if (session()->has('username'))
                            <div class="d-flex">

                                <a href="{{ route('user-profile', ['id1' => Session()->get('id', ''), 'id2' => '1']) }} " class="mt-2 ms-2">
                                    Welcome, {{ Session()->get('username', '') }}
                                    {{-- Welcome,{{ Session()->get('id', '') }} --}}
                                </a>
                                <a class="nav-item btn btn-primary text-white tombol ml-5" href="{{ route('logout') }}"
                                    role="button">Logout</a>
                            </div>
                        @else
                            <a class="nav-item btn btn-primary text-white tombol" href="/login"
                                role="button">Login</a>
                        @endif
                    </li>

                </ul>
            </div>
        </nav>
    </header>
</body>
