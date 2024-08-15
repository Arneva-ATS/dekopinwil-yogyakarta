<header class="header sticky-bar {{ (request()->routeIs(['profil', 'pengurus','berita', 'kontak', 'agenda', 'galeri', 'demografi', 'notaris']) || isset($exception)) ? 'header-style-2 header-style-4' : '' }}">
    <div class="container">
        <div class="main-header">
            <div class="header-left">
                <div class="header-logo"><a class="d-flex" href="{{ route('profil') }}"><img alt="" src="{{ asset('assets/imgs/Logo-Koperasi.png') }}" width="100"></a></div>
                <div class="header-nav">
                    <nav class="nav-main-menu d-none d-xl-block">
                        <ul class="main-menu">
                            <li class="has-children"><a class="{{ request()->routeIs('profil') ? 'active' : '' }}" href="{{ route('profil') }}">Profil</a></li>
                            <li class="has-children"><a class="{{ request()->routeIs('beranda') ? 'active' : '' }}" href="{{ route('pengurus') }}">Pengurus</a></li>
                            <li class="has-children"><a class="{{ request()->routeIs('demografi') ? 'active' : '' }}" href="{{ route('demografi') }}">Demografi</a></li>
                            <li class="has-children"><a class="{{ request()->routeIs('agenda') ? 'active' : '' }}" href="{{ route('agenda') }}">Agenda</a></li>
                            <li class="has-children"><a class="{{ request()->routeIs('galeri') ? 'active' : '' }}" href="{{ route('galeri') }}">Galeri</a></li>
                            <li class="has-children"><a class="{{ request()->routeIs('berita') ? 'active' : '' }}" href="{{ route('berita') }}">Berita</a></li>
                            <li class="has-children"><a class="{{ request()->routeIs('berita') ? 'active' : '' }}" href="{{ route('notaris') }}">Notaris</a></li>
                            <li class="has-children"><a class="{{ request()->routeIs('kontak') ? 'active' : '' }}" href="{{ route('kontak') }}">Kontak</a></li>
                        </ul>
                    </nav>
                </div>
            </div>

            <div class="header-right">
                <div class="burger-icon burger-icon-white"><span class="burger-icon-top"></span><span class="burger-icon-mid"></span><span class="burger-icon-bottom"></span></div>
            </div>
        </div>
    </div>
</header>
