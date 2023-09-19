<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    <link rel="stylesheet" href="bootstrap-5-2/assets/css/bootstrap.min.css">
    <script src="bootstrap-5-2/assets/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="CSS/index.css">
    <style>
        #btn-a
        {
            color:whitesmoke;
        }
        #btn-a:hover {
            color: skyblue;
            }
            .custom-input {
            border-color: white;
        }
    </style>
</head>

<body style="background-image: url('images/img_2.jpg');background-repeat:no-repeat; background-size: cover;">
    <div class="container-fluid">
        <section>
            <div class="row d-flex justify-content-center align-items-center vh-100">
                <div class="col-md-5 border rounded-2 border-light">
                    <h2 class="text-center text-light">Registration</h2>
                    <div class="row d-flex justify-content-center">
                        <div class="col-lg-9">
                            <form class="p-4 bg-transparent" method="POST" action="php/create_user_apply.php">

                                <div class="mb-1">
                                    <label for="name" class="form-label text-light">Name</label>
                                    <input type="text" class="form-control custom-input" id="name" name='fullname' required>
                                </div>

                                <div class="mb-1">
                                    <label for="email" class="form-label text-light">Email</label>
                                    <input type="text" class="form-control custom-input" id="email" name='email' required>
                                </div>

                                <div class="mb-1">
                                    <label for="number" class="form-label text-light">Phone Number</label>
                                    <input type="number" class="form-control custom-input" id="phone_no" name='phone_no' required>
                                </div>
                                <!-- Email input -->
                                <div class="mb-1">
                                    <label for="Username" class="form-label text-light">Username</label>
                                    <input type="text" class="form-control custom-input" id="username" name='username' required>
                                </div>

                                <!-- Password input -->
                                <div class="mb-1">
                                    <label for="Password" class="form-label text-light">Password</label>
                                    <input type="password" class="form-control custom-input" id="password" name='password' required>
                                </div>

                                <div class="mb-3">
                                    <label for="role" class="form-label text-light">Role</label>
                                    <input type="text" class="form-control custom-input" id="role" name='role' value="customer" readonly>
                                </div>
                                <!-- Submit button -->
                                <button type="submit" name='submit'
                                    class="btn btn-info btn-block mb-1 w-100 rounded-1 text-light">Sign in</button>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</body>

</html>