<?php

include 'connect.php';

$query = "SELECT * FROM timer";
$result = $conn->query($query);

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>TIMER STAMP</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    </head>
    <body>
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <!-- Navbar Brand-->
            <a class="navbar-brand ps-3" href="index.html">Welcome, Anon</a>
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
                        <li><a class="dropdown-item" href="#!">Logout</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <div class="sb-sidenav-menu-heading">Core</div>
                            <a class="nav-link" href="index.html">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Dashboard
                            </a>
                        </div>
                    </div>
                </nav>
            </div>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Static Navigation</h1>
                        <div class="card mb-4">
                            <div class="card-body">
                                <div class="container">

                                    <form action="proccess.php" method="post">
                                        <div class="form-group row">
                                          <label for="nama" class="col-4 col-form-label">Nama</label> 
                                          <div class="col-8">
                                            <div class="input-group">
                                              <input id="nama" name="nama" type="text" class="form-control" required="required">
                                            </div>
                                          </div>
                                        </div>
                                        <div class="form-group row">
                                          <label for="tanggal" class="col-4 col-form-label">Tanggal</label> 
                                          <div class="col-8">
                                            <input id="tanggal" name="tanggal" type="date" class="form-control" required="required">
                                          </div>
                                        </div>
                                        <div class="form-group row">
                                          <label for="st" class="col-4 col-form-label">Jam Mulai</label> 
                                          <div class="col-8">
                                            <input id="st" name="st" type="time" class="form-control" required="required">
                                          </div>
                                        </div>
                                        <div class="form-group row">
                                          <label for="dt" class="col-4 col-form-label">Jam Selesai</label> 
                                          <div class="col-8">
                                            <input id="dt" name="dt" type="time" class="form-control" required="required">
                                          </div>
                                        </div> 
                                        <div class="form-group row">
                                          <div class="offset-4 col-8">
                                            <button name="submit" type="submit" class="btn btn-primary">Submit</button>
                                          </div>
                                        </div>
                                      </form>
                                </div>
                            </div>
                        </div>
                        <h1 class="mt-4">Your Track</h1>
                        <div class="card mb-4">
                            <div class="card-body">
                                <div class="container">
                                    <table class="table table-striped">
                                        <thead>
                                          <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Nama</th>
                                            <th scope="col">Tanggal</th>
                                            <th scope="col">Jam Mulai</th>
                                            <th scope="col">Jam Selesai</th>
                                          </tr>
                                        </thead>
                                      <?php while ($row = $result->fetch_assoc()) : ?>
                                        <tbody>
                                          <tr>
                                            <td> <?= $row['id']?> </td>
                                            <td> <?= $row['nama']?> </td>
                                            <td> <?= $row['tanggal']?> </td>
                                            <td> <?= $row['startat']?> </td>
                                            <td> <?= $row['doneat']?> </td>
                                          </tr>
                                        </tbody>
                                      <?php endwhile; ?>
                                      </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
                
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
    </body>
</html>
