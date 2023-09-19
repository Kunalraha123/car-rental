<?php
include("connection_db.php");
session_start();

if (isset($_POST['username']) && isset($_POST['password'])) {
    // username and password sent from form 
    function test_input($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    $username = test_input($_POST["username"]);
    $password = test_input($_POST["password"]);

    $sql = "SELECT * FROM car_signin";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $credentialsMatch = false;
        foreach ($result as $user) {
            if (
                ($user['username'] == $username) &&
                ($user['password'] == $password)
            ) {  
                
                $_SESSION["fullname"] = $user['fullname'];
                $_SESSION["phone_no"] = $user['phone_no'];
                $_SESSION["email"] = $user['email'];
                $_SESSION["role"] = $user['role'];
                $credentialsMatch = true;

                break;
            }
        } if ($credentialsMatch) {
            // Redirect based on user role
            
                if ($user['role'] == 'customer') {
                   header("location: ../customer.php");
                } elseif ($user['role'] == 'car_rental_agency') {
                   header("location: ../car_rental_agency.php");
                }
            
        }else {
            // Display the "Incorrect Username/Password" alert
            ?>
            <script>
                alert("Incorrect Username/Password! Please enter correct credentials.");
                location.replace("../login.php");
            </script>
            <?php
        }
        
        
    }
}
?>