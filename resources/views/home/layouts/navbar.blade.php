<nav id="navbar" class="navbar">
    <ul>
      <li><a class="active " href="/">Home</a></li>
      <li><a href="{{ route('profile') }}">Profile</a></li>
      <li class="dropdown"><a href="#"><span>Jurusan</span> <i class="bi bi-chevron-down"></i></a>
        <ul>
          <li><a href="#">Akuntansi dan Keuangan Lembaga</a></li>
          <li><a href="#">Teknik Komputer Jaringan dan Telekomunikasi</a></li>
          <li><a href="#">Desain Komunikasi Visual</a></li>
          <li><a href="#">Asisten Keperawatan</a></li>
        </ul>
      </li>
      <li><a href="pricing.html">Eskul</a></li>
      <li><a href="blog.html">Berita</a></li>
      
      <li><a href="contact.html">Contact Us</a></li>
      <li><a href="{{ route('login') }}"><i class="fa fa-user"></i> Login</a></li>
    </ul>
    <i class="bi bi-list mobile-nav-toggle"></i>
  </nav>