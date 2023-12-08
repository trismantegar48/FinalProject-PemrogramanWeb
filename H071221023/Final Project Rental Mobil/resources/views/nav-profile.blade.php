<nav class="list-group">
    <a class="list-group-item {{ $title == 'User Profile' ? 'active' : ''}}" href="{{ route('user-profile', ['id1' => $user, 'id2' => $id_trans])}}"><i class=" fa fa-th"></i>Profile</a>
    {{-- {{ dd($id_trans) }} --}}
    <a class="list-group-item {{ $title == 'User Transaction' ? 'active' : ''}}" href="{{ route('user-transaksi',  ['id1' => $user, 'id2' => $id_trans])}}"><i class="fa fa-user"></i>Transaksi</a>
    <a class="list-group-item {{ $title == 'User Invoice' ? 'active' : ''}}" href="{{ route('user-invoice',  ['id1' => $user, 'id2' => $id_trans]) }}"><i class="fa fa-map"></i>Invoice</a>
    {{-- <a class="list-group-item" href="{{ route('logout') }} "><i class=""></i>Logout</a> --}}
</nav>
