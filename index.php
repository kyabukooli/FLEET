<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Login -Fleetwave</title>

        <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
        <script src="icons/ficons/js/all.js"></script>
        <link rel="stylesheet" href="icons/bicons/font/bootstrap-icons.css">
        <link rel="stylesheet" href="fontawesome/css/all.css">
        <link rel="shortcut icon" href="img/images.png" type="image/x-icon">
       
    </head>
    <body class="bg-primary">
        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main>
                    <div class="container" id="login">
                        <div class="row justify-content-center">
                            <div class="col-lg-5">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header"><img src="img/images.png" class="img-fluid mx-auto d-flex" alt="" style="width: 150px;"></div>
                                    <div class="card-body">
                                        <form action="config/validate.php" method="POST">
                                            <div class="form-floating">
                                                <input class="form-control mt-3" id="inputEmail" type="text" placeholder="name@example.com" name="adminame" />
                                                <label for="inputEmail" class="text-primary"> <span><i class="bi bi-person-fill text-primary mx-1" style="font-size: 20px;"></i></span> Username</label>
                                            </div>
                                            <div class="form-floating mt-3">
                                                <input class="form-control " id="inputPassword" type="password" placeholder="Password" name="password"  />
                                                <label for="inputPassword"  class="text-primary"> <span><i class="bi bi-key text-primary mx-1" style="font-size: 20px;"></i></span>Password</label>
                                            </div>
                                            <div class="form-check mb-3">
                                                <input class="form-check-input" id="inputRememberPassword" type="checkbox" value="" />
                                                <label class="form-check-label" for="inputRememberPassword">Remember Password</label>
                                            </div>
                                            <div class="d-block align-items-center mt-4 mb-0 mx-auto">
                                                
                                                <button class="btn btn-primary mx-auto d-block w-100"  type="submit">Login</button>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="card-footer text-center py-3">
                                        <div class="small"><a href="register.php">Need an account? Sign up!</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
            <div id="layoutAuthentication_footer">
                <footer class="py-4 bg-light mt-5">
                    <div class="container-fluid px-4">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; Fleetwave 2022</div>
                            <div>
                                <a href="#">Privacy Policy</a>
                                &middot;
                                <a href="#">Terms &amp; Conditions</a>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>  
             
           
        </div>
       
        <script src="bootstrap/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
    </body>
</html>
