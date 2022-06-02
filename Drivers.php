<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="icons/ficons/css/all.min.css">
    <link href="css/styles.css" rel="stylesheet" />
    <script src="icons/ficons/js/all.js"></script>
    <link rel="stylesheet" href="icons/ficons/css/all.css">
    <link rel="stylesheet" href="assets/charts/css/dist/charts.min.css">
    <script src="assets/charts/js/dist/charts.min.js"></script>
    <link rel="stylesheet" href="icons/bicons/font/bootstrap-icons.css">
   <link rel="shortcut icon" href="img/images.png" type="image/x-icon">
    <title>Drivers-Fleetwave</title>
</head>
<body>
    <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
        <!-- Navbar Brand-->
        <a class="navbar-brand ps-3" href="index.html">
            <img src="img/images.png" alt="logo" width="100" height="100">
        </a>
        <!-- Sidebar Toggle-->
        <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
        <!-- Navbar Search-->
        <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
            <div class="input-group">
                <input class="form-control" type="text" placeholder="Search for..." aria-label="Search for..." aria-describedby="btnNavbarSearch" />
                <button class="btn btn-primary" id="btnNavbarSearch" type="button"><i class="fas fa-search"></i></button>
            </div>
        </form>
        <!-- Navbar-->
        <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="#!">Settings</a></li>
                    <li><a class="dropdown-item" href="#!">Activity Log</a></li>
                    <li><hr class="dropdown-divider" /></li>
                    <li><a class="dropdown-item" href="index.php">Logout</a></li>
                </ul>
            </li>
            <li class="nav-item active">
                <i class="bi bi-bell-fill text-secondary" style="font-size: 25px;"></i>
            </li>
        </ul>
    </nav>
    <div id="layoutSidenav">
        <div id="layoutSidenav_nav">
            <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                <div class="sb-sidenav-menu">
                    <div class="nav">
                        <div class="sb-sidenav-menu-heading">Core</div>
                        <a class="nav-link" href="dashboard.php">
                            <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                            Dashboard
                        </a>
                        <a class="nav-link" href="Drivers.php">
                            <div class="sb-nav-link-icon"><i class="fas fa-person"></i></div>
                            Drivers
                        </a>
                        <a class="nav-link" href="index.html">
                            <div class="sb-nav-link-icon"><i class="bi bi-truck"></i></div>
                            Vehicles
                        </a>                           
                       
                       
                        <div class="sb-sidenav-menu-heading">Addons</div>
                        <a class="nav-link" href="charts.html">
                            <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                            Charts
                        </a>
                        <a class="nav-link" href="tables.html">
                            <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                            Tables
                        </a>
                    </div>
                </div>
                <div class="sb-sidenav-footer">
                    <div class="small">Logged in as:</div>
                    Adiminstrator
                </div>
            </nav>
        </div>
        <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid px-4">
                    <h1 class="mt-4">Drivers</h1>
                    <ol class="breadcrumb mb-4">
                        <li class="breadcrumb-item"><a href="dashboard.php">Dashboard</a></li>
                        <li class="breadcrumb-item active">Drivers</li>
                    </ol>
                    <div class="card mb-4">
                        <div class="card-body d-flex align-items-center justify-content-between">
                            <p><strong>Choose a vehicle from the list to assign to the orders</strong></p>
                            <div class="btn-group">
                                <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#modelId">Register Driver</button>
                                <button type="button" class="btn btn-primary"><i class="bi bi-truck"></i>  Assign to order</button>
                            </div>                                                  
                        </div>
                    </div>
                    <div class="card mb-4">
                        <div class="card-header">
                            <i class="fas fa-table me-1"></i>
                            DataTable
                        </div>
                        <div class="card-body">
                        <table id="datatablesSimple" class="table table-info table-hover table-responsive">
                                    <thead>
                                        <tr>
                                        <th>ID</th>
                                            <th>PHOTO</th>
                                            <th>FIRST NAME</th>
                                            <th>LAST NAME</th>
                                            <th>DATE OF BIRTH</th>
                                            <th>CONTACT</th>
                                            <th>ACTION</th>                                        
                                        </tr>
                                    </thead>
                                    
                                    <tbody>                             
                                    <?php include_once('config/fdriver.php'); foreach($drivers as $i=> $driver): ?>
                                        <tr>
                                            
                                            <td><?php echo $driver['ID']?> </td>
                                            <td><?php echo $driver['dp']?> </td>
                                            <td><?php echo $driver['firstname']?> </td>
                                            <td><?php echo $driver['lastname']?> </td>
                                            <td><?php echo $driver['DOB']?> </td>
                                            <td><?php echo $driver['contact']?> </td>
                                            <td>
                                                <buttom class="btn btn-sm btn-outline-success">Edit</buttom>
                                                <form action="config/deleteDriver.php" method="post" class="" style="Display:inline-block;">
                                                    <input type="hidden" name="id" value="<?php echo $driver['ID'] ?>">
                                                <button class="btn btn-sm btn-outline-danger" type="submit">Delete</button>
                                            </form>
                                            </td>
                                        </tr>
                                    <?php endforeach; ?>                                             
                                    </tbody>                                   
                                </table>
                        </div>
                    </div>
                </div>
            </main>
           
            
          
            
            <footer class="py-4 bg-light mt-auto">
                <div class="container-fluid px-4">
                    <div class="d-flex align-items-center justify-content-between small">
                        <div class="text-muted">Copyright &copy; Your Website 2022</div>
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
      <!-- ======= REGISTER DRIVER Modal==================== -->
      <div class="modal fade" id="modelId" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Modal title</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                   <form action="config/form.php" method="post" enctype="multipart/form-data">
                       <div class="form-floating mb-3">
                         <input
                           type="text" class="form-control" name="fname" id="Label" placeholder="First name">
                         <label for="floatingLabel">First name</label>
                       </div>
                       <div class="form-floating mb-3">
                        <input
                          type="text" class="form-control" name="lname" id="Label" placeholder="Last name">
                        <label for="floatingLabel">Lastst name</label>
                      </div>
                      <div class="form-floating mb-3">
                        <input
                          type="file" class="form-control" name="dp" id="Label">
                        <label for="floatingLabel">Picture</label>
                      </div>
                      <div class="form-floating mb-3">
                        <input
                          type="date" class="form-control" name="dob">
                        <label for="floatingLabel">DATE OF BIRTH</label>
                        
                      </div>
                      <div class="form-floating mb-3">
                      <input
                      type="text" class="form-control" name="contact" >
                    <label for="floatingLabel">Contact</label>
                  </div>
                  <button type="submit" class="btn btn-primary my-4 mx-4">Submit</button>
                   </form>
                </div>
               
            </div>
        </div>
    </div>

    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    
    <script src="js/jquery.min.js"></script>
</body>
</html>