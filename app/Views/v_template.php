<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>LandGIS</title>
    <link href="<?= base_url('sb-admin/') ?>css/styles.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css"
        integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY=" crossorigin="" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/js/all.min.js" crossorigin="anonymous">
    </script>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"
        integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8=" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous">
    </script>
    <script src="<?= base_url('sb-admin/') ?>js/scripts.js"></script>
    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"
        integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo=" crossorigin=""></script>

    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
    <script src="<?= base_url('sb-admin/') ?>js/datatables-simple-demo.js"></script>

    <link rel="stylesheet" href="https://unpkg.com/leaflet-routing-machine@latest/dist/leaflet-routing-machine.css" />
    <script src="https://unpkg.com/leaflet-routing-machine@latest/dist/leaflet-routing-machine.js"></script>
</head>

<body>
    <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
        <!-- Navbar Brand-->
        <a class="navbar-brand ps-3" href="index.html">LandGIS</a>
        <!-- Sidebar Toggle-->
        <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i
                class="fas fa-bars"></i></button>
        <!-- Navbar Search-->
        <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
            <div class="input-group">
                <input class="form-control" type="text" placeholder="Search for..." aria-label="Search for..."
                    aria-describedby="btnNavbarSearch" />
                <button class="btn btn-primary" id="btnNavbarSearch" type="button"><i
                        class="fas fa-search"></i></button>
            </div>
        </form>
        <!-- Navbar-->
        <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown"
                    aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="#!">Settings</a></li>
                    <li><a class="dropdown-item" href="#!">Activity Log</a></li>
                    <li>
                        <hr class="dropdown-divider" />
                    </li>
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
                        <a class="nav-link" href="<?= base_url('Home') ?>">
                            <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                            Dashboard
                        </a>
                        <div class="sb-sidenav-menu-heading">Tanpa Database</div>
                        <a class="nav-link" href="<?= base_url('Home/viewMap') ?>">
                            <div class="sb-nav-link-icon"><i class="fa-regular fa-map"></i></div>
                            View Map
                        </a>
                        <a class="nav-link" href="<?= base_url('Home/baseMap') ?>">
                            <div class="sb-nav-link-icon"><i class="fa-solid fa-layer-group"></i></div>
                            Base Map
                        </a>
                        <a class="nav-link" href="<?= base_url('Home/marker') ?>">
                            <div class="sb-nav-link-icon"><i class="fa-solid fa-location-dot"></i></div>
                            Marker
                        </a>
                        <a class="nav-link" href="<?= base_url('Home/circle') ?>">
                            <div class="sb-nav-link-icon"><i class="fa-solid fa-circle-notch"></i></div>
                            Circle
                        </a>
                        <a class="nav-link" href="<?= base_url('Home/polyline') ?>">
                            <div class="sb-nav-link-icon"><i class="fa-solid fa-chart-line"></i></div>
                            Polyline
                        </a>
                        <a class="nav-link" href="<?= base_url('Home/polygon') ?>">
                            <div class="sb-nav-link-icon"><i class="fa-solid fa-draw-polygon"></i></div>
                            Polygon
                        </a>
                        <a class="nav-link" href="<?= base_url('Home/datashape') ?>">
                            <div class="sb-nav-link-icon"><i class="fa-solid fa-shapes"></i></div>
                            Data Shape
                        </a>
                        <a class="nav-link" href="<?= base_url('Home/getcoordinat') ?>">
                            <div class="sb-nav-link-icon"><i class="fa-solid fa-map-location-dot"></i></div>
                            Get Coordinat
                        </a>
                        <a class="nav-link" href="<?= base_url('Home/getcoordinat2') ?>">
                            <div class="sb-nav-link-icon"><i class="fa-solid fa-book-atlas"></i></div>
                            Get Coordinat Ralam Radius
                        </a>
                        <a class="nav-link" href="<?= base_url('Home/geolocation') ?>">
                            <div class="sb-nav-link-icon"><i class="fa-solid fa-earth-asia"></i></div>
                            Geolocation
                        </a>
                        <a class="nav-link" href="<?= base_url('Home/rute') ?>">
                            <div class="sb-nav-link-icon"><i class="fa-solid fa-route"></i></div>
                            Rute
                        </a>
                        <a class="nav-link" href="<?= base_url('Home/rute2') ?>">
                            <div class="sb-nav-link-icon"><i class="fa-solid fa-road"></i></div>
                            Rute Dari Lokasi User
                        </a>
                        <div class="sb-sidenav-menu-heading">Dengan Database</div>
                        <a class="nav-link collapsed" href="#" data-bs-toggle="collapse"
                            data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                            <div class="sb-nav-link-icon"><i class="fa-solid fa-location-arrow"></i></i></div>
                            Lokasi
                            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                        </a>
                        <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne"
                            data-bs-parent="#sidenavAccordion">
                            <nav class="sb-sidenav-menu-nested nav">
                                <a class="nav-link" href="<?= base_url('Lokasi/inputLokasi') ?>">Input Lokasi</a>
                                <a class="nav-link" href="<?= base_url('Lokasi/index') ?>">Data Lokasi</a>
                                <a class="nav-link" href="<?= base_url('Lokasi/pemetaanLokasi') ?>">Pemetaan Lokasi</a>
                            </nav>
                        </div>
                    </div>
                </div>
                <div class="sb-sidenav-footer">
                    <div class="small">Logged in as:</div>
                    Sobat Bimbang
                </div>
            </nav>
        </div>
        <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid px-4">
                    <h1 class="mt-4"><?= $judul ?></h1>

                    <?php if ($page) {
                        echo view($page);
                    } ?>
            </main>
            <footer class="py-4 bg-light mt-auto">
                <div class="container-fluid px-4">
                    <div class="d-flex align-items-center justify-content-between small">
                        <div class="text-muted">Copyright &copy; LandGIS 2024</div>
                        <div>
                            <a href="#">Kebijakan Privasi</a>
                            &middot;
                            <a href="#">Situasi &amp; Kondisi</a>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </div>

</body>

</html>