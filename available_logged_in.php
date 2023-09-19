<?php
session_start();
if (isset($_SESSION['role'])=='customer') {
  if (isset($_SESSION['fullname']) && isset($_SESSION['email']) && isset($_SESSION['phone_no'])) {
?>
<!doctype html>
<html lang="en">

<head>
  <title>Car Rental Agency</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link href="https://fonts.googleapis.com/css?family=DM+Sans:300,400,700&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="fonts/icomoon/style.css">

  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/bootstrap-datepicker.css">
  <link rel="stylesheet" href="css/jquery.fancybox.min.css">
  <link rel="stylesheet" href="css/owl.carousel.min.css">
  <link rel="stylesheet" href="css/owl.theme.default.min.css">
  <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">
  <link rel="stylesheet" href="css/aos.css">

  <!-- MAIN CSS -->
  <link rel="stylesheet" href="css/style.css">

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
              <a href="available_logged_in.php">CarRent</a>
            </div>
          </div>

          <div class="col-9  text-right">


            <span class="d-inline-block d-lg-none"><a href="#"
                class="text-white site-menu-toggle js-menu-toggle py-5 text-white"><span
                  class="icon-menu h3 text-white"></span></a></span>



            <nav class="site-navigation text-right ml-auto d-none d-lg-block" role="navigation">
              <ul class="site-menu main-menu js-clone-nav ml-auto ">
                <li><a href="customer.php" class="nav-link">Home</a></li>
                <li class="active"><a href="available_logged_in.php" class="nav-link">Available Cars to rent</a></li>
                <li><a href="contact.php" class="nav-link">Contact</a></li>
                <li><a href="php/logout.php" class="nav-link">Logout</a></li>
              </ul>
            </nav>
          </div>


        </div>
      </div>

    </header>

    <div class="ftco-blocks-cover-1">
      <div class="ftco-cover-1 overlay innerpage" style="background-image: url('images/img_1.jpg')">
        <div class="container">
          <div class="row align-items-center justify-content-center">
            <div class="col-lg-6 text-center">

            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="site-section bg-light">
      <div class="container">
        <h1> <span>Cars Available To Rent</span></h1>
        <div class="row">
          <div class="col-lg-4 col-md-6 mb-4">
            <div class="item-1">
            <form action="php/connection_apply.php" method="post">
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
                    <input type="text" class="spec" name="vehicle_model" value="Kwid" readonly>
                  </li>
                  <li>
                    <span>Vehicle Number</span>
                    <input type="text" class="spec" name="vehicle_number" value="AS-01-GC-5467" readonly>
                  </li>
                  <li>
                    <span>Seating Capacity</span>
                    <input type="text" class="spec" name="seating_capacity" value="5" readonly>
                  </li>
                  <li>
                    <span>Rent/day</span>
                    <input type="text" class="spec" name="rent/day" value="2000" readonly>
                  </li>
                  <li>
                      <label for="rentDays">Number of days to rent:</label>
                      <select id="rentDays" name="days" class="spec">
                      <option value="select">select</option>
                      <option value="1">1 days</option>
                      <option value="2">2 days</option>
                      <option value="3">3 days</option>
                      <option value="4">4 days</option>
                      <option value="5">5 days</option>
                      <option value="6">6 days</option>
                      <option value="7">7 days</option>
                      </select>
                    </li>
                    <li>
                        <label for="rentalDate">Rental Start Date:</label>
                        <input type="date" id="rentalDate" name="start_date" class="spec" required>
                    </li>
                </ul>
                <div class="d-flex action">
                <input type="submit" class="btn btn-primary" value="Rent Car" name="submit">
                </div>
              </div>
            </form>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mb-4">
            <div class="item-1">
            <form action="php/connection_apply.php" method="post">
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
                    <input type="text" class="spec" name="vehicle_model" value="Safari" readonly>
                  </li>
                  <li>
                    <span>Vehicle Number</span>
                    <input type="text" class="spec" name="vehicle_number" value="AS-01-FA-2453" readonly>
                  </li>
                  <li>
                    <span>Seating Capacity</span>
                    <input type="text" class="spec" name="seating_capacity" value="5" readonly>
                  </li>
                  <li>
                    <span>Rent/day</span>
                    <input type="text" class="spec" name="rent/day" value="2500" readonly>
                  </li>
                  <li>
                      <label for="rentDays">Number of days to rent:</label>
                      <select id="rentDays" name="days" class="spec">
                      <option value="select">select</option>
                      <option value="select">select</option>
                      <option value="1">1 days</option>
                      <option value="2">2 days</option>
                      <option value="3">3 days</option>
                      <option value="4">4 days</option>
                      <option value="5">5 days</option>
                      <option value="6">6 days</option>
                      <option value="7">7 days</option>
                      </select>
                    </li>
                    <li>
                        <label for="rentalDate">Rental Start Date:</label>
                        <input type="date" id="rentalDate" name="start_date" class="spec" required>
                    </li>
                </ul>
                <div class="d-flex action">
                <input type="submit" class="btn btn-primary" value="Rent Car"name="submit">
                </div>
              </div>
            </form>
            </div>
          </div>


          <div class="col-lg-4 col-md-6 mb-4">
            <div class="item-1">
            <form action="php/connection_apply.php" method="post">
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
                    <input type="text" class="spec" name="vehicle_model" value="Fortuner" readonly>
                  </li>
                  <li>
                    <span>Vehicle Number</span>
                    <input type="text" class="spec" name="vehicle_number" value="AS-01-DE-1678" readonly>
                  </li>
                  <li>
                    <span>Seating Capacity</span>
                    <input type="text" class="spec" name="seating_capacity" value="5" readonly>
                  </li>
                  <li>
                    <span>Rent/day</span>
                    <input type="text" class="spec" name="rent/day" value="10000" readonly>
                  </li>
                  <li>
                      <label for="rentDays">Number of days to rent:</label>
                      <select id="rentDays" name="days" class="spec">
                      <option value="select">select</option>
                      <option value="select">select</option>
                      <option value="1">1 days</option>
                      <option value="2">2 days</option>
                      <option value="3">3 days</option>
                      <option value="4">4 days</option>
                      <option value="5">5 days</option>
                      <option value="6">6 days</option>
                      <option value="7">7 days</option>
                      </select>
                    </li>
                    <li>
                        <label for="rentalDate">Rental Start Date:</label>
                        <input type="date" id="rentalDate" name="start_date" class="spec" required>
                    </li>
                </ul>
                <div class="d-flex action">
                <input type="submit" class="btn btn-primary" value="Rent Car" name="submit">
                </div>
              </div>
            </form>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mb-4">
            <div class="item-1">
            <form action="php/connection_apply.php" method="post">
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
                    <input type="text" class="spec" name="vehicle_model" value="Bolero" readonly>
                  </li>
                  <li>
                    <span>Vehicle Number</span>
                    <input type="text" class="spec" name="vehicle_number" value="AS-01-GR-3452" readonly>
                  </li>
                  <li>
                    <span>Seating Capacity</span>
                    <input type="text" class="spec" name="seating_capacity" value="5" readonly>
                  </li>
                  <li>
                    <span>Rent/day</span>
                    <input type="text" class="spec" name="rent/day" value="5000" readonly>
                  </li>
                  <li>
                      <label for="rentDays">Number of days to rent:</label>
                      <select id="rentDays" name="days" class="spec">
                      <option value="select">select</option>
                      <option value="select">select</option>
                      <option value="1">1 days</option>
                      <option value="2">2 days</option>
                      <option value="3">3 days</option>
                      <option value="4">4 days</option>
                      <option value="5">5 days</option>
                      <option value="6">6 days</option>
                      <option value="7">7 days</option>
                      </select>
                    </li>
                    <li>
                        <label for="rentalDate">Rental Start Date:</label>
                        <input type="date" id="rentalDate" name="start_date" class="spec" required>
                    </li>
                </ul>
                <div class="d-flex action">
                <input type="submit" class="btn btn-primary" value="Rent Car" name="submit">
                </div>
              </div>
            </form>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mb-4">
            <div class="item-1">
            <form action="php/connection_apply.php" method="post">
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
                    <input type="text" class="spec" name="vehicle_model" value="Verna" readonly>
                  </li>
                  <li>
                    <span>Vehicle Number</span>
                    <input type="text" class="spec" name="vehicle_number" value="AS-01-JD-8569" readonly>
                  </li>
                  <li>
                    <span>Seating Capacity</span>
                    <input type="text" class="spec" name="seating_capacity" value="5" readonly>
                  </li>
                  <li>
                    <span>Rent/day</span>
                    <input type="text" class="spec" name="rent/day" value="4000" readonly>
                  </li>
                  <li>
                      <label for="rentDays">Number of days to rent:</label>
                      <select id="rentDays" name="days" class="spec">
                      <option value="select">select</option>
                      <option value="select">select</option>
                      <option value="1">1 days</option>
                      <option value="2">2 days</option>
                      <option value="3">3 days</option>
                      <option value="4">4 days</option>
                      <option value="5">5 days</option>
                      <option value="6">6 days</option>
                      <option value="7">7 days</option>
                      </select>
                    </li>
                    <li>
                        <label for="rentalDate">Rental Start Date:</label>
                        <input type="date" id="rentalDate" name="start_date" class="spec" required>
                    </li>
                </ul>
                <div class="d-flex action">
                   <input type="submit" class="btn btn-primary" value="Rent Car" name="submit">
                </div>
              </div>
            </form>
            </div>
          </div>


          <div class="col-lg-4 col-md-6 mb-4">
            <div class="item-1">
            <form action="php/connection_apply.php" method="post">
              <a href="#"><img src="images/punch.webp" alt="Image" class="img-fluid"></a>
              <div class="item-1-contents">
                <div class="text-center">
                  <h3><a href="#">TATA PUNCH</a></h3>
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
                    <input type="text" class="spec" name="vehicle_model" value="PUNCH" readonly>
                  </li>
                  <li>
                    <span>Vehicle Number</span>
                    <input type="text" class="spec" name="vehicle_number" value="AS-01-DS-3724" readonly>
                  </li>
                  <li>
                    <span>Seating Capacity</span>
                    <input type="text" class="spec" name="seating_capacity" value="5" readonly>
                  </li>
                  <li>
                    <span>Rent/day</span>
                    <input type="text" class="spec" name="rent/day" value="6000" readonly>
                  </li>
                  <li>
                      <label for="rentDays">Number of days to rent:</label>
                      <select id="rentDays" name="days" class="spec">
                      <option value="select">select</option>
                      <option value="select">select</option>
                      <option value="1">1 days</option>
                      <option value="2">2 days</option>
                      <option value="3">3 days</option>
                      <option value="4">4 days</option>
                      <option value="5">5 days</option>
                      <option value="6">6 days</option>
                      <option value="7">7 days</option>
                      </select>
                    </li>
                    <li>
                        <label for="rentalDate">Rental Start Date:</label>
                        <input type="date" id="rentalDate" name="start_date" class="spec" required>
                    </li>
                </ul>
                <div class="d-flex action">
                   <input type="submit" class="btn btn-primary" value="Rent Car" name="submit">
                </div>
              </div>
            </form>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mb-4">
            <div class="item-1">
            <form action="php/connection_apply.php" method="post">
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
                    <input type="text" class="spec" name="vehicle_model" value="Thar" readonly>
                  </li>
                  <li>
                    <span>Vehicle Number</span>
                    <input type="text" class="spec" name="vehicle_number" value="AS-01-FV-3189" readonly>
                  </li>
                  <li>
                    <span>Seating Capacity</span>
                    <input type="text" class="spec" name="seating_capacity" value="5" readonly>
                  </li>
                  <li>
                    <span>Rent/day</span>
                    <input type="text" class="spec" name="rent/day" value="15000" readonly>
                  </li>
                  <li>
                      <label for="rentDays">Number of days to rent:</label>
                      <select id="rentDays" name="days" class="spec">
                      <option value="select">select</option>
                      <option value="1">1 days</option>
                      <option value="2">2 days</option>
                      <option value="3">3 days</option>
                      <option value="4">4 days</option>
                      <option value="5">5 days</option>
                      <option value="6">6 days</option>
                      <option value="7">7 days</option>
                      </select>
                    </li>
                    <li>
                        <label for="rentalDate">Rental Start Date:</label>
                        <input type="date" id="rentalDate" name="start_date" class="spec" required>
                    </li>
                </ul>
                <div class="d-flex action">
                   <input type="submit" class="btn btn-primary" value="Rent Car" name="submit">
                </div>
              </div>
            </form>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mb-4">
            <div class="item-1">
            <form action="php/connection_apply.php" method="post">
              <a href="#"><img src="images/creta.webp" alt="Image" class="img-fluid"></a>
              <div class="item-1-contents">
                <div class="text-center">
                  <h3><a href="#">Hyundai Creta</a></h3>
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
                    <input type="text" class="spec" name="vehicle_model" value="Creta" readonly>
                  </li>
                  <li>
                    <span>Vehicle Number</span>
                    <input type="text" class="spec" name="vehicle_number" value="AS-01-UG-2145" readonly>
                  </li>
                  <li>
                    <span>Seating Capacity</span>
                    <input type="text" class="spec" name="seating_capacity" value="5" readonly>
                  </li>
                  <li>
                    <span>Rent/day</span>
                    <input type="text" class="spec" name="rent/day" value="8000" readonly>
                  </li>
                  <li>
                      <label for="rentDays">Number of days to rent:</label>
                      <select id="rentDays" name="days" class="spec">
                      <option value="select">select</option>
                      <option value="1">1 days</option>
                      <option value="2">2 days</option>
                      <option value="3">3 days</option>
                      <option value="4">4 days</option>
                      <option value="5">5 days</option>
                      <option value="6">6 days</option>
                      <option value="7">7 days</option>
                      </select>
                    </li>
                    <li>
                        <label for="rentalDate">Rental Start Date:</label>
                        <input type="date" id="rentalDate" name="start_date" class="spec" required>
                    </li>
                </ul>
                <div class="d-flex action">
                   <input type="submit" class="btn btn-primary" value="Rent Car" name="submit">
                </div>
              </div>
            </form>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mb-4">
            <div class="item-1">
            <form action="php/connection_apply.php" method="post">
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
                    <input type="text" class="spec" name="vehicle_model" value="Scorpio" readonly>
                  </li>
                  <li>
                    <span>Vehicle Number</span>
                    <input type="text" class="spec" name="vehicle_number" value="AS-01-GT-6754" readonly>
                  </li>
                  <li>
                    <span>Seating Capacity</span>
                    <input type="text" class="spec" name="seating_capacity" value="5" readonly>
                  </li>
                  <li>
                    <span>Rent/day</span>
                    <input type="text" class="spec" name="rent/day" value="7500" readonly>
                  </li>
                  <li>
                      <label for="rentDays">Number of days to rent:</label>
                      <select id="rentDays" name="days" class="spec" required>
                      <option value="select">select</option>
                      <option value="1">1 days</option>
                      <option value="2">2 days</option>
                      <option value="3">3 days</option>
                      <option value="4">4 days</option>
                      <option value="5">5 days</option>
                      <option value="6">6 days</option>
                      <option value="7">7 days</option>
                      </select>
                    </li>
                    <li>
                        <label for="rentalDate">Rental Start Date:</label>
                        <input type="date" id="rentalDate" name="start_date" class="spec" required>
                    </li>
                </ul>
                <div class="d-flex action">
                  <input type="submit" class="btn btn-primary" value="Rent Car" name="submit">
                </div>
              </div>
            </div>
           </form>
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
      header("location: login.php");
  }
} else {
  header("location: login.php");
}
?>