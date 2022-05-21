<?php

session_start(); // Start session
include("config.php");

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Register</title>
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet" />

    <!-- Google Icons -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" />

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />

    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css" />
    <link href="Style/style.css" rel="stylesheet" />
</head>

<body>
    <!-- register -->
    <section class="register p-5">
        <div class="container">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-lg-12 col-xl-11">
                    <div class="card text-black" style="border-radius: 25px">
                        <div class="card-body p-md-5">
                            <div class="row justify-content-center">
                                <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">
                                    <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">Sign up</p>
                                    <form method="POST" action="account_controller.php">

                                        <!-- nama lengkap -->
                                        <div class="d-flex flex-row align-items-center mb-4">
                                            <div class="form-outline flex-fill mb-0">
                                                <label class="form-label" for="nama">Nama Lengkap</label>
                                                <input name="nama" type="text" id="nama" class="form-control" required />
                                            </div>
                                        </div>
                                        <!--end of nama lengkap  -->

                                        <!-- username -->
                                        <div class="d-flex flex-row align-items-center mb-4">
                                            <div class="form-outline flex-fill mb-0">
                                                <label class="form-label" for="username">Username</label>
                                                <input name="username" type="text" id="username" class="form-control" onkeyup="usernameCheck()" required />
                                            </div>
                                        </div>
                                        <!-- end of username -->

                                        <!-- password -->
                                        <div class="d-flex flex-row align-items-center mb-4">
                                            <div class="form-outline flex-fill mb-0">
                                                <label class="form-label" for="password">Password</label>
                                                <input name="password" type="password" id="password" class="form-control" onkeyup="passwordCheck()" required />
                                            </div>
                                        </div>
                                        <!-- end of password -->

                                        <div class="d-flex row gap-2 p-2 mb-3 mb-lg-4 align-content-center">
                                            <button type="submit" name="register" class="btn col text-white btn-primary btn-lg">Daftar</button>
                                            <!-- <a href="login.html"><button type="submit" name="cancel" class="btn btn-warning btn-lg">Cancel</button></a> -->
                                            <a class="btn col btn-danger btn-lg" href="login.php">Cancel</a>
                                        </div>

                                    </form>
                                </div>
                          
                            </div>
                        </div>
                        <!-- </div> -->
                    </div>
                </div>
            </div>
    </section>
    <!-- register -->

    <!-- js bootstrap template -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>

    <!-- Template Main JS File -->
    <script src="JS/script.js"></script>
    <!-- <script src="js/main.js"></script> -->
</body>

</html>