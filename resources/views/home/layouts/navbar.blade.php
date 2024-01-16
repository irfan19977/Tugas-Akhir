<nav id="navbar" class="navbar">
    <ul>
      <li><a class="{{ Request::path() === '/' ? 'active' : '' }}" href="/"><strong>Home</strong></a></li>
      <li ><a class="{{ Request::is('profile') ? 'active' : ''}}" href="{{ route('profile') }}"><strong>Profile</strong></a></li>
      <li class="dropdown"><a class="{{ Request::is('ak', 'tkj', 'dkv', 'asper') ? 'active' : ''}}"><span><strong>Jurusan</strong></span> <i class="bi bi-chevron-down"></i></a>
        <ul>
          <li ><a href="{{ route('ak') }}">Akuntansi dan Keuangan Lembaga</a></li>
          <li><a href="{{ route('tkj') }}">Teknik Komputer dan Jaringan </a></li>
          <li><a href="{{ route('dkv') }}">Desain Komunikasi Visual</a></li>
          <li><a href="{{ route('asper') }}">Asisten Keperawatan</a></li>
        </ul>
      </li>
      <li><a href="#"><strong>Eskul</strong></a></li>
      <li><a class="{{ Request::is('berita') ? 'active' : ''}}" href="{{ route('berita') }}"><strong>Berita</strong></a></li>
      
      <li><a href="contact.html"><strong>Contact Us</strong></a></li>
      <li><a href="{{ route('login') }}"><strong>Login</strong></a></li>
    </ul>
    <i class="bi bi-list mobile-nav-toggle"></i>
  </nav>