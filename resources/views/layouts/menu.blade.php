<ul class="navbar-nav">
    @if(!(Auth::user()->is_admin == 1))
        <li class="nav-item active dropdown">
            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">
                Jember
                <i class="ion-chevron-down"></i>
            </a>
            <div class="dropdown-menu" role="menu">
                <a class="dropdown-item" href="/page/sejarah">Sejarah</a>
                <a class="dropdown-item" href="/page/geografi">Geografi</a>
                <a class="dropdown-item" href="/page/penduduk">Penduduk</a>
                <a class="dropdown-item" href="/page/pendidikan">Pendidikan</a>
            </div>
        </li>
        <li class="nav-item dropdown">
            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">
                Kanker Servik
                <i class="ion-chevron-down"></i>
            </a>
            <div class="dropdown-menu" role="menu">
                <a class="dropdown-item" href="/page/etiologi">Etiologi</a>
                <a class="dropdown-item" href="/page/epidemiologi">Epidemiologi</a>
                <a class="dropdown-item" href="/page/patofisiologi">Patofisiologi</a>
                <a class="dropdown-item" href="/page/pencegahan-dan-pemeriksaan">Pencegahan dan Pemeriksaan</a>
            </div>
        </li>
    @else
        <li class="nav-item dropdown dropdown-extend">
            <a class="nav-link" href="/admin/question">Pertanyaan</a>
        </li>
        <li class="nav-item dropdown dropdown-extend">
            <a class="nav-link" href="/admin/page">Halaman</a>
        </li>
    @endif
    @if(Auth::check())
        @if(Auth::user()->is_admin == 0)
            <li class="nav-item dropdown dropdown-extend">
                <a href="/app" class="nav-link">
                    Deteksi Dini
                </a>

            </li>
        @endif
        <li class="nav-item dropdown">
            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">
                {{Auth::user()->name}}
                <i class="ion-chevron-down"></i>
            </a>
            <div class="dropdown-menu" role="menu">
                <a class="dropdown-item" href="/logout">Logout</a>
            </div>
        </li>
    @endif

    @if(Auth::guest())
        <li class="nav-item dropdown dropdown-extend">
            <a href="/login" class="nav-link">
                Login
            </a>

        </li>
        <li class="nav-item dropdown dropdown-extend">
            <a href="/register" class="nav-link">
                Register
            </a>

        </li>
    @endif

</ul>