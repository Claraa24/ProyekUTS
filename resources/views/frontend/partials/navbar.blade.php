<nav class="navbar navbar-expand-lg navbar-dark navbar-custom fixed-top shadow-sm">
    <div class="container">
      <a class="navbar-brand" style="color:rgb(14, 27, 39)"href="#"><img src="assets/img/wajahku.png" height= "40px" width="25px" /><span> Lala Beauty</span></a>
      <button
        class="navbar-toggler"
        type="button"
        data-bs-toggle="collapse"
        data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent"
        aria-expanded="false"
        aria-label="Toggle navigation"
      >
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link" style="color:rgb(14, 27, 39)"aria-current="page" href="#jumbotron"><i class="bi bi-house"></i> Beranda</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" style="color:rgb(14, 27, 39)" href="#about"><i class="bi bi-trophy"></i> About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" style="color:rgb(14, 27, 39)"href="#produk"><i class="bi bi-book"></i> Daftar Produk</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" style="color:rgb(14, 27, 39)" href="#contact" tabindex="-1" aria-disabled="true"
              ><i class="bi bi-telephone"></i> Hubungi Kami</a
            >
          </li>
        </ul>

        <ul class="navbar-nav ms-auto">
          @auth
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" 
            role="button" aria-expanded="false" style="color:rgb(14, 27, 39)">
            Welcome back, {{ auth()->user()->name }}
          </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="/dashboard"><i class="bi bi-layout-text-sidebar"></i> My Dashboard</a></li>
              <li><hr class="dropdown-divider"></li>
              <form action="/logout" method="post">
                @csrf
                <button type ="submit" class="dropdown-item"><i class="bi bi-box-arrow-right"></i> Logout </button>
              </form>
            </ul>
          </li>
   
          @else    
        
          <li class="nav-item">
            <a href="/login" class="nav-link" style="color:rgb(14, 27, 39)"><i class="bi bi-box-arrow-in-right"></i> Login</a>
          </li>
        </ul>

        @endauth
  </nav>