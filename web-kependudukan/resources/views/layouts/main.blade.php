
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>{{ $title }}</title>
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
    </head>
    <body class="background">

        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion purp" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <!-- Navbar Brand-->
                    <a class="navbar-brand text-dark bg-white radius" href="index.html">
                        <table>
                        <tr>
                            <td rowspan="3">
                                <div class="sb-nav-link-icon"><img src="assets/logo1.png" alt="" width="70px" ></div>
                            </td>
                            <td class="">dataSumberejo</td>
                        </tr>
                        <tr>
                            <td class="fs-6 text border-top text-center">Dashboard</td>
                        </tr>
                        <tr>
                            <td class=""></td>
                        </tr>
                    </table>
                </a>


                    <div class="sb-sidenav-menu-heading"></div>

                    <a class="nav-link" href="#">
                        <table>
                            <tr>
                                <td rowspan="2">
                                    <div class="sb-nav-link-icon"><img src="assets/icon.png" alt=""></div>
                                </td>
                                <td>EKO</td>
                            </tr>
                            <tr>
                                <td>Online</td>
                            </tr>
                        </table>


                    </a>
                            <a class="nav-link" href="/">
                                <div class="sb-nav-link-icon"><i class="fa-solid fa-house"></i></div>
                                Dashboard
                            </a>

                            <a class="nav-link collapsed " href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                                <div class="sb-nav-link-icon"><i class="fa-solid fa-users"></i></div>
                                Kelola Data
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="/data_kk">Data Kartu Keluarga</a>
                                    <a class="nav-link" href="/data_penduduk">Data Penduduk</a>
                                </nav>
                            </div>

                            <a class="nav-link" href="index.html">
                                <div class="sb-nav-link-icon"><i class="fa-solid fa-folder-open"></i></div>
                                Sirkulasi Penduduk
                            </a>
                            <a class="nav-link" href="index.html">
                                <div class="sb-nav-link-icon"><i class="fa-solid fa-image"></i></div>
                                Kelola Surat
                            </a>
                            <a class="nav-link" href="index.html">
                                <div class="sb-nav-link-icon"><i class="fa-solid fa-file"></i></div>
                                Kelola laporan
                            </a>

                            <div class="sb-sidenav-menu-heading"><hr></div>
                            <a class="nav-link " href="charts.html">
                                <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                                Pengguna Sistem
                            </a>
                            <a class="nav-link " href="tables.html">
                                <div class="sb-nav-link-icon"><i class="fa-solid fa-right-from-bracket"></i></div>
                                Log out
                            </a>
                        </div>
                    </div>
                    <div class="sb-sidenav-footer">
                        <div class="small">Logged in as:</div>
                        Start Bootstrap
                    </div>
                </nav>
            </div>

            <div id="layoutSidenav_content">
                <nav class="sb-topnav navbar navbar-expand bg-white sticky-sm-top mx-5 radius">
                    <!-- Sidebar Toggle-->
                    <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
                    <!-- Navbar Search-->
                   <!-- <form class="d-none d-md-inline-block form-inline  ">
                        <div class="input-group ">
                            <button class="btn btn-primary" id="btnNavbarSearch" type="button"><i class="fas fa-search"></i></button>
                            <input class="form-controls" type="text" placeholder="Search for..." aria-label="Search for..." aria-describedby="btnNavbarSearch" />
                        </div>
                    </form>-->

                    <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0 ">
                        SISTEM MANAJEMEN DATA PENDUDUK DESA SUMBEREJO
                    </form>
                    <!-- Navbar-->
                    <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
                    </ul>
                </nav>

                <main>
                    <div class="container-fluid px-4">
                        
                        <div class="container-body">
                            @yield('body')
                        </div>

                        <div style="height: 100vh"></div>
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid px-4">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">2022 © dataSumberejo Dashboard - dataSumberejo -dashboard.com</div>
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
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
        <script src="js/datatables-simple-demo.js"></script>

    </body>
</html>
