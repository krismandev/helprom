<header>
    <nav class="navbar navbar-expand-lg navigation" id="navbar" style="background-color: rgb(243, 92, 36)">
        <div class="container">
            <a class="navbar-brand" href="index.html">
                <img src="{{ url('') }}/asset_dashboard/images/logo.png" alt="" class="img-fluid"
                    width="50px">
                <h5 class="d-inline">Helprom</h5>
            </a>

            <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarmain"
                aria-controls="navbarmain" aria-expanded="false" aria-label="Toggle navigation">
                <span class="icofont-navigation-menu"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarmain">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="index.html">Beranda</a>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="department.html" id="dropdown02"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Kelompok Kerja<i
                                class="icofont-thin-down"></i></a>
                        <ul class="dropdown-menu" style="width: fit-content" aria-labelledby="dropdown02">
                            @foreach ($categories as $item)
                                <li><a class="dropdown-item" href="department.html">{{ $item->name }}</a></li>
                            @endforeach
                            {{-- <li><a class="dropdown-item" href="department-single.html">Department Single</a></li> --}}
                        </ul>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="doctor.html" id="dropdown03" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">Tentang Kami <i
                                class="icofont-thin-down"></i></a>
                        <ul class="dropdown-menu" aria-labelledby="dropdown03">
                            <li><a class="dropdown-item" href="doctor.html">Pengurus</a></li>
                            <li><a class="dropdown-item" href="doctor-single.html">Tentang HPU</a></li>
                            {{-- <li><a class="dropdown-item" href="appoinment.html">Appoinment</a></li> --}}
                        </ul>
                    </li>
                    {{-- <li class="nav-item"><a class="nav-link" href="about.html">About</a></li>
                    <li class="nav-item"><a class="nav-link" href="service.html">Services</a></li> --}}

                    {{-- <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="blog-sidebar.html" id="dropdown05"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Blog <i
                                class="icofont-thin-down"></i></a>
                        <ul class="dropdown-menu" aria-labelledby="dropdown05">
                            <li><a class="dropdown-item" href="blog-sidebar.html">Blog with Sidebar</a></li>

                            <li><a class="dropdown-item" href="blog-single.html">Blog Single</a></li>
                        </ul>
                    </li> --}}
                    <li class="nav-item"><a class="nav-link" href="contact.html">Kontak</a></li>
                    <li class="nav-item"><a class="nav-link" href="/login">Login</a></li>
                </ul>
            </div>
        </div>
    </nav>
</header>
