<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css" integrity="sha512-5Hs3dF2AEPkpNAR7UiOHba+lRSJNeM2ECkwxUIxC1Q/FLycGTbNapWXB4tP889k5T5Ju8fs4b1P5z/iB4nMfSQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="style/index.css">
  <title>TicketOn</title>
</head>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<body>

<nav class="navbar navbar-expand-lg" style="background-color: #3f37c9;">
  <div class="container-fluid">
    <a class="navbar-brand" href="#"><i class="fa-solid fa-plane" style="color: white;">TicketOn</i></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#start">Travel</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="CRUD/create.php">Make Ticket</a>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" aria-disabled="true">Disabled</a>
        </li>
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
      <form action="auth/logout.php" method="post">
        <button type="submit">Log Out</button>
      </form>
    </div>
  </div>
</nav>

<section id="hero" class="hero section accent-background">

      <div class="container position-relative" data-aos="fade-up" data-aos-delay="100">
        <div class="row gy-5 justify-content-between">
          <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center">
            <h2><span>Selamat datang di </span><span class="accent">TicketOn</span></h2>
            <p>Hanya di sini Harga Ticket terjangkau anda juga bisa memesannya dengan online di situs kami</p>
            <div class="d-flex">
              <a href="#start" class="btn-get-started">Get Started</a>
            </div>
          </div>
          <div class="col-lg-5 order-1 order-lg-2">
            <img src="assets/img/hero-img.svg" class="img-fluid" alt="">
          </div>
        </div>
      </div>

      <div class="icon-boxes position-relative" data-aos="fade-up" data-aos-delay="200">
        <div class="container position-relative">
          <div class="row gy-4 mt-5">

            <div class="col-xl-3 col-md-6">
              <div class="icon-box">
                <div class="icon"><i class="bi bi-easel"></i></div>
                <h4 class="title"><a href="" class="stretched-link">Lorem</a></h4>
              </div>
            </div><!--End Icon Box -->

            <div class="col-xl-3 col-md-6">
              <div class="icon-box">
                <div class="icon"><i class="bi bi-gem"></i></div>
                <h4 class="title"><a href="" class="stretched-link">Lorem</a></h4>
              </div>
            </div><!--End Icon Box -->

            <div class="col-xl-3 col-md-6">
              <div class="icon-box">
                <div class="icon"><i class="bi bi-geo-alt"></i></div>
                <h4 class="title"><a href="" class="stretched-link">Lorem</a></h4>
              </div>
            </div><!--End Icon Box -->

            <div class="col-xl-3 col-md-6">
              <div class="icon-box">
                <div class="icon"><i class="bi bi-command"></i></div>
                <h4 class="title"><a href="" class="stretched-link">Lorem</a></h4>
              </div>
            </div><!--End Icon Box -->

          </div>
        </div>
      </div>

<section id="start">
        <div class="card-container" data-aos="fade-down">
                <div class="card" id="card1">
                    <img src="image/Autumn in big city.jpg" alt="">
                    <div class="card-content" data-aos="fade-down">
                        <h1>Indo-Jakarta , <br> German-Berlin</h1>
                        <p><i class="fa-solid fa-star" style="color: #FFE373;" ></i><i class="fa-solid fa-star" style="color: #FFE373;" ></i><i class="fa-solid fa-star" style="color: #FFE373;" ></i><i class="fa-solid fa-star" style="color: #FFE373;" ></i><i class="fa-solid fa-star" style="color: #FFE373;" ></i></p>
                        <a href="CRUD/create.php" class="card-button">Travel</a>
                    </div>
                </div>
                <div class="card" id="card2">
                    <img src="image/download.jpg" alt="">
                    <div class="card-content"  data-aos="fade-up">
                        <h1>Indo-Jakarta ,  <br> Japan-Tokyo</h1>
                        <p><i class="fa-solid fa-star" style="color: #FFE373;" ></i><i class="fa-solid fa-star" style="color: #FFE373;" ></i><i class="fa-solid fa-star" style="color: #FFE373;" ></i><i class="fa-solid fa-star" style="color: #FFE373;" ></i><i class="fa-solid fa-star" style="color: #FFE373;" ></i></p>
                        <a href="CRUD/create.php" class="card-button">Travel</a>
                    </div>
                </div>
                <div class="card" id="card3" >
                    <img src="image/Málaga 🇪🇦.jpg" alt="">
                    <div class="card-content" data-aos="fade-down">
                        <h1>Indo-Jakarta , <br> Spanish-Madrid</h1>
                        <p><i class="fa-solid fa-star" style="color: #FFE373;" ></i><i class="fa-solid fa-star" style="color: #FFE373;" ></i><i class="fa-solid fa-star" style="color: #FFE373;" ></i><i class="fa-solid fa-star" style="color: #FFE373;" ></i><i class="fa-solid fa-star" style="color: #FFE373;" ></i></p>
                        <a href="CRUD/create.php" class="card-button">Travel</a>
                </div>
            </div>
</section>              
      <script src="script.js"></script>
      <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>   
      <script>
        AOS.init();
      </script>
</body>
</html>
</body>
</html>