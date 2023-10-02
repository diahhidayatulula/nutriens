<?php
include "../server/protected.php";
$config = [
  "title" => "Nutriens",
  "page" => "Dashboard",
]
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/2.png">
  <title>
    <?php echo $config["title"]; ?>
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

<body class="g-sidenav-show  bg-gray-100">
  <?php
  $actived = "dashboard";
  include "sidebar.php";
  ?>
  <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
    <!-- Navbar -->
    <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur" navbar-scroll="true">
      <div class="container-fluid py-1 px-3">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
            <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="javascript:;">Pages</a></li>
            <li class="breadcrumb-item text-sm text-dark active" aria-current="page"><?= $config['page']  ?></li>
          </ol>
          <h6 class="font-weight-bolder mb-0"><?= $config['page']  ?></h6>
        </nav>
        <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
          <div class="ms-md-auto pe-md-3 d-flex align-items-center">
          </div>
          <ul class="navbar-nav  justify-content-end">
            <li class="nav-item d-flex align-items-center">
              <a href="../server/logout.php" class="nav-link text-body font-weight-bold px-0">
                <i class="fa fa-power-off me-sm-1"></i>
                <span class="d-sm-inline d-none">Logout</span>
              </a>
            </li>
            <li class="nav-item d-xl-none ps-3 d-flex align-items-center">
              <a href="javascript:;" class="nav-link text-body p-0" id="iconNavbarSidenav">
                <div class="sidenav-toggler-inner">
                  <i class="sidenav-toggler-line"></i>
                  <i class="sidenav-toggler-line"></i>
                  <i class="sidenav-toggler-line"></i>
                </div>
              </a>
            </li>
            <li class="nav-item px-3 d-flex align-items-center">
              <a href="javascript:;" class="nav-link text-body p-0">
                <i class="fa fa-cog fixed-plugin-button-nav cursor-pointer"></i>
              </a>
            </li>

          </ul>
        </div>
      </div>
    </nav>
    <!-- End Navbar -->
    <!--  -->
    <?php
    include "../server/koneksi.php";
    ?>
    <div class="container-fluid py-4">
      <div class="row">
        <div class="col-xl-4 col-sm-6 mb-xl-0 mb-4">
          <div class="card">
            <div class="card-body">
              <div class="row">
                <div class="col-8">
                  <h6 class="text-uppercase text-body text-xs font-weight-bolder">Kategori</h6>
                  <span class="h2 font-weight-bolder mb-0">
                    <?php
                    if($_SESSION['umur'] < 1){
                      echo "Balita";
                    }else if($_SESSION['umur'] < 10){
                      echo "Remaja";
                    }else{
                        echo "Dewasa";
                      }
                    ?>
                  </span>
                </div>
                <div class="col-4 text-end">
                  <div class="icon icon-shape bg-info shadow text-center border-radius-md">
                    <i class="ni ni-single-02 text-lg opacity-10" aria-hidden="true"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-4 col-sm-6 mb-xl-0 mb-4">
          <div class="card">
            <div class="card-body">
              <div class="row">
                <div class="col-8">
                  <h6 class="text-uppercase text-body text-xs font-weight-bolder">Status</h6>
                  <span class="h2 font-weight-bolder mb-0">
                  <?php
                    if($_SESSION['umur'] < 1){
                      $bbi = (($_SESSION['umur'] * 12) / 2) + 4;
                    }else if($_SESSION['umur'] < 10){
                      $bbi = $_SESSION['umur'] * 2 + 8;
                    }else{
                      $bbi = ($_SESSION['tb'] - 100) * 0.9;
                      }
                      $m = $_SESSION['tb'] / 100;
                      $imt = $_SESSION['bb'] / ($m * $m);
                      if($imt < 18.5){
                        echo "Kurus";
                      }else if($imt < 25){
                        echo "Normal";
                      }else if($imt < 30){
                        echo "Gemuk";
                      }else{
                        echo "Obesitas";
                      }
                    ?>

                  </span>
                </div>
                <div class="col-4 text-end">
                  <div class="icon icon-shape bg-info shadow text-center border-radius-md">
                    <i class="ni ni-single-02 text-lg opacity-10" aria-hidden="true"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-4 col-sm-6 mb-xl-0 mb-4">
          <div class="card">
            <div class="card-body">
              <div class="row">
                <div class="col-8">
                  <h6 class="text-uppercase text-body text-xs font-weight-bolder">Action</h6>
                  <span class="h2 font-weight-bolder mb-0">
                    <?php
                        if($imt < 18.5){
                          echo "Surplus";
                        }else if($imt < 25){
                          echo "Pertahankan";
                        }else if($imt < 30){
                          echo "Defisit";
                        }else{
                          echo "Konsultasi";
                        }
                    ?>
                  </span>
                </div>
                <div class="col-4 text-end">
                  <div class="icon icon-shape bg-info shadow text-center border-radius-md">
                    <i class="ni ni-single-02 text-lg opacity-10" aria-hidden="true"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>


      </div>
      <div class="row m-1 mt-3">
        <div class="card">
          <div class="card-body">
            <div class="row">
              <div class="col-xl-6 col-12">
                <h5>Data diri</h5>
                <div class="row">
                  <div class="col-5">
                    <p class="m-0">Nama</p>
                    <p class="m-0">Jenis Kelamin</p>
                    <p class="m-0">Umur</p>
                    <p class="m-0">Tinggi Badan</p>
                    <p class="m-0">Berat Badan</p>
                  </div>
                  <div class="col-5">
                    <p class="m-0">: <?= $_SESSION['nama'] ?></p>
                    <p class="m-0">: <?= $_SESSION['gender'] ?></p>
                    <p class="m-0">: <?= $_SESSION['umur'] < 1 ? " $_SESSION[umur] * 12 " . " Bulan" : "$_SESSION[umur]" . " Tahun" ?> </p>
                    <p class="m-0">: <?= $_SESSION['tb'] ?> Cm</p>
                    <p class="m-0">: <?= $_SESSION['bb'] ?> Kg</p>
                  </div>
                  <div class="col-3 mt-3">
                  <a href="edit.php" class="btn btn-info">Edit</a>        
                  </div>    
              </div>
              <div class="row">
              <h6 class="mt-3 text-bold">Saran Kalori dan Aktivitas Olahraga</h6>
                <div class="col-xl-6 col-12">
                  <div class="card">
                    <div class="card-body">
                      <h6 class="text-uppercase text-body text-xs font-weight-bolder">Kalori</h6>
                        <span class="h2 font-weight-bolder mb-0"> 
                        <?php
                          if($imt < 18.5){
                            $j = 1.8;
                          }else if($imt < 25){
                            $j = 1.2;
                          }else if($imt < 30){
                            $j = 1;
                          }else{
                            $j = 0.8;
                          }

                          if($_SESSION['gender'] == 'Wanita'){
                            $kalori = (655 + (9.6 * $_SESSION['bb']) + (1.8 * $_SESSION['tb']) - (4.7 * $_SESSION['umur'])) * $j;
                          }else{
                            $kalori = (66 + (13.7 * $_SESSION['bb']) + (5 * $_SESSION['tb']) - (6.8 * $_SESSION['umur'])) * $j;
                          }
                          echo $kalori;
                        ?>
                      </span>

                    </div>
                  </div>
                </div>
                <div class="col-xl-6 col-12">
                  <div class="card">
                    <div class="card-body">
                      <h6 class="text-uppercase text-body text-xs font-weight-bolder">Olahraga</h6>
                        <span class="h2 font-weight-bolder mb-0"> 
                        <?php
                        if($imt < 18.5){
                          echo "3x / Minggu";
                        }else if($imt < 25){
                          echo "2x / Minggu";
                        }else if($imt < 30){
                          echo "5x / Minggu";
                        }else{
                          echo "Konsultasi";
                        }
                    ?>    
                      </span>

                    </div>
                  </div>
                </div>
              </div>
              </div>
              <div class="col-xl-6 col-12 mt-5 mt-xl-0">
                <h6>Konsultasikan dengan dokter</h6>
                <div class="row">
                  <?php
                    include '../server/koneksi.php';
                    $sql = "SELECT * FROM dokter";
                    $query = mysqli_query($koneksi, $sql);
                    while($data = mysqli_fetch_array($query)){
                  ?>
                  <a href="https://wa.me/<?= $data['no'] ?>" class="col-12 mb-3 text-decoration-none" target="_blank">
                    <div class="d-flex align-items-center">
                      <img class="img-fluid rounded-circle" width="80" src="https://img.freepik.com/premium-vector/doctor-profile-with-medical-service-icon_617655-48.jpg?w=2000" alt="">
                      <div class="ms-3">
                        <h6 class="m-0"><?= $data['nama'] ?></h6>
                        <span class="text-sm m-0"><?= $data['desc'] ?></span>
                    </div>
                  </div>
                    </a>
                <?php } ?>
              </div>
                <div class="row mt-3">
                  <h6>Artikel Terkait</h6>
                  <?php
                    include '../server/koneksi.php';
                    $sql = "SELECT * FROM edukasi";
                    $query = mysqli_query($koneksi, $sql);
                    while($data = mysqli_fetch_array($query)){
                  ?>
                  <a href="<?= $data['link'] ?>" class="col-12 mb-3 text-decoration-none" target="_blank">
                    <div class="d-flex align-items-center">
                      <img class="img-fluid" width="100" src="<?= $data['gambar'] ?>" alt="">
                      <div class="ms-3">
                        <h6 class="m-0"><?= $data['judul'] ?></h6>
                        <span class="text-sm m-0"><?= $data['desc'] ?><span>
                    </div>
                  </div>
                    </a>
                <?php } ?>

                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>
  <div class="fixed-plugin">
    <a class="fixed-plugin-button text-dark position-fixed px-3 py-2">
      <i class="fa fa-cog py-2"> </i>
    </a>
    <div class="card shadow-lg ">
      <div class="card-header pb-0 pt-3 ">
        <div class="float-start">
          <h5 class="mt-3 mb-0">Nutriens Config</h5>
          <p>Pilihlah Demi kenyamanan Anda</p>
        </div>
        <div class="float-end mt-4">
          <button class="btn btn-link text-dark p-0 fixed-plugin-close-button">
            <i class="fa fa-close"></i>
          </button>
        </div>
        <!-- End Toggle Button -->
      </div>
      <hr class="horizontal dark my-1">
      <div class="card-body pt-sm-3 pt-0">
        <!-- Sidebar Backgrounds -->
        <div>
          <h6 class="mb-0">Warna Sidebar</h6>
        </div>
        <a href="javascript:void(0)" class="switch-trigger background-color">
          <div class="badge-colors my-2 text-start">
            <span class="badge filter bg-gradient-primary active" data-color="primary" onclick="sidebarColor(this)"></span>
            <span class="badge filter bg-gradient-dark" data-color="dark" onclick="sidebarColor(this)"></span>
            <span class="badge filter bg-gradient-info" data-color="info" onclick="sidebarColor(this)"></span>
            <span class="badge filter bg-gradient-success" data-color="success" onclick="sidebarColor(this)"></span>
            <span class="badge filter bg-gradient-warning" data-color="warning" onclick="sidebarColor(this)"></span>
            <span class="badge filter bg-gradient-danger" data-color="danger" onclick="sidebarColor(this)"></span>
          </div>
        </a>
        <!-- Sidenav Type -->
        <div class="mt-3">
          <h6 class="mb-0">Type Sidebar</h6>
          <p class="text-sm">Pilih antara dua type ini</p>
        </div>
        <div class="d-flex">
          <button class="btn bg-gradient-primary w-100 px-3 mb-2 active" data-class="bg-transparent" onclick="sidebarType(this)">Transparent</button>
          <button class="btn bg-gradient-primary w-100 px-3 mb-2 ms-2" data-class="bg-white" onclick="sidebarType(this)">White</button>
        </div>
        <!-- Navbar Fixed -->
        <div class="mt-3">
          <h6 class="mb-0">Navbar Fixed</h6>
        </div>
        <div class="form-check form-switch ps-0">
          <input class="form-check-input mt-1 ms-auto" type="checkbox" id="navbarFixed" onclick="navbarFixed(this)">
        </div>
      </div>
    </div>
  </div>
  <!--   Core JS Files   -->
  <script src="assets/js/core/popper.min.js"></script>
  <script src="assets/js/core/bootstrap.min.js"></script>
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