<?php
// Cek apakah ada session redrect dashboard
session_start();
if (isset($_SESSION['username'])) {
  header("Location: dashboard.php");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/2.png">
  <title>
    Nutriens | Sign in
  </title>
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
  <!-- Nucleo Icons -->
  <link href="assets/css/nucleo-icons.css" rel="stylesheet" />
  <link href="assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <link href="assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- CSS Files -->
  <link id="pagestyle" href="assets/css/soft-ui-dashboard.css?v=1.0.7" rel="stylesheet" />
</head>

<body class="">
  <div class="container position-sticky z-index-sticky top-0">
    <div class="row">
      <div class="col-12">
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg blur blur-rounded top-0 z-index-3 shadow position-absolute my-3 py-2 start-0 end-0 mx-4">
          <div class="container-fluid pe-0">
            <a class="navbar-brand font-weight-bolder ms-lg-0 ms-3 " href=".">
              Nutriens
            </a>
            <button class="navbar-toggler shadow-none ms-2" type="button" data-bs-toggle="collapse" data-bs-target="#navigation" aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon mt-2">
                <span class="navbar-toggler-bar bar1"></span>
                <span class="navbar-toggler-bar bar2"></span>
                <span class="navbar-toggler-bar bar3"></span>
              </span>
            </button>
          </div>
        </nav>
        <!-- End Navbar -->
      </div>
    </div>
  </div>
  <main class="main-content  mt-0">
    <section>
      <div class="page-header min-vh-75">
        <div class="container">
          <div class="row">
            <div class="col-xl-4 col-lg-5 col-md-6 d-flex flex-column mx-auto">
              <div class="card card-plain mt-8">
                <div class="card-header pb-0 text-left bg-transparent">
                  <h3 class="font-weight-bolder text-info text-gradient">Selamat Datang</h3>
                  <p class="mb-0">Masukan username dan password untuk daftar</p>
                </div>
                <div class="card-body">
                  <form method="post" action="server/daftar.php" enctype="">
                    <label>Nama</label>
                    <div class="mb-3">
                      <input type="text" name="nama" class="form-control" placeholder="Nama" aria-label="Nama">
                    </div>
                    <label>Username</label>
                    <div class="mb-3">
                      <input type="text" name="username" class="form-control" placeholder="Username" aria-label="Username">
                    </div>
                    <label>Password</label>
                    <div class="mb-3">
                      <input type="password" name="pw" class="form-control" placeholder="Password" aria-label="Password">
                    </div>
                    <label>Jenis Kelamin</label>
                    <div class="mb-3">
                     <select name="gender" id="" class="form-control">
                      <option value="Wanita">Wanita</option>
                      <option value="Pria">Pria</option>
                     </select>
                    </div>
                    <label>Umur</label>
                    <div class="mb-3 d-flex">
                      <input type="number" name="umur" class="form-control" placeholder="Umur" aria-label="Umur">
                      <select name="typeumur" id="" class="form-control ms-3">
                        <option value="bulan">Bulan</option>
                        <option value="tahun">Tahun</option>
                      </select>
                    </div>
                    <div class="d-flex">
                      <div class="me-3">
                        <label>Tinggi Badan</label>
                        <div class="mb-3">
                          <input type="number" name="tb" class="form-control" placeholder="Tinggi Badan" aria-label="Tinggi Badan">
                        </div>
                      </div>
                      <div>
                        <label>Berat Badan</label>
                        <div class="mb-3">
                          <input type="number" name="bb" class="form-control" placeholder="Berat Badan" aria-label="Berat Badan">
                        </div>
                      </div>
                    </div>
                    <div class="text-center">
                      <button type="submit" class="btn bg-gradient-info w-100 mt-4 mb-0">Sign up</button>
                      <p class="mt-2">Sudah punya akun? <a href="index.php">klik disini</a></p>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>
  <!--   Core JS Files   -->
  <script src="assets/js/core/popper.min.js"></script>
  <script src="assets/js/core/bootstrap.min.js"></script>
  <script src="assets/js/plugins/perfect-scrollbar.min.js"></script>
  <script src="assets/js/plugins/smooth-scrollbar.min.js"></script>
  <script>
    var win = navigator.platform.indexOf('Win') > -1;
    if (win && document.querySelector('#sidenav-scrollbar')) {
      var options = {
        damping: '0.5'
      }
      Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
    }
  </script>
  <!-- Github buttons -->
  <script async defer src="https://buttons.github.io/buttons.js"></script>
  <!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="assets/js/soft-ui-dashboard.min.js?v=1.0.7"></script>
</body>

</html>