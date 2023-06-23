<div class="app-menu">

    <!-- Brand Logo -->
    <div class="logo-box">
        <!-- Brand Logo Light -->
        <a href="{{route('home')}}" class="logo-light">
            <img src="{{ asset('/') }}assets/images/BIRU-SILAPAK.png" alt="PAK" width="100">
            {{-- <img src="{{ asset('/') }}assets/images/logo-sm.png" alt="small logo" class="logo-sm"> --}}
            {{-- <h2>PAK</h2> --}}
        </a>

        <!-- Brand Logo Dark -->
        <a href="{{route('home')}}" class="logo-dark">
            {{-- <h2 class="logo-sm" style="color: #0088D5">PAK</h2> --}}
            <img src="{{ asset('/') }}assets/images/BIRU-SILAPAK.png" alt="PAK" width="100" class="logo-xl">
            {{-- <img src="{{ asset('/') }}assets/images/logo-sm.png" alt="small logo" class="logo-sm"> --}}
        </a>
    </div>

    <!-- menu-left -->
    <div class="scrollbar">

        <!--- Menu -->
        <ul class="menu">

            <li class="menu-title">Menu</li>
            <li class="menu-item">
                <a href="{{route('home')}}" class="menu-link">
                    <span class="menu-icon"><i data-feather="home"></i></span>
                    <span class="menu-text"> Home </span>
                </a>
            </li>
            <li class="menu-item">
                <a href="{{route('pak.index')}}" class="menu-link">
                    <span class="menu-icon"><i data-feather="book"></i></span>
                    <span class="menu-text"> PAK </span>
                </a>
            </li>
            {{-- <li class="menu-item">
                <a href="#" class="menu-link">
                    <span class="menu-icon"><i data-feather="printer"></i></span>
                    <span class="menu-text"> Cetak </span>
                </a>
            </li>
            <li class="menu-item">
                <a href="#" class="menu-link">
                    <span class="menu-icon"><i data-feather="trending-up"></i></span>
                    <span class="menu-text"> Statistik </span>
                </a>
            </li>
            <li class="menu-item">
                <a href="#" class="menu-link">
                    <span class="menu-icon"><i data-feather="download"></i></span>
                    <span class="menu-text"> Unduh </span>
                </a>
            </li> --}}

            @role('admin')
            {{-- Data --}}
            <li class="menu-title">Data</li>

            <li class="menu-item">
                <a href="{{route('pangkat.index')}}" class="menu-link">
                    <span class="menu-icon"><i data-feather="check-circle"></i></span>
                    <span class="menu-text"> Pangkat </span>
                </a>
            </li>
            <li class="menu-item">
                <a href="{{route('jabatan.index')}}" class="menu-link">
                    <span class="menu-icon"><i data-feather="check-circle"></i></span>
                    <span class="menu-text"> Jabatan </span>
                </a>
            </li>
            <li class="menu-item">
                <a href="{{route('unsur.index')}}" class="menu-link">
                    <span class="menu-icon"><i data-feather="check-circle"></i></span>
                    <span class="menu-text"> Unsur </span>
                </a>
            </li>
            <li class="menu-item">
                <a href="{{route('jenisGuru.index')}}" class="menu-link">
                    <span class="menu-icon"><i data-feather="check-circle"></i></span>
                    <span class="menu-text"> Jenis Guru </span>
                </a>
            </li>
            <li class="menu-item">
                <a href="{{route('tendik.index')}}" class="menu-link">
                    <span class="menu-icon"><i data-feather="check-circle"></i></span>
                    <span class="menu-text"> Tendik </span>
                </a>
            </li>
            <li class="menu-item">
                <a href="{{route('user.index')}}" class="menu-link">
                    <span class="menu-icon"><i data-feather="check-circle"></i></span>
                    <span class="menu-text"> User </span>
                </a>
            </li>
            @endrole

            {{-- Referensi --}}
            {{-- <li class="menu-title">Referensi</li>

            <li class="menu-item">
                <a href="#" class="menu-link">
                    <span class="menu-icon"><i data-feather="clipboard"></i></span>
                    <span class="menu-text"> Angka Kredit </span>
                </a>
            </li>
            <li class="menu-item">
                <a href="#" class="menu-link">
                    <span class="menu-icon"><i data-feather="user"></i></span>
                    <span class="menu-text"> Akun </span>
                </a>
            </li>
            <li class="menu-item">
                <a href="#" class="menu-link">
                    <span class="menu-icon"><i class="icon-question"></i></span>
                    <span class="menu-text"> FAQ </span>
                </a>
            </li> --}}

        </ul>
        <!--- End Menu -->
        <div class="clearfix"></div>
    </div>
</div>
