
<?php 
error_reporting(0);
$con=mysqli_connect("localhost","root","","ada_store");

 if (mysqli_connect_errno())
 {
 echo "Failed to connect to MySQL: " . mysqli_connect_error();
 }
 
 $baju = mysqli_query($con,"SELECT * FROM baju");
 
 mysqli_close($con);
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>COLLECTION | ADA STORE</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="../css/collection.css" />
  </head>
  <body>

    <!-- BANNER -->
    <div id="carouselExampleCaptions" class="carousel slide">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img
            src="../asset/img/collection1.png"
            class="d-block w-100"
            style="height: 780px"
            alt="..."
          />
          <div class="carousel-caption d-none d-md-block">
            <h1 class="font-castoro">COLLECTION SERIES</h1>
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
            src="../asset/img/collection2.jpg"
            class="d-block w-100"
            style="height: 780px"
            alt="..."
          />
          <div class="carousel-caption d-none d-md-block">
            <h1 class="font-castoro">COLLECTION SERIES</h1>
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
            src="../asset/img/collection.jpg"
            class="d-block w-100"
            style="height: 780px"
            alt="..."
          />
          <div class="carousel-caption d-none d-md-block">
            <h1 class="font-castoro">COLLECTION SERIES</h1>
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
          <a class="navbar-brand" href="/">
            <img src=".../asset/img/ada.png" alt="" />
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
                <a class="nav-link" aria-current="page" href="./index.php">HOME</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" aria-current="page" href="#"
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
                  <li><a class="dropdown-item" href="./collection.html">T-shirt</a></li>
                  <li><a class="dropdown-item" href="./collection.html">Jacket</a></li>
                  <li><a class="dropdown-item" href="./collection.html">Short-pants</a></li>
                  <li><a class="dropdown-item" href="./collection.html">Long-pants</a></li>
                  <li><a class="dropdown-item" href="./collection.html">Shoes</a></li>
                  <li><a class="dropdown-item" href="./collection.html">Hat</a></li>
                  <li><a class="dropdown-item" href="./collection.html">Back-pack</a></li>
                </ul>
              </li>
              <li class="nav-item">
                <a class="nav-link" aria-current="page" href="./blog.html"
                  >BLOG</a
                >
              </li>

              <li class="nav-item">
                <a class="nav-link" aria-current="page" href="/about/us"
                  >CONTACT</a
                >
              </li>
              <li class="nav-item">
                <a class="nav-link" aria-current="page" href="./library/config/login.php"
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
                    /></svg
                ></a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </div>
    <!-- NAVBAR -->

    <!-- COLLECTION -->
    <div class="collection">
      <img src="../asset/img/ada.png" alt="" />
      <div class="top-cln">
        <div class="item-left">
          <button
            class="btn btn-secondary btn-kr"
            type="button"
            data-bs-toggle="offcanvas"
            data-bs-target="#offcanvasBottom"
            aria-controls="offcanvasBottom"
          >
            ADA STORE
          </button>

          <div
            class="offcanvas offcanvas-bottom"
            tabindex="-1"
            id="offcanvasBottom"
            aria-labelledby="offcanvasBottomLabel"
          >
            <div class="offcanvas-header">
              <h5 class="offcanvas-title" id="offcanvasBottomLabel">
                ADA STORE | COLLECTION
              </h5>
              <button
                type="button"
                class="btn-close"
                data-bs-dismiss="offcanvas"
                aria-label="Close"
              ></button>
            </div>
            <div class="offcanvas-body small item-ul">
              <ul>
                <li><b>NEW ARRIVAL</b></li>
                <li><b>COLLECTION</b></li>
                  <li class="li-cln">T-SHIRT</li>
                  <li class="li-cln">JACKET</li>
                  <li class="li-cln">LONG-PANTS</li>
                  <li class="li-cln">SHORT-PANTS</li>
                  <li class="li-cln">SHOES</li>
                  <li class="li-cln">HAT</li>
                  <li class="li-cln">BACK-PACK</li>
                <li><b>SALE</b></li>
              </ul>
            </div>
          </div>
        </div>
        <div class="garis-abu"></div>
        <!-- baju -->
        <div class="item-right">
          <div class="card-group">
            <div class="card">
              <img src="../asset/img/t-shirt/0749bl.jpg" class="card-img-top" alt="..." />
              <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p>lorem</p>
              </div>
            </div>
            <div class="card">
              <img src="../asset/img/t-shirt/0749bl.jpg" class="card-img-top" alt="..." />
              <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p>lorem</p>
              </div>
            </div>
            <div class="card">
              <img src="../asset/img/t-shirt/0749bl.jpg" class="card-img-top" alt="..." />
              <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p>lorem</p>
              </div>
            </div>
          </div>
          <div class="card-group">
            <div class="card">
              <img src="../asset/img/t-shirt/0749bl.jpg" class="card-img-top" alt="..." />
              <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p>lorem</p>
              </div>
            </div>
            <div class="card">
              <img src="../asset/img/t-shirt/0749bl.jpg" class="card-img-top" alt="..." />
              <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p>lorem</p>
              </div>
            </div>
            <div class="card">
              <img src="../asset/img/t-shirt/0749bl.jpg" class="card-img-top" alt="..." />
              <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p>lorem</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- COLLECTION -->

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
