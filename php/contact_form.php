<?php
session_start();
error_reporting(0);
include("connection_db.php");

if (isset($_POST['submit'])) {
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $email = $_POST['email'];
    $message = $_POST['message'];   

    // Insert the data into the 'car_rent' table
    $query = "INSERT INTO contact_form (first_name, last_name, email, message) 
              VALUES ('$first_name', '$last_name', '$email', '$message')";

    $query_run = mysqli_query($conn, $query);

    if ($query_run) {
        // The car booking was successful
        ?>
        <script>
            alert("Successfully Contacted!");
            location.replace("../contact.php");
        </script>
        <?php
    } else {
        // Handle the case where the car booking failed
        ?>
        <script>
            alert("Car not booked");
            location.replace("../contact.php");
        </script> 
        <?php
    }
}


?>
