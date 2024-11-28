<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Portofolio Kifansa</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css" />
  <?php echo app('Illuminate\Foundation\Vite')('resources/sass/app.scss'); ?>
</head>

<body>
  <nav id="navbar-top" class="navbar navbar-expand-lg navbar-light bg-white sticky-top">
    <div class="container-fluid px-5">
      <a class="navbar-brand fw-bold fs-2" href="#" style="color: #363636">Portofolio</a>
      <button class="nav-menu d-md-none" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
        <i class="bi bi-list"></i>
      </button>
      <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
        <ul class="navbar-nav gap-4" style="font-size: 1.1rem">
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#skill">Keahlian</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#experience">Pengalaman</a>
          </li>
        </ul>
      </div>
      <a href="#" class="contact-button ms-4 py-2 px-4 rounded-pill d-none d-md-block">Contact</a>
    </div>
  </nav>

  <section class="home pt-5 pb-5" id="home">
    <div class="row justify-content-evenly align-middle">
      <div class="col-10 col-md-6 text-center text-md-start">
        <h2 style="color: #363636">
          Saya adalah <br /><span class="c-grey">Kifansa Naufal</span>
        </h2>
        <p class="text-muted">
          Saya adalah mahasiswa Telkom University Surabaya Jurusan Sistem informasi. Saya adalah
          pribadi yang komunikatif, disipilin, dan teliti. Mampu bekerja secara individu maupun tim serta
          bertanggung jawab terhadap pekerjaan. Saya selalu berusaha untuk berkembang dan
          mempelajari hal-hal baru. Saya percaya bahwa mempelajari banyak hal akan membuka kunci
          kesukesan dalam kehidupan.
        </p>
        <p class="text-muted">
          Saya adalah mahasiswa Telkom University Surabaya Jurusan Sistem informasi. Saya adalah
          pribadi yang komunikatif, disipilin, dan teliti. Mampu bekerja secara individu maupun tim serta
          bertanggung jawab terhadap pekerjaan. Saya selalu berusaha untuk berkembang dan
          mempelajari hal-hal baru. Saya percaya bahwa mempelajari banyak hal akan membuka kunci
          kesukesan dalam kehidupan.
        </p>
        <p class="text-muted">
          Saya adalah mahasiswa Telkom University Surabaya Jurusan Sistem informasi. Saya adalah
          pribadi yang komunikatif, disipilin, dan teliti. Mampu bekerja secara individu maupun tim serta
          bertanggung jawab terhadap pekerjaan. Saya selalu berusaha untuk berkembang dan
          mempelajari hal-hal baru. Saya percaya bahwa mempelajari banyak hal akan membuka kunci
          kesukesan dalam kehidupan.
        </p>
      </div>
      <div class="col-10 col-md-4 d-none d-md-block">
        <img src="<?php echo e(Vite::asset('resources/images/Foto.jpg')); ?>" class="img-fluid" alt="" id="foto-cv">
      </div>
    </div>
  </section>

  <section class="expertise mt-5" id="skill">
    <div class="heading text-center">
      <h3>
        Keahlian
      </h3>
    </div>
    <div class="row justify-content-evenly mt-5">
      <div class="col-10 col-md-4">
        <div class="skill-card">
          <div class="img">
            <img src="<?php echo e(Vite::asset('resources/images/gelembung.png')); ?>" class="w-auto img-fluid img">
          </div>
          <div class="content mt-3">
            <h4>Meniup Gelembung</h4>
            <p class="text-muted">
              Bisa mennciptakan berbagai bentuk gelembung sejak dari kecil.
            </p>
            <a href="" class="link">Selengkapnya</a>
          </div>
        </div>
      </div>
      <div class="col-md-4 col-10">
        <div class="skill-card">
          <div class="img">
            <img  src="<?php echo e(Vite::asset('resources/images/krabby.png')); ?>" class="w-auto img-fluid img">
          </div>
          <div class="content mt-3">
            <h4>Memasak</h4>
            <p class="text-muted">
              Bisa memasak semua hal dan expert pada hamburger.
            </p>
            <a href="" class="link">Selengkapnya</a>
          </div>
        </div>
      </div>
      <div class="col-md-4 col-10">
        <div class="skill-card">
          <div class="img">
            <img src="<?php echo e(Vite::asset('resources/images/ubur-ubur.png')); ?>" class="w-auto img-fluid img" >
          </div>
          <div class="content mt-3">
            <h4>Menangkap Ubur-Ubur</h4>
            <p class="text-muted">
              Memiliki skill menangkap ubur-ubur ketika magang di salah satu restoran di bikini bottom.
            </p>
            <a href="" class="link">Selengkapnya</a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="blog mt-5 pb-5" id="experience">
    <div class="heading text-center pt-5">
      <h3>Pengalaman</h3>
    </div>
    <div class="row justify-content-evenly px-4 mt-4">
      <div class="blogpost col-md-4 col-10 mt-2 mt-md-0">
        <div class="card">
          <img src="<?php echo e(Vite::asset('resources/images/gunung.png')); ?>" class="card-img-top rounded-4">
          <div class="card-body px-4">
            <p>21 Januari 1872</p>
            <h4 class="card-title">
              <a href="">Mendaki Gunung</a>
            </h4>
            <p class="text-muted">
              Saya pernah mendaki gunung dalam mimpi.
            </p>
            <a href="#" class="read-more-btn link" data-bs-toggle="modal"
              data-bs-target="#exampleModal1">Selengkapnya</a>
          </div>
        </div>
      </div>
      <div class="blogpost col-md-4 col-10 mt-5 mt-md-0 website all">
        <div class="card">
          <img src="<?php echo e(Vite::asset('resources/images/laut.png')); ?>" class="card-img-top rounded-4">
          <div class="card-body px-4">
            <p>7 Oktober 2078</p>
            <h4 class="card-title">
              <a href="">Menyebrangi Samudra</a>
            </h4>
            <p class="text-muted">
              Saya juga pernah menyebrangi samudra. Tetapi masih dalam mimpi juga.
            </p>
            <a href="#" class="read-more-btn link" data-bs-toggle="modal" data-bs-target="#exampleModal2">Selengkapnya</a>
          </div>
        </div>
      </div>
      <div class="blogpost col-md-4 col-10 mt-5 mt-md-0 webapp all">
        <div class="card">
          <img src="<?php echo e(Vite::asset('resources/images/luar-angkasa.png')); ?>" class="card-img-top rounded-4">
          <div class="card-body px-4">
            <p>8 November 3021</p>
            <h4 class="card-title">
              <a href="">Menjelajahi Luar Angkasa</a>
            </h4>
            <p class="text-muted">
              Pake nanya beneran atau engga
            </p>
            <a href="#" class="read-more-btn link" data-bs-toggle="modal" data-bs-target="#exampleModal3">Selengkapnya</a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <footer class="text-center text-muted py-4">
    <div class="social-links mt-5">
      <button href="#" class="rounded-pill linkedin">
        <i class="bi bi-linkedin"></i>
      </button>
      <button href="#" class="rounded-pill whatsapp">
        <i class="bi bi-whatsapp"></i>
      </button>
      <button href="#" class="rounded-pill instagram">
        <i class="bi bi-instagram"></i>
      </button>
    </div>
    <p class="text-center mt-4">Copyright 2024 Portofolio | All Rights Reserved.</p>
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
    crossorigin="anonymous"></script>
</body>

</html>
<?php /**PATH D:\TUGAS\SEMESTER 3\PENGEMBANGAN APLIKASI WEB\Modul 11\modul-11\resources\views/portofolio.blade.php ENDPATH**/ ?>