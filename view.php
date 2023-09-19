<?php
session_start();
if (isset($_SESSION['role']) == 'car_rental_agency') {
    ?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Car Rental Agency</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
            integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
            crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="stylesheet" href="bootstrap-5-2/assets/css/bootstrap.min.css">
        <script src="bootstrap-5-2/assets/js/bootstrap.min.js"></script>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script src="https://cdn.datatables.net/1.11.4/js/jquery.dataTables.js"></script>
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.4/css/jquery.dataTables.css">

        <!-- <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
             <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
                integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
        <link rel="stylesheet" href="https://cdn.datatables.net/1.11.4/css/jquery.dataTables.min.css">
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script src="https://cdn.datatables.net/1.11.4/js/jquery.dataTables.js"></script>
        <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900&display=swap" rel="stylesheet">
        <!-- Bootstrap CSS -->
        <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css'>
        <!-- Font Awesome CSS -->
        <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css'>
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

    </head>

    <body>
        <!-- <marquee direction="right"
             style="color:red">
        Geeks for Geeks
    </marquee> -->
        <div class="dashboard-pg text-grey-blue bg-white fluid">
            <header class="site-navbar site-navbar-target" role="banner">

                <div class="container">
                    <div class="row align-items-center position-relative">

                        <div class="col-3 ">
                            <div class="site-logo">
                                <a href="view.php">CarRent</a>
                            </div>
                        </div>

                        <div class="col-9  text-right">


                            <span class="d-inline-block d-lg-none"><a href="#"
                                    class="text-white site-menu-toggle js-menu-toggle py-5 text-white"><span
                                        class="icon-menu h3 text-white"></span></a></span>



                            <nav class="site-navigation text-right ml-auto d-none d-lg-block" role="navigation">
                                <ul class="site-menu main-menu js-clone-nav ml-auto ">
                                    <li><a href="car_rental_agency.php" class="nav-link">Home</a></li>
                                    <li><a href="add_cars.php" class="nav-link">Add New Cars</a></li>
                                    <li><a href="available_agency.php" class="nav-link">Available Cars to rent</a></li>
                                    <li class="active"><a href="view.php" class="nav-link">View Booked Cars</a></li>
                                    <li><a href="contact_agency.php" class="nav-link">Contact</a></li>
                                    <li><a href="php/logout.php" class="nav-link">Logout</a></li>
                                </ul>
                            </nav>
                        </div>


                    </div>
                </div>

            </header>
            <div class="ftco-blocks-cover-1">
                <div class="ftco-cover-1 overlay" style="background-image: url('images/Thar.webp')">
                    <div class="container">
                        <div class="row align-items-center">

                        </div>
                    </div>
                </div>
            </div>

            <div class="dashboard-main">
                <div class="container-fluid">
                    <div class="row py-3">
                        <div class="col-12 d-flex
                            justify-content-between
                            align-items-center">

                        </div>
                    </div>
                    <div class="overview-section p-4 border border-white rounded-2">
                        <div class="row overview-section-list gy-4">
                            <div class="container-fluid">
                                <div class="row gy-2 justify-content-center">
                                    <div class="col-lg-4">
                                    </div>

                                    <div class="row my-2 justify-content-center">
                                        <div class="col-lg-12">
                                            <div class="border rounded-2 border-info overflow-auto p-1"
                                                style="text-align:center;">
                                                <div class="table-responsive">
                                                    <?php
                                                    include("php/connection_db.php");

                                                    $sql = "SELECT * FROM car_rent";

                                                    $result = $conn->query($sql);

                                                    if ($result->num_rows > 0) {
                                                        ?>
                                                        <p class="ms-1 fs-4 text-danger"><i
                                                                class="bi bi-people text-danger fs-4"></i>&nbsp;
                                                            Car Booking Details</p>
                                                        <table class="table table-striped table-hover" id="dataTable"
                                                            style="font-size:14px;">
                                                            <div class="d-flex justify-content-end">
                                                            </div>
                                                            <hr class="text-info">

                                                            <thead>
                                                                <tr>
                                                                    <th scope="col">Customer Name</th>
                                                                    <th scope="col">Vehicle Model</th>
                                                                    <th scope="col">vehicle Number</th>
                                                                    <th scope="col">Rent/Day</th>
                                                                    <th scope="col">Rent Days</th>
                                                                    <th scope="col">Rent Start Date</th>
                                                                    <th scope="col">Seating Capacity</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody id="myTable">
                                                                <?php
                                                                foreach ($result as $user) {
                                                                    ?>
                                                                    <tr>
                                                                        <td>
                                                                            <?php echo $user['customer_name'] ?>
                                                                        </td>
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
                                                                            <?php echo $user['days'] ?>
                                                                        </td>
                                                                        <td>
                                                                            <?php echo $user['start_date'] ?>
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




        <!-- jquery -->
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script src="https://cdn.datatables.net/1.11.4/js/jquery.dataTables.js"></script>



    </body>

    </html>

    <?php
} else {
    header("location: login.php");
}
?>