<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    <link rel="stylesheet" href="bootstrap-5-2/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <script src="bootstrap-5-2/assets/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="CSS/index.css">
    <style>
        #btn-a {
            color: whitesmoke;
        }

        #btn-a:hover {
            color: skyblue;
        }

        .custom-input {
            border-color: white;
        }
    </style>
</head>

<body style="background-image: url('images/img_3.jpg');background-repeat:no-repeat; background-size: cover;">
    <div class="container">
        <section>
            <div class="row d-flex justify-content-center align-items-center vh-100">
                <div class="col-md-5 border rounded-2 border-light">
                    <h2 class="text-center text-light">Login</h2>
                    <div class="row d-flex justify-content-center">
                        <div class="col-lg-9">
                            <form class="p-4" method="POST" action="php/connection_signin.php">
                                <!-- Email input -->
                                <div class="mb-1">
                                    <label for="Username" class="form-label text-light">Username</label>
                                    <input type="text" class="form-control custom-input" id="username" name='username'
                                        required>
                                </div>

                                <!-- Password input -->
                                <div class="mb-2">
                                    <label for="Password" class="form-label text-light">Password</label>
                                    <input type="password" class="form-control custom-input" id="password"
                                        name='password' required>
                                </div>

                                <!-- user type -->
                                <div class="mb-3 text-light">
                                    <label for="mySelect" class="text-light">Select User:</label>
                                    <div>
                                        <input type="radio" id="customer" name="role" value="customer" class="text-light" required>
                                        <label for="customer">Customer</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

                                        <input type="radio" id="car_agency" name="role" value="car_rental_agency" class="text-light" required>
                                        <label for="car_agency">Car Agency</label><br>

                                    </div>
                                </div>
                                <!-- Submit button -->
                                <button type="submit" name='submit'
                                    class="btn btn-info btn-block mb-1 w-100 rounded-1 text-light">Sign in</button>
                            </form>
                            <p class="text-light text-center">Don't have an account? <a href="customer_registration.php"
                                    style="text-decoration:none;" id="btn-a">
                                    Customer</a> / <br><a href="car_agency_registration.php" style="text-decoration:none;"
                                    id="btn-a">
                                    Car Rental Agency</a></p>

                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</body>

</html>