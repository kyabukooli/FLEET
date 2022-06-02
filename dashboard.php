
<!DOCTYPE html>

<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Dashboard - Fleetwave</title>
        <link href="css/styles.css" rel="stylesheet" />
        <script src="icons/ficons/js/all.js"></script>
        <link rel="stylesheet" href="icons/ficons/css/all.css">
        <link rel="stylesheet" href="assets/charts/css/dist/charts.min.css">
        <script src="assets/charts/js/dist/charts.min.js"></script>
        <link rel="stylesheet" href="icons/bicons/font/bootstrap-icons.css">
        <link rel="shortcut icon" href="img/images.png" type="image/x-icon">
        <script src="js/jquery.min.js"></script>
       <link rel="stylesheet" href="css/carts.css">
    </head>
    <body class="sb-nav-fixed">
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
                        <h1 class="mt-4">Dashboard</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Dashboard</li>
                        </ol>
                        <div class="row" id="c_row">
                            <div class="col-xl-3 col-md-6">
                               
                                <div class="card text-white mb-4 rounded-1" id="c_vehicles">
                                    <div class="card-header bg-info d-flex align-items-center justify-content-between" id="card-header">
                                        <h4>Vehicles</h4><div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                    <div class="card-body bg-info" id="card-body">
                                        <ul class="list-group">
                                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                           Total
                                              <span class="text-primary display-5 num1" id="num1">142</span>
                                            </li> <li class="list-group-item d-flex justify-content-between align-items-center">
                                               Available
                                                <span class="text-success display-5 num2" id="num2">38</span>
                                              </li> <li class="list-group-item d-flex justify-content-between align-items-center">
                                               Out of service
                                                <span class="text-danger display-5 num3" id="num3">14</span>
                                              </li>
                                           
                                          </ul>
                                    </div>
                                </div> 
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card text-white mb-4" id="c_driver">
                                    <div class="card-header bg-warning d-flex align-items-center justify-content-between">
                                        <h4>Drivers</h4><div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                    <div class="card-body bg-warning">
                                        <ul class="list-group">
                                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                             Total
                                              <span class="text-success display-5 num1" id="num4">94</span>
                                            </li> <li class="list-group-item d-flex justify-content-between align-items-center">
                                                Available
                                                <span class="text-primary display-5 num2" id="num5">32</span>
                                              </li> <li class="list-group-item d-flex justify-content-between align-items-center">
                                                Banned
                                                <span class="text-danger display-5 num3" id="num6">2</span>
                                              </li>
                                           
                                          </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card text-white mb-4" id="c_trips">
                                    <div class="card-header bg-success d-flex align-items-center justify-content-between">
                                        <h4>Trips</h4><div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                    <div class="card-body bg-success">
                                        <ul class="list-group">
                                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                             Finished
                                              <span class="text-success display-5 num3" id="num7">111</span>
                                            </li> <li class="list-group-item d-flex justify-content-between align-items-center">
                                                Live
                                                <span class="text-primary display-5 num1" id="num8">60</span>
                                              </li> <li class="list-group-item d-flex justify-content-between align-items-center">
                                                Cancelled
                                                <span class="text-danger display-5 num2" id="num9">14</span>
                                              </li>
                                           
                                          </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card text-white mb-4" id="c_events">
                                    <div class="card-header bg-danger d-flex align-items-center justify-content-between">
                                        <h4>Events</h4><div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                    <div class="card-body bg-danger">
                                      <ul class="list-group">
                                        <li class="list-group-item d-flex justify-content-between align-items-center">
                                         Finished
                                          <span class="text-success display-5">172</span>
                                        </li> <li class="list-group-item d-flex justify-content-between align-items-center">
                                            Attended
                                            <span class="text-primary display-5">12</span>
                                          </li> <li class="list-group-item d-flex justify-content-between align-items-center">
                                            Cancelled
                                            <span class="text-danger display-5">14</span>
                                          </li>
                                       
                                      </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-5" id="row">
                            <div class="col-xl-6">
                                <div class="card mb-4">
                                    <div class="card-header bg-primary text-white">
                                        <i class="fas fa-chart-area me-1"></i>
                                        Fuel Economy
                                    </div>
                                    <div class="card-body">
                                        <div id="tb">
                                            <table  id="tr" class=" multiple charts-css area show-primary-axis show-labels show-10-secondary-axes show-data-axes">
                                                <caption>OLYMPICS</caption>
                                                <thead>
                                                    <th scope="col">country</th>
                                                    <th scope="col">gold</th>
                                                    <th scope="col">silver</th>
                                                    <th scope="col">dronze</th>
                                                </thead>                                               
                                                <tbody>
                                                   <tr>
                                                    <th scope="row">2018</th>
                                                    <td style="--size:0.5;--start:0.3"></td> 
                                                    <td style="--size:0.2;--start:0.1"></td>   
                                                                                                 
                                                   </tr>
                                                   <tr>
                                                    <th scope="row">2019</th>
                                                    <td style="--size:0.1;--start:0.5"></td>
                                                    <td style="--size:0.5;--start:0.2"></td>
                                                   </tr>
                                                   <tr>
                                                    <th scope="row">2020</th>
                                                    <td style="--size:0.8;--start:0.1"></td>
                                                    <td style="--size:0.1;--start:0.5"></td>
                                                   </tr>
                                                   <tr>
                                                    <th scope="row">2021</th>
                                                    <td style="--size:1.0;--start:0.8"></td>
                                                    <td style="--size:0.8;--start:0.1"></td>
                                                   </tr>
                                                   <tr>
                                                    <th scope="row">2022</th>
                                                    <td style="--size:0.5;--start:1.0"></td>
                                                    <td style="--size:0.3;--start:0.8"></td>
                                                   </tr>
                                                </tbody>
                                            </table>
                                            <ul class="charts-css legend legend-rectangle ">
                                                <li>Petrol</li>
                                                <li>Diseal</li>
                                            </ul>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="card mb-4" id="isi">
                                    <div class="card-header bg-primary text-white">
                                        <i class="fas fa-chart-bar me-1"></i>
                                        Vehicle usage
                                    </div>
                                    <div class="card-body">
                                        <div id="tbar">
                                            <table  class="charts-css line multiple show-primary-axis show-labels show-10-secondary-axes ">
                                                <caption>OLYMPICS</caption>
                                                <thead>
                                                    <th scope="col">country</th>
                                                    <th scope="col">gold</th>
                                                    <th scope="col">silver</th>
                                                    <th scope="col">dronze</th>
                                                </thead>                                               
                                                <tbody>
                                                    <tr>
                                                        <th scope="row">2022</th>
                                                        <td style="--size:0.5;--start:1.0"></td>
                                                        <td style="--size:0.3;--start:0.8"></td>
                                                        <td style="--size:0.0;--start:0.6"></td>
                                                       </tr>
                                                   <tr>
                                                    <th scope="row">2018</th>
                                                    <td style="--size:0.5;--start:0.5"></td> 
                                                    <td style="--size:0.2;--start:0.3"></td> 
                                                    <td style="--size:1.0;--start:0.0"></td>  
                                                                                                 
                                                   </tr>
                                                   <tr>
                                                    <th scope="row">2019</th>
                                                    <td style="--size:0.1;--start:0.5"></td>
                                                    <td style="--size:0.5;--start:0.2"></td>
                                                    <td style="--size:0.9;--start:1.0"></td>
                                                   </tr>
                                                   <tr>
                                                    <th scope="row">2020</th>
                                                    <td style="--size:0.8;--start:0.1"></td>
                                                    <td style="--size:0.1;--start:0.5"></td>
                                                    <td style="--size:0.5;--start:0.9"></td>
                                                   </tr>
                                                   <tr>
                                                    <th scope="row">2021</th>
                                                    <td style="--size:1.0;--start:0.8"></td>
                                                    <td style="--size:0.8;--start:0.1"></td>
                                                    <td style="--size:0.6;--start:0.5"></td>
                                                   </tr>
                                                   <tr>
                                                    <th scope="row">2022</th>
                                                    <td style="--size:0.5;--start:1.0"></td>
                                                    <td style="--size:0.3;--start:0.8"></td>
                                                    <td style="--size:0.0;--start:0.6"></td>
                                                   </tr>
                                                </tbody>
                                            </table>
                                            <ul class="charts-css legend legend-rectangle ">
                                                <li>Petrol</li>
                                                <li>Diseal</li>
                                            </ul>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card mb-4">
                            <div class="card-header bg-primary text-white">
                                <i class="fas fa-table me-1"></i>
                                DataTable Example
                            </div>
                            <div class="card-body">
                           
                                <table id="datatablesSimple" class="table table-info table-hover table-responsive">
                                    <thead>
                                        <tr>
                                        <th>ID</th>
                                            <th>STATUS</th>
                                            <th>PLATE NUMBER</th>
                                            <th>NAME</th>
                                            <th>DRIVER</th>
                                            <th>ACTION</th>                                        
                                        </tr>
                                    </thead>
                                    
                                    <tbody>                             
                                    <?php include_once('config/fetch.php'); foreach($vehicle as $i=> $vehicles): ?>
                                        <tr>
                                            <th scope="row"><?php  echo $i+ 1 ?></th>
                                            <td><?php echo $vehicles['status']?> </td>
                                            <td><?php echo $vehicles['plateNumber']?> </td>
                                            <td><?php echo $vehicles['type']?> </td>
                                            <td><?php echo $vehicles['Driver']?> </td>
                                            <td>
                                                <buttom class="btn btn-sm btn-outline-success">Edit</buttom>
                                                <buttom class="btn btn-sm btn-outline-danger">Delete</buttom>
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
        <!-- Button trigger modal -->
       
        <!--  Modal for car registrion -->
        <div class="modal fade" id="modelId" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Modal title</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                      <form action="" method="post">
                          <div class="form-floating">
                            <input type="text" class="form-control" name="Status" id="Label" placeholder="Status">
                            <label for="floatingLabel">Status</label>
                          </div>
                          <div class="form-floating">
                            <input type="text" class="form-control" name="Plate" id="Label" placeholder="Plate number">
                            <label for="floatingLabel">Plate number</label>
                          </div>
                          <div class="form-floating">
                            <input type="text" class="form-control" name="type" id="Label" placeholder="Type">
                            <label for="floatingLabel">Type</label>
                          </div>
                          <div class="form-floating">
                            <input type="text" class="form-control" name="Driver" id="Label" placeholder="Driver">
                            <label for="floatingLabel">Driver</label>
                          </div>
                          <input type="submit" class="btn btn-primary mx-auto mt-4 d-flex" value="SUBMIT">
                      </form>
                    </div>                    
                </div>
            </div>
        </div>
        
        <!-- =============fixed-button=========== -->
        <buttom class="btn rounded-pill btn-primary text-white position-fixed shadow-lg" style="position: fixed;bottom: 30px;right: 10px;">
            <span><i class="bi bi-send mx-1"></i></span>   Send messege
           </buttom>
         <script>
            window.onload = ()=>{
                // $(selector).countMe(delay,speed)
                $(".num1").countMe(40,65);
                $(".num2").countMe(30, 30);
                $(".num3").countMe(40, 50);
                
             }
            </script>
            <script type="text/javascript">
        
          var _gaq = _gaq || [];
          _gaq.push(['_setAccount', 'UA-36251023-1']);
          _gaq.push(['_setDomainName', 'jqueryscript.net']);
          _gaq.push(['_trackPageview']);
        
          (function() {
            var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
            ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
            var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
          })();
        
        </script>
      <script src="assets/bootstrap/js/bootstrap.min.js"></script>
      <script src="assets/bootstrap/js/bootstrap.bundle.min.js"></script>

      <script src="js/jquery.js" crossorigin="anonymous"></script>
      <script src="js/countMe.min.js"></script>
      <script src="js/dashboard.js"></script>
    </body>
</html>
