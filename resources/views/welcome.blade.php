<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
    
    
    
    <link rel="shortcut icon" href="./assets/images/logo.png" type="image/x-icon">

    <link rel="stylesheet" href="./assets/compiled/css/app.css">
    <link rel="stylesheet" href="./assets/compiled/css/app-dark.css">
    <link rel="stylesheet" href="./assets/compiled/css/iconly.css">
    
</head>

<body>
   
    <script src="assets/static/js/initTheme.js"></script>
    <div id="app">
        <div id="main" class="layout-horizontal">
            <header class="mb-5">
                <div class="header-top">
                    <div class="container">
                        <div class="logo">
                            <a href="index.html"><img src="./assets/compiled/svg/logo.svg" alt="Logo"></a>
                        </div>
                        <div class="header-top-right">

                            <a href="{{ route('login') }}" class="btn btn-outline-primary">Login Admin</a>

                            <!-- Burger button responsive -->
                            <a href="#" class="burger-btn d-block d-xl-none">
                                <i class="bi bi-justify fs-3"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <nav class="main-navbar">
                    <div class="container">
                       <ul>
                        <li
                        class="menu-item  ">
                        <a href="#jadwal-kepala" class='menu-link'>
                            <span><i class="bi bi-calendar-range-fill"></i> Jadwal Kepala</span>
                        </a>
                    </li>
                    <li
                        class="menu-item  ">
                        <a href="#daftar-aplikasi" class='menu-link'>
                            <span><i class="bi bi-menu-app-fill"></i>Daftar Aplikasi</span>
                        </a>
                    </li>
                       </ul>
                    </div>
                </nav>

            </header>
            <div class="content-wrapper container">
            <div class="page-content">
                <section class="row">
                    <div class="col-12 col-lg-12">
                        <livewire:welcome.schedule />
                    </div>
                    <div class="col-12 col-lg-12">
                        <div class="card" id="daftar-aplikasi">
                            <div class="card-header">
                                <h5 class="card-title">Daftar Aplikasi</h5>
                            </div>
                            <div class="card-body">
                            </div>
                        </div>
                    </div>
                    
                </section>
            </div>

            </div>

            <footer>
                <div class="container">
                    <div class="footer clearfix mb-0 text-muted">
                        <div class="float-start">
                            <p id="current-year">&copy; BPS Provinsi Sumatera Barat</p>
                        </div>
                        <div class="float-end">
                            <p>Crafted with <span class="text-danger"><i class="bi bi-heart"></i></span> by 
                                <a href="https://github.com/mhdaliffarhan">M Alif Farhan</a>
                            </p>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </div>
    <script>
        // Dapatkan elemen dengan ID "current-year"
        const yearElement = document.getElementById('current-year');
    
        // Tambahkan tahun saat ini ke elemen
        const currentYear = new Date().getFullYear();
        yearElement.innerHTML = `${currentYear} &copy; BPS Provinsi Sumatera Barat`;
    </script>
    <script src="assets/static/js/components/dark.js"></script>
    <script src="assets/static/js/pages/horizontal-layout.js"></script>
    <script src="assets/extensions/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    
    <script src="assets/compiled/js/app.js"></script>
    
    
<script src="assets/extensions/apexcharts/apexcharts.min.js"></script>
<script src="assets/static/js/pages/dashboard.js"></script>

</body>

</html>