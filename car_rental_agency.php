<?php
session_start();
if (isset($_SESSION['role']) == 'car_rental_agency') {
?>
<!doctype html>
<html lang="en">

<head>
  <title>Car Rental Agency</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link href="https://fonts.googleapis.com/css?family=DM+Sans:300,400,700&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="fonts/icomoon/style.css">

  <link rel="stylesheet" href="CSS/bootstrap.min.css">
  <link rel="stylesheet" href="CSS/bootstrap-datepicker.css">
  <link rel="stylesheet" href="CSS/jquery.fancybox.min.css">
  <link rel="stylesheet" href="CSS/owl.carousel.min.css">
  <link rel="stylesheet" href="CSS/owl.theme.default.min.css">
  <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">
  <link rel="stylesheet" href="CSS/aos.css">

  <!-- MAIN CSS -->
  <link rel="stylesheet" href="CSS/style.css">
  <style>
    .nonloop-block-13 .owl-nav {
      display: none;
    }
  </style>

</head>

<body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">


  <div class="site-wrap" id="home-section">

    <div class="site-mobile-menu site-navbar-target">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div>



    <header class="site-navbar site-navbar-target" role="banner">

      <div class="container">
        <div class="row align-items-center position-relative">

          <div class="col-3 ">
            <div class="site-logo">
              <a href="car_rental_agency.php">CarRent</a>
            </div>
          </div>

          <div class="col-9  text-right">


            <span class="d-inline-block d-lg-none"><a href="#"
                class="text-white site-menu-toggle js-menu-toggle py-5 text-white"><span
                  class="icon-menu h3 text-white"></span></a></span>



            <nav class="site-navigation text-right ml-auto d-none d-lg-block" role="navigation">
              <ul class="site-menu main-menu js-clone-nav ml-auto ">
                <li class="active"><a href="car_rental_agency.php" class="nav-link">Home</a></li>
                <li><a href="add_cars.php" class="nav-link">Add New Cars</a></li>
                <li><a href="available_agency.php" class="nav-link">Available Cars to rent</a></li>
                <li><a href="view.php" class="nav-link">View Booked Cars</a></li>
                <li><a href="contact_agency.php" class="nav-link">Contact</a></li>
                <li><a href="php/logout.php" class="nav-link">Logout</a></li>
              </ul>
            </nav>
          </div>


        </div>
      </div>

    </header>

    <div class="ftco-blocks-cover-1">
      <div class="ftco-cover-1 overlay" style="background-image: url('images/img_4.jpg')">
        <div class="container">
          <div class="row align-items-center">

          </div>
        </div>
      </div>
    </div>

    <div class="site-section bg-light">
      <div class="container">
        <div class="row">
          <p class="mb-4">
          <h1 class="text-center mx-2">Cars available for Rent</h1>
          </p>
          <!-- <p>
              <a href="#" class="btn btn-primary custom-prev">Previous</a>
              <span class="mx-2">/</span>
              <a href="#" class="btn btn-primary custom-next display-none">Next</a>
            </p> -->

          <div class="col-lg-12">
            <div class="nonloop-block-13 owl-carousel">
              <div class="item-1">
                <a href="#"><img src="images/kwid.webp" alt="Image" class="img-fluid"></a>
                <div class="item-1-contents">
                  <div class="text-center">
                    <h3><a href="#">Renault Kwid</a></h3>
                    <div class="rating">
                      <span class="icon-star text-warning"></span>
                      <span class="icon-star text-warning"></span>
                      <span class="icon-star text-warning"></span>
                      <span class="icon-star text-warning"></span>
                      <span class="icon-star text-warning"></span>
                    </div>

                  </div>
                  <ul class="specs">
                    <li>
                      <span>Vehicle Model</span>
                      <span class="spec">Kwid</span>
                    </li>
                    <li>
                      <span>Vehicle Number</span>
                      <span class="spec">AS-01-GC-5467</span>
                    </li>
                    <li>
                      <span>Seating Capacity</span>
                      <span class="spec">5</span>
                    </li>
                    <li>
                      <span>Rent/day</span>
                      <span class="spec">Rs.2000</span>
                    </li>
                  </ul>
                  <div class="d-flex action">
                <a href="#" class="btn btn-primary" id="rentCarBtn">Rent Car</a>
                </div>
                <script>
                    // JavaScript to handle the button click event
                    document.getElementById('rentCarBtn').addEventListener('click', function(event) {
                        event.preventDefault(); // Prevent the default link behavior

                        // Display the message "You are not authorized"
                        alert('You are not authorized to book a car.');
                    });
                </script>
                </div>
              </div>
              <div class="item-1">
                <a href="#"><img src="images/safari.webp" alt="Image" class="img-fluid"></a>
                <div class="item-1-contents">
                  <div class="text-center">
                    <h3><a href="#">TATA Safari</a></h3>
                    <div class="rating">
                      <span class="icon-star text-warning"></span>
                      <span class="icon-star text-warning"></span>
                      <span class="icon-star text-warning"></span>
                      <span class="icon-star text-warning"></span>
                      <span class="icon-star text-warning"></span>
                    </div>
                  </div>
                  <ul class="specs">
                    <li>
                      <span>Vehicle Model</span>
                      <span class="spec">Safari</span>
                    </li>
                    <li>
                      <span>Vehicle Number</span>
                      <span class="spec">AS-01-FA-2453</span>
                    </li>
                    <li>
                      <span>Seating Capacity</span>
                      <span class="spec">5</span>
                    </li>
                    <li>
                      <span>Rent/day</span>
                      <span class="spec">Rs.2500</span>
                    </li>
                  </ul>
                  <div class="d-flex action">
                <a href="#" class="btn btn-primary" id="rentCarBtn1">Rent Car</a>
                </div>
                <script>
                    // JavaScript to handle the button click event
                    document.getElementById('rentCarBtn1').addEventListener('click', function(event) {
                        event.preventDefault(); // Prevent the default link behavior

                        // Display the message "You are not authorized"
                        alert('You are not authorized to book a car.');
                    });
                </script>
                </div>
              </div>

              <div class="item-1">
                <a href="#"><img src="images/fortune.webp" alt="Image" class="img-fluid"></a>
                <div class="item-1-contents">
                  <div class="text-center">
                    <h3><a href="#">Toyota Fortuner</a></h3>
                    <div class="rating">
                      <span class="icon-star text-warning"></span>
                      <span class="icon-star text-warning"></span>
                      <span class="icon-star text-warning"></span>
                      <span class="icon-star text-warning"></span>
                      <span class="icon-star text-warning"></span>
                    </div>
                  </div>
                  <ul class="specs">
                    <li>
                      <span>Vehicle Model</span>
                      <span class="spec">Fortuner</span>
                    </li>
                    <li>
                      <span>Vehicle Number</span>
                      <span class="spec">AS-01-DE-1678</span>
                    </li>
                    <li>
                      <span>Seating Capacity</span>
                      <span class="spec">5</span>
                    </li>
                    <li>
                      <span>Rent/day</span>
                      <span class="spec">Rs.10000</span>
                    </li>
                  </ul>
                  <div class="d-flex action">
                <a href="#" class="btn btn-primary" id="rentCarBtn2">Rent Car</a>
                </div>
                <script>
                    // JavaScript to handle the button click event
                    document.getElementById('rentCarBtn2').addEventListener('click', function(event) {
                        event.preventDefault(); // Prevent the default link behavior

                        // Display the message "You are not authorized"
                        alert('You are not authorized to book a car.');
                    });
                </script>
                </div>
              </div>


              <div class="item-1">
                <a href="#"><img src="images/bolero.webp" alt="Image" class="img-fluid"></a>
                <div class="item-1-contents">
                  <div class="text-center">
                    <h3><a href="#">Mahindra Bolero</a></h3>
                    <div class="rating">
                      <span class="icon-star text-warning"></span>
                      <span class="icon-star text-warning"></span>
                      <span class="icon-star text-warning"></span>
                      <span class="icon-star text-warning"></span>
                      <span class="icon-star text-warning"></span>
                    </div>
                  </div>
                  <ul class="specs">
                    <li>
                      <span>Vehicle Model</span>
                      <span class="spec">Bolero</span>
                    </li>
                    <li>
                      <span>Vehicle Number</span>
                      <span class="spec">AS-01-GR-3452</span>
                    </li>
                    <li>
                      <span>Seating Capacity</span>
                      <span class="spec">5</span>
                    </li>
                    <li>
                      <span>Rent/day</span>
                      <span class="spec">Rs.5000</span>
                    </li>
                  </ul>
                  <div class="d-flex action">
                <a href="#" class="btn btn-primary" id="rentCarBtn3">Rent Car</a>
                </div>
                <script>
                    // JavaScript to handle the button click event
                    document.getElementById('rentCarBtn3').addEventListener('click', function(event) {
                        event.preventDefault(); // Prevent the default link behavior

                        // Display the message "You are not authorized"
                        alert('You are not authorized to book a car.');
                    });
                </script>
                </div>
              </div>
            </div>


            <div class="nonloop-block-13 owl-carousel">
              <div class="item-1">
                <a href="#"><img src="images/verna.webp" alt="Image" class="img-fluid"></a>
                <div class="item-1-contents">
                  <div class="text-center">
                    <h3><a href="#">Hyundai Verna</a></h3>
                    <div class="rating">
                      <span class="icon-star text-warning"></span>
                      <span class="icon-star text-warning"></span>
                      <span class="icon-star text-warning"></span>
                      <span class="icon-star text-warning"></span>
                      <span class="icon-star text-warning"></span>
                    </div>
                  </div>
                  <ul class="specs">
                    <li>
                      <span>Vehicle Model</span>
                      <span class="spec">Verna</span>
                    </li>
                    <li>
                      <span>Vehicle Number</span>
                      <span class="spec">As-01-JD-8569</span>
                    </li>
                    <li>
                      <span>Seating Capacity</span>
                      <span class="spec">5</span>
                    </li>
                    <li>
                      <span>Rent/day</span>
                      <span class="spec">Rs.4000</span>
                    </li>
                  </ul>
                  <div class="d-flex action">
                <a href="#" class="btn btn-primary" id="rentCarBtn4">Rent Car</a>
                </div>
                <script>
                    // JavaScript to handle the button click event
                    document.getElementById('rentCarBtn4').addEventListener('click', function(event) {
                        event.preventDefault(); // Prevent the default link behavior

                        // Display the message "You are not authorized"
                        alert('You are not authorized to book a car.');
                    });
                </script>
                </div>
              </div>

              <div class="item-1">
                <a href="#"><img src="images/jeep.jpeg" alt="Image" class="img-fluid"></a>
                <div class="item-1-contents">
                  <div class="text-center">
                    <h3><a href="#">Jeep</a></h3>
                    <div class="rating">
                      <span class="icon-star text-warning"></span>
                      <span class="icon-star text-warning"></span>
                      <span class="icon-star text-warning"></span>
                      <span class="icon-star text-warning"></span>
                      <span class="icon-star text-warning"></span>
                    </div>
                  </div>
                  <ul class="specs">
                    <li>
                      <span>Vehicle Model</span>
                      <span class="spec">Jeep</span>
                    </li>
                    <li>
                      <span>Vehicle Number</span>
                      <span class="spec">AS-01-DS-3724</span>
                    </li>
                    <li>
                      <span>Seating Capacity</span>
                      <span class="spec">5</span>
                    </li>
                    <li>
                      <span>Rent/day</span>
                      <span class="spec">Rs.6000</span>
                    </li>
                  </ul>
                  <div class="d-flex action">
                <a href="#" class="btn btn-primary" id="rentCarBtn5">Rent Car</a>
                </div>
                <script>
                    // JavaScript to handle the button click event
                    document.getElementById('rentCarBtn5').addEventListener('click', function(event) {
                        event.preventDefault(); // Prevent the default link behavior

                        // Display the message "You are not authorized"
                        alert('You are not authorized to book a car.');
                    });
                </script>
                </div>
              </div>

              <div class="item-1">
                <a href="#"><img src="images/punch.webp" alt="Image" class="img-fluid"></a>
                <div class="item-1-contents">
                  <div class="text-center">
                    <h3><a href="#">TATA PUNCH </a></h3>
                    <div class="rating">
                      <span class="icon-star text-warning"></span>
                      <span class="icon-star text-warning"></span>
                      <span class="icon-star text-warning"></span>
                      <span class="icon-star text-warning"></span>
                      <span class="icon-star text-warning"></span>
                    </div>
                  </div>
                  <ul class="specs">
                    <li>
                      <span>Vehicle Model</span>
                      <span class="spec">PUNCH</span>
                    </li>
                    <li>
                      <span>Vehicle Number</span>
                      <span class="spec">As-01-ER-2981</span>
                    </li>
                    <li>
                      <span>Seating Capacity</span>
                      <span class="spec">5</span>
                    </li>
                    <li>
                      <span>Rent/day</span>
                      <span class="spec">Rs.7000</span>
                    </li>
                  </ul>
                  <div class="d-flex action">
                <a href="#" class="btn btn-primary" id="rentCarBtn6">Rent Car</a>
                </div>
                <script>
                    // JavaScript to handle the button click event
                    document.getElementById('rentCarBtn6').addEventListener('click', function(event) {
                        event.preventDefault(); // Prevent the default link behavior

                        // Display the message "You are not authorized"
                        alert('You are not authorized to book a car.');
                    });
                </script>
                </div>
              </div>

              <div class="item-1">
                <a href="#"><img src="images/Thar.webp" alt="Image" class="img-fluid"></a>
                <div class="item-1-contents">
                  <div class="text-center">
                    <h3><a href="#">Mahindra Thar</a></h3>
                    <div class="rating">
                      <span class="icon-star text-warning"></span>
                      <span class="icon-star text-warning"></span>
                      <span class="icon-star text-warning"></span>
                      <span class="icon-star text-warning"></span>
                      <span class="icon-star text-warning"></span>
                    </div>
                  </div>
                  <ul class="specs">
                    <li>
                      <span>Vehicle Model</span>
                      <span class="spec">Thar</span>
                    </li>
                    <li>
                      <span>Vehicle Number</span>
                      <span class="spec">AS-01-FV-3189</span>
                    </li>
                    <li>
                      <span>Seating Capacity</span>
                      <span class="spec">5</span>
                    </li>
                    <li>
                      <span>Rent/day</span>
                      <span class="spec">Rs.15000</span>
                    </li>
                  </ul>
                  <div class="d-flex action">
                <a href="#" class="btn btn-primary" id="rentCarBtn7">Rent Car</a>
                </div>
                <script>
                    // JavaScript to handle the button click event
                    document.getElementById('rentCarBtn7').addEventListener('click', function(event) {
                        event.preventDefault(); // Prevent the default link behavior

                        // Display the message "You are not authorized"
                        alert('You are not authorized to book a car.');
                    });
                </script>
                </div>
              </div>

              <div class="item-1">
                <a href="#"><img src="images/creta.webp" alt="Image" class="img-fluid"></a>
                <div class="item-1-contents">
                  <div class="text-center">
                    <h3><a href="#">Hyundai CRETA </a></h3>
                    <div class="rating">
                      <span class="icon-star text-warning"></span>
                      <span class="icon-star text-warning"></span>
                      <span class="icon-star text-warning"></span>
                      <span class="icon-star text-warning"></span>
                      <span class="icon-star text-warning"></span>
                    </div>
                  </div>
                  <ul class="specs">
                    <li>
                      <span>Vehicle Model</span>
                      <span class="spec">Creta</span>
                    </li>
                    <li>
                      <span>Vehicle Number</span>
                      <span class="spec">AS-01-UG-2145</span>
                    </li>
                    <li>
                      <span>Seating Capacity</span>
                      <span class="spec">5</span>
                    </li>
                    <li>
                      <span>Rent/day</span>
                      <span class="spec">Rs.8000</span>
                    </li>
                  </ul>
                  <div class="d-flex action">
                <a href="#" class="btn btn-primary" id="rentCarBtn8">Rent Car</a>
                </div>
                <script>
                    // JavaScript to handle the button click event
                    document.getElementById('rentCarBtn8').addEventListener('click', function(event) {
                        event.preventDefault(); // Prevent the default link behavior

                        // Display the message "You are not authorized"
                        alert('You are not authorized to book a car.');
                    });
                </script>
                </div>
              </div>

              <div class="item-1">
                <a href="#"><img src="images/scorpio.webp" alt="Image" class="img-fluid"></a>
                <div class="item-1-contents">
                  <div class="text-center">
                    <h3><a href="#">Mahindra Scorpio</a></h3>
                    <div class="rating">
                      <span class="icon-star text-warning"></span>
                      <span class="icon-star text-warning"></span>
                      <span class="icon-star text-warning"></span>
                      <span class="icon-star text-warning"></span>
                      <span class="icon-star text-warning"></span>
                    </div>
                  </div>
                  <ul class="specs">
                    <li>
                      <span>Vehicle Model</span>
                      <span class="spec">Scorpio</span>
                    </li>
                    <li>
                      <span>Vehicle Number</span>
                      <span class="spec">AS-01-GT-6754</span>
                    </li>
                    <li>
                      <span>Seating Capacity</span>
                      <span class="spec">5</span>
                    </li>
                    <li>
                      <span>Rent/day</span>
                      <span class="spec">Rs.7500</span>
                    </li>
                  </ul>
                  <div class="d-flex action">
                <a href="#" class="btn btn-primary" id="rentCarBtn9">Rent Car</a>
                </div>
                <script>
                    // JavaScript to handle the button click event
                    document.getElementById('rentCarBtn9').addEventListener('click', function(event) {
                        event.preventDefault(); // Prevent the default link behavior

                        // Display the message "You are not authorized"
                        alert('You are not authorized to book a car.');
                    });
                </script>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.sticky.js"></script>
    <script src="js/jquery.waypoints.min.js"></script>
    <script src="js/jquery.animateNumber.min.js"></script>
    <script src="js/jquery.fancybox.min.js"></script>
    <script src="js/jquery.easing.1.3.js"></script>
    <script src="js/bootstrap-datepicker.min.js"></script>
    <script src="js/aos.js"></script>

    <script src="js/main.js"></script>

</body>

</html>
    <?php
    } else {
        header("location:login.php");
    }
?>