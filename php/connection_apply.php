<?php
session_start();
// error_reporting(0);
include("connection_db.php");

if (isset($_POST['submit'])) {
    $vehicle_model = $_POST['vehicle_model'];
    $vehicle_number = $_POST['vehicle_number'];
    $rent = $_POST['rent/day'];
    $days = $_POST['days'];
    $start_date = $_POST['start_date'];
    $seating_capacity = $_POST['seating_capacity'];
    
    // Retrieve the customer's name from the session
    $fullname = $_SESSION['fullname'];

    // Insert the data into the 'car_rent' table
    $query = "INSERT INTO car_rent (vehicle_model, vehicle_number, `rent/day`, days, start_date, seating_capacity, customer_name) 
              VALUES ('$vehicle_model', '$vehicle_number', '$rent', '$days', '$start_date', '$seating_capacity', '$fullname')";

    $query_run = mysqli_query($conn, $query);

    if ($query_run) {
        // The car booking was successful
        ?>
        <script>
            alert("Congratulations! You have Successfully booked the car.");
            location.replace("../available_logged_in.php");
        </script>
        <?php
    } else {
        // Handle the case where the car booking failed
        ?>
        <script>
            alert("Car not booked");
            location.replace("../available_logged_in.php");
        </script> 
        <?php
    }
}


?>
