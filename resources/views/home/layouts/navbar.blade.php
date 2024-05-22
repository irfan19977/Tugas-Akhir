<nav id="navbar" class="navbar">
    <ul>
      <li><a class="{{ Request::path() === '/' ? 'active' : '' }}" href="/">Home</a></li>
      <li ><a class="{{ Request::is('profile') ? 'active' : ''}}" href="{{ route('profile') }}">Profil</a></li>
      <li class="dropdown"><a class="{{ Request::is('akuntansi-dan-keuangan-lembaga', 'teknik-komputer-dan-jaringan', 'design-komunikas-visual', 'asisten-keperawatan') ? 'active' : ''}}"><span>Jurusan</span> <i class="bi bi-chevron-down"></i></a>
        <ul>
          <li ><a href="{{ route('ak') }}">Akuntansi </a></li>
          <li><a href="{{ route('tkj') }}">Teknik Komputer dan Jaringan </a></li>
          <li><a href="{{ route('dkv') }}">Desain Komunikasi Visual</a></li>
          <li><a href="{{ route('asper') }}">Asisten Keperawatan</a></li>
        </ul>
      </li>
      <li><a class="{{ Request::is('eskul') ? 'active' : ''}}" href="{{ route('eskul') }}">Ekstrakurikuler</a></li>
      <li><a class="{{ Request::is('berita') ? 'active' : ''}}" href="{{ route('berita') }}">Berita</a></li>      
      <li><a class="{{ Request::is('contact') ? 'active' : ''}}" href="{{ route('contact') }}">Contact Us</a></li>
      <li><a href="{{ route('login') }}">Login</a></li>
    </ul>
    <i class="bi bi-list mobile-nav-toggle"></i>
  </nav>