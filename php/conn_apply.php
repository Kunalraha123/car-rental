<?php
session_start();
// error_reporting(0);
include("connection_db.php");

if (isset($_POST['submit'])) {
    $vehicle_model = $_POST['vehicle_model'];
    $vehicle_number = $_POST['vehicle_number'];
    $rent = $_POST['rent/day'];
    $seating_capacity = $_POST['seating_capacity'];
    $fullname = $_SESSION['fullname'];

        $query = "INSERT INTO cars_details (vehicle_model, vehicle_number, seating_capacity, `rent/day`)VALUES ('$vehicle_model','$vehicle_number','$seating_capacity','$rent')";

        $query_run = mysqli_query($conn, $query);

        if ($query_run) {
            ?>
            <script>
                alert("Congratulations! You have Successfully added the car details.");
                location.replace("../add_cars.php");
            </script>
            <?php
        } else {
            ?>
            <script>
                alert("Car not booked");
                location.replace("../add_cars.php");
            </script> 
            <?php
        }
    
    }
?>
