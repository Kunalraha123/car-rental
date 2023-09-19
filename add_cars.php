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
                <a href="add_cars.php">CarRent</a>
              </div>
            </div>

            <div class="col-9  text-right">
              

              <span class="d-inline-block d-lg-none"><a href="#" class="text-white site-menu-toggle js-menu-toggle py-5 text-white"><span class="icon-menu h3 text-white"></span></a></span>

              

              <nav class="site-navigation text-right ml-auto d-none d-lg-block" role="navigation">
              <ul class="site-menu main-menu js-clone-nav ml-auto ">
                <li><a href="car_rental_agency.php" class="nav-link">Home</a></li>
                <li class="active"><a href="add_cars.php" class="nav-link">Add New Cars</a></li>
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
      <div class="ftco-cover-1 overlay innerpage" style="background-image: url('images/hero_1.jpg')">
        <div class="container">
          <div class="row align-items-center justify-content-center">
            <div class="col-lg-6 text-center">
              <h1> Add New Cars</h1>
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
            <form action="php/conn_apply.php" method="post">
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
                    <input type="text" class="spec" name="vehicle_model" value="Kwid">
                  </li>
                  <li>
                    <span>Vehicle Number</span>
                    <input type="text" class="spec" name="vehicle_number" value="AS-01-GC-5467">
                  </li>
                  <li>
                    <span>Seating Capacity</span>
                    <input type="text" class="spec" name="seating_capacity" value="5">
                  </li>
                  <li>
                    <span>Rent/day</span>
                    <input type="text" class="spec" name="rent/day" value="2000">
                  </li>
                </ul>
                <div class="d-flex action">
                <input type="submit" class="btn btn-primary" value="Add" name="submit">
                </div>
              </div>
            </form>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mb-4">
            <div class="item-1">
            <form action="php/conn_apply.php" method="post">
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
                    <input type="text" class="spec" name="vehicle_model" value="Safari">
                  </li>
                  <li>
                    <span>Vehicle Number</span>
                    <input type="text" class="spec" name="vehicle_number" value="AS-01-FA-2453">
                  </li>
                  <li>
                    <span>Seating Capacity</span>
                    <input type="text" class="spec" name="seating_capacity" value="5">
                  </li>
                  <li>
                    <span>Rent/day</span>
                    <input type="text" class="spec" name="rent/day" value="2500">
                  </li>
                </ul>
                <div class="d-flex action">
                <input type="submit" class="btn btn-primary" value="Add" name="submit"> 
                </div>
              </div>
            </form>
            </div>
          </div>


          <div class="col-lg-4 col-md-6 mb-4">
            <div class="item-1">
            <form action="php/conn_apply.php" method="post">
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
                    <input type="text" class="spec" name="vehicle_model" value="Fortuner">
                  </li>
                  <li>
                    <span>Vehicle Number</span>
                    <input type="text" class="spec" name="vehicle_number" value="AS-01-DE-1678">
                  </li>
                  <li>
                    <span>Seating Capacity</span>
                    <input type="text" class="spec" name="seating_capacity" value="5">
                  </li>
                  <li>
                    <span>Rent/day</span>
                    <input type="text" class="spec" name="rent/day" value="10000">
                  </li>
                </ul>
                <div class="d-flex action">
                <input type="submit" class="btn btn-primary" value="Add" name="submit">
                </div>
              </div>
            </form>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mb-4">
            <div class="item-1">
            <form action="php/conn_apply.php" method="post">
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
                    <input type="text" class="spec" name="vehicle_model" value="Bolero">
                  </li>
                  <li>
                    <span>Vehicle Number</span>
                    <input type="text" class="spec" name="vehicle_number" value="AS-01-GR-3452">
                  </li>
                  <li>
                    <span>Seating Capacity</span>
                    <input type="text" class="spec" name="seating_capacity" value="5">
                  </li>
                  <li>
                    <span>Rent/day</span>
                    <input type="text" class="spec" name="rent/day" value="5000">
                  </li>
                </ul>
                <div class="d-flex action">
                <input type="submit" class="btn btn-primary" value="Add" name="submit">
                </div>
              </div>
            </form>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mb-4">
            <div class="item-1">
            <form action="php/conn_apply.php" method="post">
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
                    <input type="text" class="spec" name="vehicle_model" value="Verna">
                  </li>
                  <li>
                    <span>Vehicle Number</span>
                    <input type="text" class="spec" name="vehicle_number" value="AS-01-JD-8569">
                  </li>
                  <li>
                    <span>Seating Capacity</span>
                    <input type="text" class="spec" name="seating_capacity" value="5">
                  </li>
                  <li>
                    <span>Rent/day</span>
                    <input type="text" class="spec" name="rent/day" value="4000">
                  </li>
                </ul>
                <div class="d-flex action">
                   <input type="submit" class="btn btn-primary" value="Add" name="submit">
                </div>
              </div>
            </form>
            </div>
          </div>


          <div class="col-lg-4 col-md-6 mb-4">
            <div class="item-1">
            <form action="php/conn_apply.php" method="post">
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
                    <input type="text" class="spec" name="vehicle_model" value="PUNCH" >
                  </li>
                  <li>
                    <span>Vehicle Number</span>
                    <input type="text" class="spec" name="vehicle_number" value="AS-01-DS-3724">
                  </li>
                  <li>
                    <span>Seating Capacity</span>
                    <input type="text" class="spec" name="seating_capacity" value="5">
                  </li>
                  <li>
                    <span>Rent/day</span>
                    <input type="text" class="spec" name="rent/day" value="6000">
                  </li>
                </ul>
                <div class="d-flex action">
                   <input type="submit" class="btn btn-primary" value="Add" name="submit">
                </div>
              </div>
            </form>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mb-4">
            <div class="item-1">
            <form action="php/conn_apply.php" method="post">
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
                    <input type="text" class="spec" name="vehicle_model" value="Thar">
                  </li>
                  <li>
                    <span>Vehicle Number</span>
                    <input type="text" class="spec" name="vehicle_number" value="AS-01-FV-3189">
                  </li>
                  <li>
                    <span>Seating Capaci
                    <input type="text" class="spec" name="seating_capacity" value="5">
                  </li>
                  <li>
                    <span>Rent/day</span>
                    <input type="text" class="spec" name="rent/day" value="15000">
                  </li>
                </ul>
                <div class="d-flex action">
                   <input type="submit" class="btn btn-primary" value="Add" name="submit">
                </div>
              </div>
            </form>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mb-4">
            <div class="item-1">
            <form action="php/conn_apply.php" method="post">
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
                    <input type="text" class="spec" name="vehicle_model" value="Creta">
                  </li>
                  <li>
                    <span>Vehicle Number</span>
                    <input type="text" class="spec" name="vehicle_number" value="AS-01-UG-2145">
                  </li>
                  <li>
                    <span>Seating Capacity</span>
                    <input type="text" class="spec" name="seating_capacity" value="5">
                  </li>
                  <li>
                    <span>Rent/day</span>
                    <input type="text" class="spec" name="rent/day" value="8000">
                  </li>
                  
                </ul>
                <div class="d-flex action">
                   <input type="submit" class="btn btn-primary" value="Add" name="submit">
                </div>
              </div>
            </form>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mb-4">
            <div class="item-1">
            <form action="php/conn_apply.php" method="post">
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
                    <input type="text" class="spec" name="vehicle_model" value="Scorpio">
                  </li>
        
                    <span>Vehicle Number</span>
                    <input type="text" class="spec" name="vehicle_number" value="AS-01-GT-6754">
                  </li>
                  <li>
                    <span>Seating Capacity</span>
                    <input type="text" class="spec" name="seating_capacity" value="5">
                  </li>
                  <li>
                    <span>Rent/day</span>
                    <input type="text" class="spec" name="rent/day" value="7500">
                  </li>
                </ul>
                <div class="d-flex action">
                  <input type="submit" class="btn btn-primary" value="Add" name="submit">
                </div>
              </div>
            </div>
           </form>
          </div>
        </div>
        
            <div class="ftco-blocks-cover-1">
            </div>

            <div class="dashboard-main">
                <div class="container-fluid">
                    <div class="row py-3">
                        <div class="col-12 d-flex
                            justify-content-between
                            align-items-center">

                        </div>
                    </div>
                    <div class="overview-section p-4">
                        <div class="row overview-section-list gy-4 justify-content-center">
                            <div class="container-fluid">
                                <div class="row gy-2 justify-content-center">

                                    <div class="row my-2 justify-content-center">
                                        <div class="col-lg-12">
                                            <div class="border rounded-2 overflow-auto p-1 justify-content-center"
                                                style="text-align:center;">
                                                <div class="table-responsive">
                                                    <?php
                                                    include("php/connection_db.php");

                                                    $sql = "SELECT * FROM cars_details";

                                                    $result = $conn->query($sql);

                                                    if ($result->num_rows > 0) {
                                                        ?>
                                                        <p class="ms-1 fs-4 text-danger"><i
                                                                class="bi bi-people text-danger fs-4"></i>&nbsp;
                                                            Car Details</p>
                                                        <table class="table table-striped table-hover table-center" id="dataTable"
                                                            style="font-size:14px;">
                                                            <div class="d-flex justify-content-center">
                                                            </div>
                                                            <hr class="text-info">

                                                            <thead>
                                                                <tr>
                                                                    <th scope="col">Vehicle Model</th>
                                                                    <th scope="col">vehicle Number</th>
                                                                    <th scope="col">Rent/Day</th>
                                                                    <th scope="col">Seating Capacity</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody id="myTable">
                                                                <?php
                                                                foreach ($result as $user) {
                                                                    ?>
                                                                    <tr>
                                                                        <td>
                                                                            <?php echo $user['vehicle_model'] ?>
                                                                        </td>
                                                                        <td>
                                                                            <?php echo $user['vehicle_number'] ?>
                                                                        </td>
                                                                        <td>
                                                                            <?php echo $user['rent/day'] ?>
                                                                        </td>
                                                                        <td>
                                                                            <?php echo $user['seating_capacity'] ?>
                                                                        </td>
                                                                    </tr>
                                                                    <?php
                                                                }
                                                                ?>
                                                            </tbody>


                                                            <script>
                                                                $(document).ready(function () {

                                                                    var table = $('#dataTable').DataTable();

                                                                    $('#showEntriesInput').on('change', function () {
                                                                        var entries = parseInt(this.value, 4);
                                                                        table.page.len(entries).draw();
                                                                    });
                                                                });
                                                            </script>
                                                        </table>
                                                        <?php
                                                    }

                                                    ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
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

