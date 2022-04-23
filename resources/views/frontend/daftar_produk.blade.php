<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" />

    <link rel="shortcut icon" href="img/iconfix.png" />

    <!-- aos js -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />

    <!-- MY CSS-->
    <link href="assets/style.css" rel="stylesheet" />

    <title>Daftar Produk</title>
  </head>
  <body>
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
              <a class="nav-link" style="color:rgb(14, 27, 39)"aria-current="page" href="/"><i class="bi bi-house"></i> Beranda</a>
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
                <li><a class="dropdown-item" href="#"><i class="bi bi-box-arrow-right"></i> Logout</a></li>
              </ul>
            </li>
     
            @else    
          
            <li class="nav-item">
              <a href="/login" class="nav-link" style="color:rgb(14, 27, 39)"><i class="bi bi-box-arrow-in-right"></i> Login</a>
            </li>
          </ul>
  
          @endauth
    </nav>
    
<section id="produk" class="pelajaran p-5">
  <div class="container">
    <div class="row">
      <div class="col">
        <section class="py-5 text-left container">
          <div class="row py-lg-2">
            <div class="col-lg col-md me-auto">
              <h1 class="fw-light">Daftar Produk</h1>
              <p class="lead text-muted">Tidak perlu bayar jutaan rupiah untuk dapatkan wajah cantik dan sehat.</p>
            </div>
          </div>
          <a class="btn btn-orange p-2 text-white" href="/daftar_produk">Produk lainnya</a>
        </section>

        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-4 g-3 justify-content-around">
          @foreach ($products as $p)
              
          <div class="col">
            <div class="card border-dark text-light shadow-sm" data-aos="zoom-in">
              <img src="{{ asset('storage/' . $p->image) }}" class="card-img-top img-fluid" width="100%" height="auto" alt="gambar" />

              <div class="card-body">
                <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i
                ><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                <p class="card-text fs-5">{{ $p->name }}</p>
                <div class="d-flex justify-content-between align-items-center">
                  <div class="btn-group">
                    <a href="kelas_html.html" class="btn btn-mulai-belajar text-white"><i class="bi bi-cart4"></i> Add to cart</a>
                  </div>
                  <small class="text-muted">Rp.{{ $p->price }}</small>
                </div>
              </div>
            </div>
          </div>
          @endforeach
            </div>
          </div>
        </div>
      </div>
    </section>

    <div class="container">
      <div class="row">
        <div class="col mb-5"></div>
        <center>
          <img class="sponsor" src="img/academy-googleatp-3.png" alt="" />
          <img class="sponsor" src="img/homepage-partner-google.png" alt="" />
          <img class="sponsor" src="img/homepage-partner-microsoft.png" alt="" />
        </center>
      </div>
    </div>

    <!-- Footer-->
    <footer class="footer-custom text-light py-5">
      <div class="container">
        <p class="float-end mb-1 footer">
          <a class="text-white" href="#"><i class="bi bi-arrow-up"></i> Top</a>
        </p>
        <p class="mb-1 footer">Copyright &copy; 2022 <b>YukBelanja !</b> All Rights Reserved.</p>
      </div>
    </footer>
    <!-- Akhir Footer-->

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj"
      crossorigin="anonymous"
    ></script>

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
      AOS.init();
    </script>
  </body>
</html>
