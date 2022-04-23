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

    <title>ABC BANGO.</title>
  </head>
  <body>
      <!-- awal navbar -->
    @include('frontend.partials.navbar')
     
    <!-- akhir navbar -->
    <!-- awal home -->
    <section id="jumbotron" class="jumbotron">
      <br />
      <h1 class="title head display-4">{{ $b->title }}</h1>
      <h1 class="title head display-4">{{  $b->slogan1 }} </h1>
      <p class="head"><i class="bi bi-person"></i> 100,000+ Pengguna | <i class="bi bi-star-fill"></i> <i class="bi bi-star-fill"></i> <i class="bi bi-star-fill"></i> <i class="bi bi-star-fill"></i> <i class="bi bi-star-fill"></i></p>
      <a class="btn btn-mulai head text-white p-3 mt-4" data-aos="zoom" href="/daftar_produk">Belanja Sekarang</a>
      <br />
      <br />
    </section>

    <!-- akhir home -->

    <!-- awal about -->
    
<section id="about" class="about">
  <div class="container">
    <div class="row">
      <div class="col">
        <div class="container my-5">
          <div
            class="
              row
              p-4
              bg-about-custom
              border-dark
              text-white
              pb-0
              pe-lg-0
              pt-lg-5
              align-items-center
              rounded-3
              border
              shadow-lg
            "
          >
            <div class="col-lg-7 p-3 p-lg-5 pt-lg-3">
              <p class="fs-5">
               {{ $a->desc }}
              </p>
              {{-- <p class="fs-5">
                Emina merupakan keluaran produk dari naungan PT Paragon Technology yang produknya sudah digunakan oleh artis artis ternama luar negeri terutama di korea karena produknya yang unik dan sesuai karakter dari setiap penggunanya sendiri.
                Emina sendiri sudah berjalan di ranah kosmetik selama hampir 5 tahun dengan berbagai tantangan yang tidak mudah untuk dilewati pastinya. 
                Emina selalu berusaha menekankan kesan fun dan playfull karena memang target audience yang dituju adalah anak-anak muda dan remaja yang masih memiliki kulit yang bersih dan tidak mudah rusak.
              </p> --}}
            </div>
            <div class="col-lg-4 offset-lg-1 p-0 overflow-hidden mb-5 ">
              <img class="rounded-lg-3 " src="assets/img/about.png" alt="" height="150%"width="100%" />
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

    <!-- akhir about -->

    <!-- awal produk -->
    @include('frontend.produk')
    <!-- akhir produk -->

    <!--awal contact -->
    @include('frontend.contact')
    <!--akhir contact -->

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
        <p class="mb-1 footer">Copyright &copy; 2022 <b>YukBelanja</b> All Rights Reserved.</p>
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

    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.6.1/gsap.min.js"></script>
    <script>
      gsap.from(".navbar", { duration: 1.5, y: "-100%", opacity: 0, ease: "bounce" });
      gsap.from(".jumbotron h1", { duration: 1, x: -100, opacity: 0 });
      gsap.from(".jumbotron p", { duration: 1, x: -100, opacity: 0 });
    </script>
  </body>
</html>
