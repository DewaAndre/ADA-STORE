<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>ADA STORE | PROJECT</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="./css/style.css" />
  </head>
  <body>
    <!-- BANNER -->
    <div id="carouselExampleCaptions" class="carousel slide">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img
            src="./asset/img/home1.jpg"
            class="d-block w-100"
            alt="..."
          />
          <div class="carousel-caption d-md-block">
            <h1 class="font-castoro">SIGNATURE SERIES</h1>
            <p class="font-familjen"><span>GET YOUR CLLECTION</span></p>
            <button
              type="button"
              class="btn btn-outline-light"
              style="border-radius: 30px"
            >
              <a href="">FIND HERE</a>
            </button>
          </div>
        </div>
        <div class="carousel-item">
          <img
            src="./asset/img/home1 (2).jpg"
            class="d-block w-100"
            alt="..."
          />
          <div class="carousel-caption d-md-block">
            <h1 class="font-castoro">SIGNATURE SERIES</h1>
            <p class="font-familjen"><span>GET YOUR CLLECTION</span></p>
            <button
              type="button"
              class="btn btn-outline-light"
              style="border-radius: 30px"
            >
              <a href="">FIND HERE</a>
            </button>
          </div>
        </div>
        <div class="carousel-item">
          <img
            src="./asset/img/home1 (3).jpg"
            class="d-block w-100"
            alt="..."
          />
          <div class="carousel-caption d-md-block">
            <h1 class="font-castoro">SIGNATURE SERIES</h1>
            <p class="font-familjen"><span>GET YOUR CLLECTION</span></p>
            <button
              type="button"
              class="btn btn-outline-light"
              style="border-radius: 30px"
            >
              <a href="">FIND HERE</a>
            </button>
          </div>
        </div>
      </div>
      <button
        class="carousel-control-prev"
        type="button"
        data-bs-target="#carouselExampleCaptions"
        data-bs-slide="prev"
      >
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button
        class="carousel-control-next"
        type="button"
        data-bs-target="#carouselExampleCaptions"
        data-bs-slide="next"
      >
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
    <!-- BANNER -->

    <!-- NAVBAR -->
    <div class="topcomponent">
      <nav
        class="navbar navbar-expand-lg navbar-dark bg-transparent fixed-top"
        id="navbar"
      >
        <div class="container-fluid" id="navCont">
          <a class="navbar-brand" href="#">
            <img src="./asset/img/ada.png" alt="" />
          </a>
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
            <ul class="navbar-nav ml-auto">
              <li class="nav-item">
                <a class="nav-link" aria-current="page" href="#">HOME</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" aria-current="page" href="./commponen/collection.php"
                  >NEW ARRIVAL</a
                >
              </li>
              <li class="nav-item dropdown">
                <a
                  class="nav-link dropdown-toggle"
                  href="#"
                  id="navbarDropdown"
                  role="button"
                  data-bs-toggle="dropdown"
                  aria-expanded="false"
                >
                  COLLECTION
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li>
                    <a class="dropdown-item" href="./commponen/collection.php">T-shirt</a>
                  </li>
                  <li>
                    <a class="dropdown-item" href="./commponen/collection.php">Jacket</a>
                  </li>
                  <li>
                    <a class="dropdown-item" href="./commponen/collection.php"
                      >Short-pants</a
                    >
                  </li>
                  <li>
                    <a class="dropdown-item" href="./commponen/collection.php"
                      >Long-pants</a
                    >
                  </li>
                  <li>
                    <a class="dropdown-item" href="./commponen/collection.php">Shoes</a>
                  </li>
                  <li>
                    <a class="dropdown-item" href="./commponen/collection.php">Hat</a>
                  </li>
                  <li>
                    <a class="dropdown-item" href="./commponen/collection.php"
                      >Back-pack</a
                    >
                  </li>
                </ul>
              </li>
              <li class="nav-item">
                <a class="nav-link" aria-current="page" href="./commponen/blog.html"
                  >BLOG</a
                >
              </li>

              <li class="nav-item">
                <a class="nav-link" aria-current="page" href="/about/us"
                  >CONTACT</a
                >
              </li>
              <li class="nav-item">
                <a
                  class="nav-link"
                  aria-current="page"
                  href="./library/config/login.php"
                  ><svg
                    class="nav-icon"
                    xmlns="http://www.w3.org/2000/svg"
                    width="16"
                    height="16"
                    fill="currentColor"
                    class="bi bi-cart3"
                    viewBox="0 0 16 16"
                  >
                    <path
                      d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .49.598l-1 5a.5.5 0 0 1-.465.401l-9.397.472L4.415 11H13a.5.5 0 0 1 0 1H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5M3.102 4l.84 4.479 9.144-.459L13.89 4H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4m7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4m-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2m7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2"
                    ></path>
                  </svg>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </div>
    <!-- NAVBAR -->

    <!-- SIGNATURE -->
    <div class="series">
      <div class="text-series">
        <h4>Kembalinya Signature Series</h4>
        <button
          type="button"
          class="btn btn-outline-dark"
          style="border-radius: 30px"
        >
          <a href="">FIND HERE</a>
        </button>
        <p style="text-align: center">Kembalinya Signature Series</p>
      </div>
    </div>
    <!-- SIGNATURE -->

    <!-- HOMEWARD -->
    <div id="carouselExampleCaptions" class="carousel slide">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img
            src="./asset/img/home2 (3).jpg"
            class="d-block w-100"
            alt="..."
          />
          <div class="carousel-caption d-md-block">
            <h1 class="font-castoro">SIGNATURE SERIES</h1>
            <p class="font-familjen"><span>GET YOUR CLLECTION</span></p>
            <button
              type="button"
              class="btn btn-outline-light"
              style="border-radius: 30px"
            >
              <a href="">FIND HERE</a>
            </button>
          </div>
        </div>
      </div>
    </div>
    <!-- HOMEWARD -->

    <!-- SHOES -->
    <div class="collection">
      <div class="container-cln">
        <h2 class="font-familjen"><b>SHOES CLLECTION</b></h2>
        <div class="image-slider">
          <div class="container">
            <div class="scroll">
              <div class="card">
                <div class="card-body">
                  <a href="">
                    <img
                      src="./asset/img/sepatu/adidas.jpg"
                      alt=""
                      srcset=""
                    />
                  </a>
                  <h5 class="card-title text-dark">ADIDAS BAC</h5>
                  <p>IDR 1,900.000</p>
                </div>
              </div>
              <div class="card">
                <div class="card-body">
                  <a href="">
                    <img
                      src="./asset/img/sepatu/adidas2.jpg"
                      alt=""
                      srcset=""
                    />
                  </a>
                  <h5 class="card-title text-dark">ADIDAS AAK</h5>
                  <p>IDR 1,900.000</p>
                </div>
              </div>
              <div class="card">
                <div class="card-body">
                  <a href="">
                    <img
                      src="./asset/img/sepatu/adidas3.jpg"
                      alt=""
                      srcset=""
                    />
                  </a>
                  <h5 class="card-title text-dark">ADIDSA TGL</h5>
                  <p>IDR 1,900.000</p>
                </div>
              </div>
              <div class="card">
                <div class="card-body">
                  <a href="">
                    <img
                      src="./asset/img/sepatu/adidas4.jpg"
                      alt=""
                      srcset=""
                    />
                  </a>
                  <h5 class="card-title text-dark">ADIDAS MT</h5>
                  <p>IDR 1,900.000</p>
                </div>
              </div>
              <div class="card">
                <div class="card-body">
                  <a href="">
                    <img
                      src="./asset/img/sepatu/adidas5.jpg"
                      alt=""
                      srcset=""
                    />
                  </a>
                  <h5 class="card-title text-dark">ADIDAS LMT</h5>
                  <p>IDR 1,900.000</p>
                </div>
              </div>
              <div class="card">
                <div class="card-body">
                  <a href="">
                    <img
                      src="./asset/img/sepatu/adidas6.jpg"
                      alt=""
                      srcset=""
                    />
                  </a>
                  <h5 class="card-title text-dark">NMA</h5>
                  <p>IDR 1,900.000</p>
                </div>
              </div>
              <div class="card">
                <div class="card-body">
                  <a href="">
                    <img
                      src="./asset/img/sepatu/adidas7.jpg"
                      alt=""
                      srcset=""
                    />
                  </a>
                  <h5 class="card-title text-dark">ADIDAS TJ</h5>
                  <p>IDR 1,900.000</p>
                </div>
              </div>
              <div class="card">
                <div class="card-body">
                  <a href="">
                    <img
                      src="./asset/img/sepatu/shopping (10).webp "
                      alt=""
                      srcset=""
                    />
                  </a>
                  <h5 class="card-title text-dark">ADIDAS LMN</h5>
                  <p>IDR 1,900.000</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- SHOES -->

    <!-- T-SHIRT -->
    <div class="collection">
      <div class="container-cln">
        <h2 class="font-familjen"><b>T-SHIRT CLLECTION</b></h2>
        <div class="image-slider">
          <div class="container">
            <div class="scroll">
              <div class="card">
                <div class="card-body">
                  <a href="">
                    <img
                      src="./asset/img/t-shirt/baju0 (1).jpg"
                      alt=""
                      srcset=""
                    />
                  </a>
                  <h5 class="card-title text-dark">T-SHIRT AR</h5>
                  <p>IDR 400.000</p>
                </div>
              </div>
              <div class="card">
                <div class="card-body">
                  <a href="">
                    <img
                      src="./asset/img/t-shirt/baju0 (2).jpg"
                      alt=""
                      srcset=""
                    />
                  </a>
                  <h5 class="card-title text-dark">T-SHIRT ADS</h5>
                  <p>IDR 400.000</p>
                </div>
              </div>
              <div class="card">
                <div class="card-body">
                  <a href="">
                    <img
                      src="./asset/img/t-shirt/baju0 (3).jpg"
                      alt=""
                      srcset=""
                    />
                  </a>
                  <h5 class="card-title text-dark">T-SHIRT ATT</h5>
                  <p>IDR 400.000</p>
                </div>
              </div>
              <div class="card">
                <div class="card-body">
                  <a href="">
                    <img
                      src="./asset/img/t-shirt/baju0 (4).jpg"
                      alt=""
                      srcset=""
                    />
                  </a>
                  <h5 class="card-title text-dark">T-SHIRT AWS</h5>
                  <p>IDR 400.000</p>
                </div>
              </div>
              <div class="card">
                <div class="card-body">
                  <a href="">
                    <img
                      src="./asset/img/t-shirt/baju0 (5).jpg"
                      alt=""
                      srcset=""
                    />
                  </a>
                  <h5 class="card-title text-dark">T-SHIRT LMN</h5>
                  <p>IDR 400.000</p>
                </div>
              </div>
              <div class="card">
                <div class="card-body">
                  <a href="">
                    <img
                      src="./asset/img/t-shirt/baju0 (6).jpg"
                      alt=""
                      srcset=""
                    />
                  </a>
                  <h5 class="card-title text-dark">T-SHIRT ENM</h5>
                  <p>IDR 400.000</p>
                </div>
              </div>
              <div class="card">
                <div class="card-body">
                  <a href="">
                    <img
                      src="./asset/img/t-shirt/baju0 (7).jpg"
                      alt=""
                      srcset=""
                    />
                  </a>
                  <h5 class="card-title text-dark">T-SHIRT TJ</h5>
                  <p>IDR 400.000</p>
                </div>
              </div>
              <div class="card">
                <div class="card-body">
                  <a href="">
                    <img
                      src="./asset/img/t-shirt/baju0 (8).jpg"
                      alt=""
                      srcset=""
                    />
                  </a>
                  <h5 class="card-title text-dark">T-SHIRT EHT</h5>
                  <p>IDR 400.000</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- T-SHIRT -->

    <!-- JACKET -->
    <div class="collection">
      <div class="container-cln">
        <h2 class="font-familjen"><b>JACKET COLLECTION</b></h2>
        <div class="image-slider">
          <div class="container">
            <div class="scroll">
              <div class="card">
                <div class="card-body">
                  <a href="">
                    <img
                      src="./asset/img/jaket/shopping (2).webp"
                      alt=""
                      srcset=""
                    />
                  </a>
                  <h5 class="card-title text-dark">JACKET NE</h5>
                  <p>IDR 600.000</p>
                </div>
              </div>
              <div class="card">
                <div class="card-body">
                  <a href="">
                    <img
                      src="./asset/img/jaket/shopping (13).webp"
                      alt=""
                      srcset=""
                    />
                  </a>
                  <h5 class="card-title text-dark">JACKET WT</h5>
                  <p>IDR 600.000</p>
                </div>
              </div>
              <div class="card">
                <div class="card-body">
                  <a href="">
                    <img
                      src="./asset/img/jaket/shopping (1).webp"
                      alt=""
                      srcset=""
                    />
                  </a>
                  <h5 class="card-title text-dark">JACKET TE</h5>
                  <p>IDR 600.000</p>
                </div>
              </div>
              <div class="card">
                <div class="card-body">
                  <a href="">
                    <img
                      src="./asset/img/jaket/WhatsApp Image 2023-10-26 at 21.11.56 (1).jpeg"
                      alt=""
                      srcset=""
                    />
                  </a>
                  <h5 class="card-title text-dark">JACKET FT</h5>
                  <p>IDR 600.000</p>
                </div>
              </div>
              <div class="card">
                <div class="card-body">
                  <a href="">
                    <img
                      src="./asset/img/jaket/shopping.webp"
                      alt=""
                      srcset=""
                    />
                  </a>
                  <h5 class="card-title text-dark">JACKET FV</h5>
                  <p>IDR 600.000</p>
                </div>
              </div>
              <div class="card">
                <div class="card-body">
                  <a href="">
                    <img
                      src="./asset/img/jaket/shopping (2).webp"
                      alt=""
                      srcset=""
                    />
                  </a>
                  <h5 class="card-title text-dark">JACKET SX</h5>
                  <p>IDR 600.000</p>
                </div>
              </div>
              <div class="card">
                <div class="card-body">
                  <a href="">
                    <img
                      src="./asset/img/jaket/shopping (13).webp"
                      alt=""
                      srcset=""
                    />
                  </a>
                  <h5 class="card-title text-dark">JACKET SFN</h5>
                  <p>IDR 600.000</p>
                </div>
              </div>
              <div class="card">
                <div class="card-body">
                  <a href="">
                    <img
                      src="./asset/img/jaket/shopping (1).webp"
                      alt=""
                      srcset=""
                    />
                  </a>
                  <h5 class="card-title text-dark">JACKET EGH</h5>
                  <p>IDR 600.000</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- JACKET -->

    <!-- HOODIE -->
    <div class="collection">
      <div class="container-cln">
        <h2 class="font-familjen"><b>HOODIE CLLECTION</b></h2>
        <div class="image-slider">
          <div class="container">
            <div class="scroll">
              <div class="card">
                <div class="card-body">
                  <a href="">
                    <img
                      src="./asset/img/hoodie/shopping (2).webp"
                      alt=""
                      srcset=""
                    />
                  </a>
                  <h5 class="card-title text-dark">HOODIE NE</h5>
                  <p>IDR 600.000</p>
                </div>
              </div>
              <div class="card">
                <div class="card-body">
                  <a href="">
                    <img
                      src="./asset/img/hoodie/shopping (1).webp"
                      alt=""
                      srcset=""
                    />
                  </a>
                  <h5 class="card-title text-dark">HOODIE TS</h5>
                  <p>IDR 600.000</p>
                </div>
              </div>
              <div class="card">
                <div class="card-body">
                  <a href="">
                    <img
                      src="./asset/img/hoodie/shopping.webp"
                      alt=""
                      srcset=""
                    />
                  </a>
                  <h5 class="card-title text-dark">HOODIE PK</h5>
                  <p>IDR 600.000</p>
                </div>
              </div>
              <div class="card">
                <div class="card-body">
                  <a href="">
                    <img
                      src="./asset/img/hoodie/shopping (5).webp"
                      alt=""
                      srcset=""
                    />
                  </a>
                  <h5 class="card-title text-dark">HOODIE BLN</h5>
                  <p>IDR 600.000</p>
                </div>
              </div>
              <div class="card">
                <div class="card-body">
                  <a href="">
                    <img
                      src="./asset/img/hoodie/shopping (4).webp"
                      alt=""
                      srcset=""
                    />
                  </a>
                  <h5 class="card-title text-dark">HOODIE PKJ</h5>
                  <p>IDR 600.000</p>
                </div>
              </div>
              <div class="card">
                <div class="card-body">
                  <a href="">
                    <img
                      src="./asset/img/hoodie/shopping (3).webp"
                      alt=""
                      srcset=""
                    />
                  </a>
                  <h5 class="card-title text-dark">HOODIE ATS</h5>
                  <p>IDR 600.000</p>
                </div>
              </div>
              <div class="card">
                <div class="card-body">
                  <a href="">
                    <img
                      src="./asset/img/hoodie/shopping (2).webp"
                      alt=""
                      srcset=""
                    />
                  </a>
                  <h5 class="card-title text-dark">HOODIE CKM</h5>
                  <p>IDR 600.000</p>
                </div>
              </div>
              <div class="card">
                <div class="card-body">
                  <a href="">
                    <img
                      src="./asset/img/hoodie/shopping (1).webp"
                      alt=""
                      srcset=""
                    />
                  </a>
                  <h5 class="card-title text-dark">HOODIE PQ</h5>
                  <p>IDR 600.000</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- HOODIE -->

    <!-- SHORT-PANTS -->
    <div class="collection">
      <div class="container-cln">
        <h2 class="font-familjen"><b>SHORT-PANTS CLLECTION</b></h2>
        <div class="image-slider">
          <div class="container">
            <div class="scroll">
              <div class="card">
                <div class="card-body">
                  <a href="">
                    <img
                      src="./asset/img/short-pants/0512wh.jpg"
                      alt=""
                      srcset=""
                    />
                  </a>
                  <h5 class="card-title text-dark">SHORT-PANTS ATS</h5>
                  <p>IDR 200.000</p>
                </div>
              </div>
              <div class="card">
                <div class="card-body">
                  <a href="">
                    <img
                      src="./asset/img/short-pants/0512kk.jpg"
                      alt=""
                      srcset=""
                    />
                  </a>
                  <h5 class="card-title text-dark">SHORT-PANTS WTS</h5>
                  <p>IDR 200.000</p>
                </div>
              </div>
              <div class="card">
                <div class="card-body">
                  <a href="">
                    <img
                      src="./asset/img/short-pants/0512bl.jpg"
                      alt=""
                      srcset=""
                    />
                  </a>
                  <h5 class="card-title text-dark">SHORT-PANTS DF</h5>
                  <p>IDR 200.000</p>
                </div>
              </div>
              <div class="card">
                <div class="card-body">
                  <a href="">
                    <img
                      src="./asset/img/short-pants/0511cb.jpg"
                      alt=""
                      srcset=""
                    />
                  </a>
                  <h5 class="card-title text-dark">SHORT-PANTS AKC</h5>
                  <p>IDR 200.000</p>
                </div>
              </div>
              <div class="card">
                <div class="card-body">
                  <a href="">
                    <img
                      src="./asset/img/short-pants/0512wh.jpg"
                      alt=""
                      srcset=""
                    />
                  </a>
                  <h5 class="card-title text-dark">SHORT-PANTS PTS</h5>
                  <p>IDR 200.000</p>
                </div>
              </div>
              <div class="card">
                <div class="card-body">
                  <a href="">
                    <img
                      src="./asset/img/short-pants/0512kk.jpg"
                      alt=""
                      srcset=""
                    />
                  </a>
                  <h5 class="card-title text-dark">SHORT-PANTS MN</h5>
                  <p>IDR 200.000</p>
                </div>
              </div>
              <div class="card">
                <div class="card-body">
                  <a href="">
                    <img
                      src="./asset/img/short-pants/0512bl.jpg"
                      alt=""
                      srcset=""
                    />
                  </a>
                  <h5 class="card-title text-dark">SHORT-PANTS PL</h5>
                  <p>IDR 200.000</p>
                </div>
              </div>
              <div class="card">
                <div class="card-body">
                  <a href="">
                    <img
                      src="./asset/img/short-pants/0511cb.jpg"
                      alt=""
                      srcset=""
                    />
                  </a>
                  <h5 class="card-title text-dark">SHORT-PANTS BM</h5>
                  <p>IDR 200.000</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- SHORT-PANTS -->

    <!-- LONG-PANTS -->
    <div class="collection">
      <div class="container-cln">
        <h2 class="font-familjen"><b>LONG-PANTS CLLECTION</b></h2>
        <div class="image-slider">
          <div class="container">
            <div class="scroll">
              <div class="card">
                <div class="card-body">
                  <a href="">
                    <img
                      src="./asset/img/long-pants/WhatsApp Image 2023-10-26 at 21.08.32.jpeg"
                      alt=""
                      srcset=""
                    />
                  </a>
                  <h5 class="card-title text-dark">LONG-PANTS HG</h5>
                  <p>IDR 600.000</p>
                </div>
              </div>
              <div class="card">
                <div class="card-body">
                  <a href="">
                    <img
                      src="./asset/img/long-pants/WhatsApp Image 2023-10-26 at 20.57.27.jpeg"
                      alt=""
                      srcset=""
                    />
                  </a>
                  <h5 class="card-title text-dark">LONG-PANTS FG</h5>
                  <p>IDR 600.000</p>
                </div>
              </div>
              <div class="card">
                <div class="card-body">
                  <a href="">
                    <img
                      src="./asset/img/long-pants/WhatsApp Image 2023-10-26 at 20.57.26.jpeg"
                      alt=""
                      srcset=""
                    />
                  </a>
                  <h5 class="card-title text-dark">LONG-PANTS TPA</h5>
                  <p>IDR 600.000</p>
                </div>
              </div>
              <div class="card">
                <div class="card-body">
                  <a href="">
                    <img
                      src="./asset/img/long-pants/WhatsApp Image 2023-10-26 at 20.57.24.jpeg"
                      alt=""
                      srcset=""
                    />
                  </a>
                  <h5 class="card-title text-dark">LONG-PANTS GL</h5>
                  <p>IDR 600.000</p>
                </div>
              </div>
              <div class="card">
                <div class="card-body">
                  <a href="">
                    <img
                      src="./asset/img/long-pants/WhatsApp Image 2023-10-26 at 21.08.32.jpeg"
                      alt=""
                      srcset=""
                    />
                  </a>
                  <h5 class="card-title text-dark">LONG-PANTS TS</h5>
                  <p>IDR 600.000</p>
                </div>
              </div>
              <div class="card">
                <div class="card-body">
                  <a href="">
                    <img
                      src="./asset/img/long-pants/WhatsApp Image 2023-10-26 at 20.57.27.jpeg"
                      alt=""
                      srcset=""
                    />
                  </a>
                  <h5 class="card-title text-dark">LONG-PANTS BJ</h5>
                  <p>IDR 600.000</p>
                </div>
              </div>
              <div class="card">
                <div class="card-body">
                  <a href="">
                    <img
                      src="./asset/img/long-pants/WhatsApp Image 2023-10-26 at 20.57.26.jpeg"
                      alt=""
                      srcset=""
                    />
                  </a>
                  <h5 class="card-title text-dark">LONG-PANTS JM</h5>
                  <p>IDR 600.000</p>
                </div>
              </div>
              <div class="card">
                <div class="card-body">
                  <a href="">
                    <img
                      src="./asset/img/long-pants/WhatsApp Image 2023-10-26 at 20.57.24.jpeg"
                      alt=""
                      srcset=""
                    />
                  </a>
                  <h5 class="card-title text-dark">LONG-PANTS CSD</h5>
                  <p>IDR 600.000</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- LONG-PANTS -->

    <!-- HAT -->
    <div class="collection">
      <div class="container-cln">
        <h2 class="font-familjen"><b>HAT CLLECTION</b></h2>
        <div class="image-slider">
          <div class="container">
            <div class="scroll">
              <div class="card">
                <div class="card-body">
                  <a href="">
                    <img
                      src="./asset/img/topi/shopping (3).webp"
                      alt=""
                      srcset=""
                    />
                  </a>
                  <h5 class="card-title text-dark">HAT YT</h5>
                  <p>IDR 100.000</p>
                </div>
              </div>
              <div class="card">
                <div class="card-body">
                  <a href="">
                    <img
                      src="./asset/img/topi/shopping (2).webp"
                      alt=""
                      srcset=""
                    />
                  </a>
                  <h5 class="card-title text-dark">HAT TY</h5>
                  <p>IDR 100.000</p>
                </div>
              </div>
              <div class="card">
                <div class="card-body">
                  <a href="">
                    <img
                      src="./asset/img/topi/shopping (1).webp"
                      alt=""
                      srcset=""
                    />
                  </a>
                  <h5 class="card-title text-dark">HAT KP</h5>
                  <p>IDR 100.000</p>
                </div>
              </div>
              <div class="card">
                <div class="card-body">
                  <a href="">
                    <img
                      src="./asset/img/topi/shopping (5).webp"
                      alt=""
                      srcset=""
                    />
                  </a>
                  <h5 class="card-title text-dark">HAT YR</h5>
                  <p>IDR 100.000</p>
                </div>
              </div>
              <div class="card">
                <div class="card-body">
                  <a href="">
                    <img
                      src="./asset/img/topi/shopping (4).webp"
                      alt=""
                      srcset=""
                    />
                  </a>
                  <h5 class="card-title text-dark">HAT PQ</h5>
                  <p>IDR 100.000</p>
                </div>
              </div>
              <div class="card">
                <div class="card-body">
                  <a href="">
                    <img
                      src="./asset/img/topi/shopping (3).webp"
                      alt=""
                      srcset=""
                    />
                  </a>
                  <h5 class="card-title text-dark">HAT BV</h5>
                  <p>IDR 100.000</p>
                </div>
              </div>
              <div class="card">
                <div class="card-body">
                  <a href="">
                    <img
                      src="./asset/img/topi/shopping (2).webp"
                      alt=""
                      srcset=""
                    />
                  </a>
                  <h5 class="card-title text-dark">HAT SC</h5>
                  <p>IDR 100.000</p>
                </div>
              </div>
              <div class="card">
                <div class="card-body">
                  <a href="">
                    <img
                      src="./asset/img/topi/shopping (1).webp"
                      alt=""
                      srcset=""
                    />
                  </a>
                  <h5 class="card-title text-dark">HAT KL</h5>
                  <p>IDR 100.000</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- HAT -->

    <!-- BACK-PACK -->
    <div class="collection">
      <div class="container-cln">
        <h2 class="font-familjen"><b>BACK-PACK CLLECTION</b></h2>
        <div class="image-slider">
          <div class="container">
            <div class="scroll">
              <div class="card">
                <div class="card-body">
                  <a href="">
                    <img
                      src="./asset/img/tas/shopping (2).webp"
                      alt=""
                      srcset=""
                    />
                  </a>
                  <h5 class="card-title text-dark">BACK-PACK BG</h5>
                  <p>IDR 4500.000</p>
                </div>
              </div>
              <div class="card">
                <div class="card-body">
                  <a href="">
                    <img
                      src="./asset/img/tas/shopping (1).webp"
                      alt=""
                      srcset=""
                    />
                  </a>
                  <h5 class="card-title text-dark">BACK-PACK PTY</h5>
                  <p>IDR 4500.000</p>
                </div>
              </div>
              <div class="card">
                <div class="card-body">
                  <a href="">
                    <img
                      src="./asset/img/tas/shopping.webp"
                      alt=""
                      srcset=""
                    />
                  </a>
                  <h5 class="card-title text-dark">BACK-PACK HT</h5>
                  <p>IDR 4500.000</p>
                </div>
              </div>
              <div class="card">
                <div class="card-body">
                  <a href="">
                    <img
                      src="./asset/img/tas/shopping (6).webp"
                      alt=""
                      srcset=""
                    />
                  </a>
                  <h5 class="card-title text-dark">BACK-PACK YT</h5>
                  <p>IDR 4500.000</p>
                </div>
              </div>
              <div class="card">
                <div class="card-body">
                  <a href="">
                    <img
                      src="./asset/img/tas/shopping (4).webp"
                      alt=""
                      srcset=""
                    />
                  </a>
                  <h5 class="card-title text-dark">BACK-PACK RTS</h5>
                  <p>IDR 4500.000</p>
                </div>
              </div>
              <div class="card">
                <div class="card-body">
                  <a href="">
                    <img
                      src="./asset/img/tas/shopping (3).webp"
                      alt=""
                      srcset=""
                    />
                  </a> 
                  <h5 class="card-title text-dark">BACK-PACK CV</h5>
                  <p>IDR 4500.000</p>
                </div>
              </div>
              <div class="card">
                <div class="card-body">
                  <a href="">
                    <img
                      src="./asset/img/tas/shopping (2).webp"
                      alt=""
                      srcset=""
                    />
                  </a>
                  <h5 class="card-title text-dark">BACK-PACK AKL</h5>
                  <p>IDR 4500.000</p>
                </div>
              </div>
              <div class="card">
                <div class="card-body">
                  <a href="">
                    <img
                      src="./asset/img/tas/shopping (1).webp"
                      alt=""
                      srcset=""
                    />
                  </a>
                  <h5 class="card-title text-dark">BACK-PACK GY</h5>
                  <p>IDR 4500.000</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- BACK-PACK -->

    <!-- location start -->
    <div class="location">
      <div class="lc-container">
        <div class="box-container">
          <h3 class="font-familjen">Our Flagship Store</h3>
          <div class="box-lc">
            <svg
              xmlns="http://www.w3.org/2000/svg"
              width="16"
              height="16"
              fill="currentColor"
              class="bi bi-geo-alt"
              viewBox="0 0 16 16"
            >
              <path
                d="M12.166 8.94c-.524 1.062-1.234 2.12-1.96 3.07A31.493 31.493 0 0 1 8 14.58a31.481 31.481 0 0 1-2.206-2.57c-.726-.95-1.436-2.008-1.96-3.07C3.304 7.867 3 6.862 3 6a5 5 0 0 1 10 0c0 .862-.305 1.867-.834 2.94M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10"
              />
              <path
                d="M8 8a2 2 0 1 1 0-4 2 2 0 0 1 0 4m0 1a3 3 0 1 0 0-6 3 3 0 0 0 0 6"
              />
            </svg>
            <h5>ADA STORE BALI</h5>
          </div>
          <iframe class="map"
            src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15783.16139516386!2d115.2702781!3d-8.5197253!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd23d70c0d461a9%3A0x982d55bd6e173250!2sAry%20House%20Ubud!5e0!3m2!1sen!2sid!4v1701820633696!5m2!1sen!2sid"
            width="600"
            height="450"
            allowfullscreen=""
            loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"
          ></iframe>
        </div>
      </div>
    </div>
    <!-- location end -->

    <!-- footet start -->
    <footer>
      <div class="card-group footer">
        <div class="card store">
          <div class="card-body">
            <h5 class="card-title font-familjen">ADA STORE</h5>
            <div class="garis-putih"></div>
            <p class="card-text">NEW ARRIVAL</p>
            <p class="card-text">COLLECTION</p>
            <p class="card-text">ACCESSORIES</p>
            <p class="card-text">SALE</p>
            <p class="card-text">BLOG</p>
            <p class="card-text">CONTACT</p>
          </div>
        </div>
        <div class="card store">
          <div class="card-body">
            <h5 class="card-title font-familjen">HELP</h5>
            <div class="garis-putih"></div>
            <p class="card-text">Size Guide</p>
            <p class="card-text">Shopping</p>
            <p class="card-text">How To Order</p>
          </div>
        </div>
        <div class="card store">
          <div class="card-body">
            <h5 class="card-title font-familjen">GET SOSIAL</h5>
            <div class="garis-putih"></div>
            <div class="icn-container">
              <p class="card-text icn-footer">
                <!-- instagram -->
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  width="20"
                  height="20"
                  fill="currentColor"
                  class="bi bi-instagram"
                  viewBox="0 0 16 16"
                >
                  <path
                    d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334"
                  />
                </svg>
              </p>
              <p class="card-text icn-footer facebook" style="padding: 0 27px">
                <!-- facebook -->
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  width="20"
                  height="20"
                  fill="currentColor"
                  class="bi bi-facebook"
                  viewBox="0 0 16 16"
                >
                  <path
                    d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951"
                  />
                </svg>
              </p>
              <p class="card-text icn-footer tiktok">
                <!-- tiktok -->
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  width="20"
                  height="20"
                  fill="currentColor"
                  class="bi bi-tiktok"
                  viewBox="0 0 16 16"
                >
                  <path
                    d="M9 0h1.98c.144.715.54 1.617 1.235 2.512C12.895 3.389 13.797 4 15 4v2c-1.753 0-3.07-.814-4-1.829V11a5 5 0 1 1-5-5v2a3 3 0 1 0 3 3z"
                  />
                </svg>
              </p>
            </div>
          </div>
        </div>
        <div class="card store">
          <div class="card-body">
            <h5 class="card-title"></h5>
            <p class="card-text">
              <img src="./asset/img/ada.png" alt="" srcset="" />
            </p>
          </div>
        </div>
      </div>
      <div class="garis-abu"></div>
      <div class="copyright">
        <p>Copyright © 2023 ADA STORE. E-commerce by ada.</p>
      </div>
    </footer>
    <!-- footet end -->

    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
      crossorigin="anonymous"
    ></script>
    <script>
      window.addEventListener("scroll", function () {
        var nav = document.querySelector("nav");
        nav.classList.toggle("sticky", window.scrollY > 100);
      });
    </script>
  </body>
</html>
