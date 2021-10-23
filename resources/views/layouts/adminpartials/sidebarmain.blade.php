<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{route('beranda.index')}}" class="brand-link">
        <img src="/adminlte/img/doctor.png"
             alt="Doctor"
             class="brand-image img-circle elevation-3"
             style="opacity: .8">
        <span class="brand-text font-weight-light">Sistem Pakar</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="/adminlte/img/logoubg.png" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block">{{ Auth::user()->name }}</a>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
                     with font-awesome or any other icon font library -->
                <li class="nav-item">
                    <a href="{{route('beranda.index')}}" class="nav-link">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Beranda
                        </p>
                    </a>
                </li>

                <li class="nav-header">Data Master</li>
                <li class="nav-item">
                    <a href="{{route('pasien.index')}}" class="nav-link">
                        <i class="nav-icon fas fa-user"></i>
                        <p>
                            Pasien
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('penyakit.index')}}" class="nav-link">
                        <i class="nav-icon fas fa-procedures"></i>
                        <p>
                            Penyakit
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('gejala.index')}}" class="nav-link">
                        <i class="nav-icon fas fa-thermometer-three-quarters"></i>
                        <p>
                            Gejala
                        </p>
                    </a>
                </li>

                @if(Auth::user()->role == "Admin")
                <li class="nav-header">Penalaran</li>
                <li class="nav-item">
                    <a href="{{route('pertanyaan.index')}}" class="nav-link">
                        <i class="nav-icon fas fa-newspaper"></i>
                        <p>
                            Pertanyaan
                        </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{route('kaidah_produksi.index')}}" class="nav-link">
                        <i class="nav-icon fas fa-cogs"></i>
                        <p>
                            Kaidah Produksi
                        </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{route('diagnosa.index')}}" class="nav-link">
                        <i class="nav-icon fas fa-x-ray"></i>
                        <p>
                            Diagnosa
                        </p>
                    </a>
                </li>

                {{-- <li class="nav-item">
                    <a href="{{route('solusi.index')}}" class="nav-link">
                        <i class="nav-icon fas fa-wave-square"></i>
                        <p>
                            Solusi Penyakit
                        </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{route('hasil_konsultasi.index')}}" class="nav-link">
                        <i class="nav-icon fas fa-layer-group"></i>
                        <p>
                            Hasil Konsultasi
                        </p>
                    </a>
                </li> --}}
                    @endif

            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
