<?php
session_start();
include("connection_db.php");

if (isset($_POST['submit'])) {
    $name = $_POST['fullname'];
    $email = $_POST['email'];
    $username = $_POST["username"];
    $password = $_POST["password"];
    $phone_no = $_POST['phone_no'];
    $role = $_POST['role'];

    // Check if the employee code already exists
    $check_query = "SELECT username FROM car_signin WHERE username= '$username'";
    $check_result = mysqli_query($conn, $check_query);

    if (mysqli_num_rows($check_result) > 0) {
        ?>
        <script>
            alert("Username already exists! Try again");
            location.replace("../login.php");
        </script>
        <?php
    } else {
        // Employee code is unique, proceed with insertion
        $query = "INSERT INTO car_signin (fullname, email, username, password, phone_no, role) 
        VALUES ('$name', '$email', '$username', '$password', '$phone_no', '$role')";
        
        $query_run = mysqli_query($conn, $query);

        if ($query_run) {
            if ($role == "customer") {
                ?>
                <script>
                    alert("You are Successfully Registered as a customer!");
                    location.replace("../login.php"); // Redirect to the customer login page
                </script>
                <?php
            } elseif ($role == "car_rental_agency") {
                ?>
                <script>
                    alert("You are Successfully Registered as an agency!");
                    location.replace("../login.php"); // Redirect to the agency login page
                </script>
                <?php
            }
        } else {
            ?>
            <script>
                alert("Error creating user!");
                location.replace("../login.php");
            </script>
            <?php
        }
    }
}
?>
