<body>
    <aside id="sidebar" class="sidebar">
        <ul class="sidebar-nav" id="sidebar-nav">
            <li class="nav-item">
                <a class="nav-link {{ $title == 'Dashboard' ? 'active' : 'collapsed' }}" href="{{ route('dashboard') }} ">
                    <i class="bi bi-grid">
                    </i> <span> Dashboard</span> </a>
            </li>

            <li class="nav-item">
                <a class="nav-link {{ $title == 'Users' ? 'active' : 'collapsed' }}" href="{{ route('user.index') }}"> <i
                        class="bi bi-person-lines-fill"> </i> <span> Users</span> </a>
            </li>

            <li class="nav-item">
                <a class="nav-link {{ $title == 'Transaction' ? 'active' : 'collapsed' }}"
                    href="{{ route('transaction.index') }}"> <i class="bi bi-receipt-cutoff"> </i> <span>
                        Transaction</span> </a>
            </li>

            <li class="nav-item">
                <a class="nav-link {{ $title == 'Cars' ? 'active' : 'collapsed' }}" href="{{ route('cars.index') }}"> <i
                        class="bx bx-car"> </i> <span> Cars</span> </a>
            </li>

            <li class="nav-item">
                <a class="nav-link {{ $title == 'Driver' ? 'active' : 'collapsed' }}"
                    href="{{ route('driver.index') }}"> <i class="bx bxs-user-badge"> </i> <span> Driver</span> </a>
            </li>

            <li class="nav-item">
                <a class="nav-link {{ $title == 'Testimoni' ? 'active' : 'collapsed' }}"
                    href="{{ route('testi.index') }}"> <i class="bx bx-comment-edit"> </i> <span> Testimoni</span> </a>
            </li>

            <li class="nav-item">
                <a class="nav-link  {{ $title == 'About Us' ? 'active' : 'collapsed' }}" href="/setting"> <i
                        class="bi bi-ui-checks"> </i> <span> About Us</span> </a>
            </li>
        </ul>
    </aside>
</body>
