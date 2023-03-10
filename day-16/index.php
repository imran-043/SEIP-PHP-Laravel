<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="/day-16/css/s.css">
  <title>Day-16</title>
</head>

<body>

  <!-- avobe navbar -->
  <div class="cotainer-fluid bg-alart d-flex">
    <img style="width: 20px; height: 60px; margin-left: 3rem;" class="phone-marg" src="/day-16/images/pho.svg" alt="">
    <h1 style="margin-left: 4rem;"> | </h1>
    <img style="width: 30px; height: 60px; margin-left: 3rem;" src="/day-16/images/email.svg" alt="irkfcb@gmail.com">
    <p style="margin-top: 1rem; margin-left: 1rem;">
      irkfcb@gmail.com
    </p>
    <a href="https://www.facebook.com/Izazul.Hoq.Imran/">
      <img style="width: 20px; height: 30px; margin-left: 48rem; margin-top: 1rem;" src="/day-16/images/fb.png" alt="">
    </a>
<a href="">
  <img style="width: 20px; height: 30px; margin-left: 2rem; margin-top: 1rem;" src="/day-16/images/ins.png" alt="">
</a>
<a href="">
  <img style="width: 20px; height: 30px; margin-left: 2rem; margin-top: 1rem;" src="/day-16/images/tl.png" alt="">
</a>
    
    <a href="">
      <img style="width: 20px; height: 30px; margin-left: 2rem; margin-top: 1rem;" src="/day-16/images/tw.png" alt="">
    </a>
    

  </div>
  <!-- navbar -->

  <div class="container-fluid bg-danger ">
    <div class="row">
      <div class="col-12">

        <nav class="navbar navbar-expand-lg navbar-light  ">
          <div class="container-fluid">

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
              data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
              aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse " id="navbarSupportedContent">
              <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                  <a class="nav-link active " aria-current="page" href="/day-15/myweb.html">Izazul Hoq Imran</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link active h" aria-current="page" href="#">Home</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">About</a>
                </li>
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                    data-bs-toggle="dropdown" aria-expanded="false">
                    Product
                  </a>
                  <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item " href="#">Electronic</a></li>
                    <li><a class="dropdown-item" href="#">Fashion</a></li>
                    <li><a class="dropdown-item" href="#">Outdoor</a></li>
                    <li><a class="dropdown-item" href="#">Life Style</a></li>
                  </ul>
                </li>
                <li class="nav-item">
                  <a class="nav-link " href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                </li>
              </ul>
              <form class="d-flex">
                <input class="form-control me-2 mt" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-dark btn-outline-success " type="submit">Search</button>
              </form>
            </div>
          </div>
        </nav>
      </div>
    </div>
    <div>
    </div>

  </div>

  <!-- for slider -->
  <section>
    <!-- <div class="container bb">

      <div class="row bg">
        <div class="col-12 br">
          <h1>
          Hello world
        </h1>
        </div>
      </div>

    </div> -->


    <div class="container-fluid">
      <div class="row">
        <div class="col-12 p-0">
          <div class="carousel slide" data-bs-ride="carousel" id="my-carousel">
            <div class="carousel-inner" data-bs-interval="2000">
              <div class="carousel-item active" data-bs-interval="2000">
                <img src="/day-16/images/1.jpg" alt="slider1" class="w-100" height="500px">
                <div class="carousel-caption h-50 ">
                  <h1 style="color: black;">
                    It's Slide one.
                  </h1>
                </div>
                
              </div>
              <div class="carousel-item" data-bs-interval="1000">
                <img src="/day-16/images/2.jpg" alt="slider2" class="w-100" height="500px">
                <div class="carousel-caption">
                  <h1 style="color: black;">
                    It's Slide Two.
                  </h1>
                </div>
              </div>
              <div class="carousel-item" data-bs-interval="1000">
                <img src="/day-16/images/4.jpg" alt="slider3" class="w-100" height="500px">
                <div class="carousel-caption">
                  <h1 style="color: black;">
                    It's Slide Three.
                  </h1>
                </div>
              </div>
            </div>
            <button type="button" class="carousel-control-prev" data-bs-target="#my-carousel" data-bs-slide="prev">
              <span class="carousel-control-prev-icon"></span>
            </button>
            <button type="button" class="carousel-control-next" data-bs-target="#my-carousel" data-bs-slide="next">
              <span class="carousel-control-next-icon"></span>
            </button>
            <div class="carousel-indicators">
              <button class="active" data-bs-target=" #my-carousel"data-bs-slide-to="0" ></button>
              <button data-bs-target="#my-carousel" data-bs-slide-to="1" ></button>
              <button  data-bs-target="#my-carousel" data-bs-slide-to="2" ></button>

            </div>
          </div>
        </div>
      </div>
    </div>
  </section>



  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script>

</body>

</html>