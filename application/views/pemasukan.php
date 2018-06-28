<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags-->
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="au theme template">
  <meta name="author" content="Hau Nguyen">
  <meta name="keywords" content="au theme template">

  <!-- Title Page-->
  <title>Pemasukan</title>

  <!-- Fontfaces CSS-->
  <link href="css/font-face.css" rel="stylesheet" media="all">
  <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
  <link href="vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
  <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

  <!-- Bootstrap CSS-->
  <link href="vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

  <!-- Vendor CSS-->
  <link href="<?php echo base_url();?>assets/vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
  <link href="<?php echo base_url();?>assets/vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
  <link href="<?php echo base_url();?>assets/vendor/wow/animate.css" rel="stylesheet" media="all">
  <link href="<?php echo base_url();?>assets/vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
  <link href="<?php echo base_url();?>assets/vendor/slick/slick.css" rel="stylesheet" media="all">
  <link href="<?php echo base_url();?>assets/vendor/select2/select2.min.css" rel="stylesheet" media="all">
  <link href="<?php echo base_url();?>assets/vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">

  <!-- Main CSS-->
  <link href="<?php echo base_url();?>assets/css/theme.css" rel="stylesheet" media="all">

</head>

<body class="animsition">
  <div class="page-wrapper">
    <!-- HEADER MOBILE-->
    <header class="header-mobile d-block d-lg-none">
      <div class="header-mobile__bar">
        <div class="container-fluid">
          <div class="header-mobile-inner">
            <a class="logo" href="index.html">
              <img src="<?php echo base_url();?>assets/images/icon/logo.png" alt="CoolAdmin" />
            </a>
            <button class="hamburger hamburger--slider" type="button">
              <span class="hamburger-box">
                <span class="hamburger-inner"></span>
              </span>
            </button>
          </div>
        </div>
      </div>
      <nav class="navbar-mobile">
        <div class="container-fluid">
          <ul class="navbar-mobile__list list-unstyled">
            <li class="has-sub">
              <a class="js-arrow" href="beranda.html">
                <i class="fas fa-tachometer-alt"></i>Dashboard</a>
            </li>
            <li>
              <a href="absensi.html">
                <i class="fas fa-calendar-alt"></i>Absensi</a>
            </li>
            <li>
              <a href="absensi.html">
                <i class="fas fa-user"></i>Pegawai</a>
            </li>
            <li>
              <a href="form.html">
                <i class="far fa-check-square"></i>Daftar Proyek</a>
            </li>
            <li class="active has-sub">
              <a class="js-arrow" href="#">
                <i class="fas fa-dollar"></i>Keuangan</a>
              <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                <li>
                  <a href="table.html">
                    <i class="fas fa-briefcase"></i>Kas</a>
                </li>
                <li>
                  <a href="table.html">
                    <i class="fas fa-download"></i>Pemasukan</a>
                </li>
                <li>
                  <a href="table.html">
                    <i class="fas fa-upload"></i>Pengeluaran</a>
                </li>
                <li>
                  <a href="chart.html">
                    <i class="fas fa-chart-bar"></i>Laporan Pemasukan</a>
                </li>
                <li>
                  <a href="chart.html">
                    <i class="fas fa-chart-bar"></i>Laporan Pengeluaran</a>
                </li>

              </ul>
            </li>
          </ul>
        </div>
      </nav>
    </header>
    <!-- END HEADER MOBILE-->

    <!-- MENU SIDEBAR-->
    <aside class="menu-sidebar d-none d-lg-block">
      <div class="logo">
        <a href="#">
          <img src="<?php echo base_url();?>assets/images/icon/logo.png" alt="Cool Admin" />
        </a>
      </div>
      <div class="menu-sidebar__content js-scrollbar1">
        <nav class="navbar-sidebar">
          <ul class="list-unstyled navbar__list">
            <li class="has-sub">
              <a class="js-arrow" href="beranda.html">
                <i class="fas fa-tachometer-alt"></i>Dashboard</a>
            </li>
            <li>
              <a href="absensi.html">
                <i class="fas fa-calendar-alt"></i>Absensi</a>
            </li>
            <li>
              <a href="absensi.html">
                <i class="fas fa-user"></i>Pegawai</a>
            </li>
            <li>
              <a href="form.html">
                <i class="far fa-check-square"></i>Daftar Proyek</a>
            </li>
            <li class="active has-sub">
              <a class="js-arrow" href="#">
                <i class="fas fa-dollar"></i>Keuangan</a>
              <ul class="list-unstyled navbar__sub-list js-sub-list">
                <li>
                  <a href="table.html">
                    <i class="fas fa-briefcase"></i>Kas</a>
                </li>
                <li>
                  <a href="table.html">
                    <i class="active fas fa-download"></i>Pemasukan</a>
                </li>
                <li>
                  <a href="table.html">
                    <i class="fas fa-upload"></i>Pengeluaran</a>
                </li>
                <li>
                  <a href="chart.html">
                    <i class="fas fa-chart-bar"></i>Laporan Pemasukan</a>
                </li>
                <li>
                  <a href="chart.html">
                    <i class="fas fa-chart-bar"></i>Laporan Pengeluaran</a>
                </li>

              </ul>
            </li>
          </ul>
        </nav>
      </div>
    </aside>
    <!-- END MENU SIDEBAR-->

    <!-- PAGE CONTAINER-->
    <div class="page-container">
      <!-- HEADER DESKTOP-->
      <header class="header-desktop">
        <div class="section__content section__content--p30">
          <div class="container-fluid">
            <div class="header-wrap">
              <form class="form-header" action="" method="POST">
                <input class="au-input au-input--xl" type="text" name="search" placeholder="Search for datas &amp; reports..." />
                <button class="au-btn--submit" type="submit">
                  <i class="zmdi zmdi-search"></i>
                </button>
              </form>
              <div class="header-button">
                <div class="noti-wrap">
                  <div class="noti__item js-item-menu">
                    <i class="zmdi zmdi-comment-more"></i>
                    <span class="quantity">1</span>
                    <div class="mess-dropdown js-dropdown">
                      <div class="mess__title">
                        <p>You have 2 news message</p>
                      </div>
                      <div class="mess__item">
                        <div class="image img-cir img-40">
                          <img src="<?php echo base_url();?>assets/images/icon/avatar-06.jpg" alt="Michelle Moreno" />
                        </div>
                        <div class="content">
                          <h6>Michelle Moreno</h6>
                          <p>Have sent a photo</p>
                          <span class="time">3 min ago</span>
                        </div>
                      </div>
                      <div class="mess__item">
                        <div class="image img-cir img-40">
                          <img src="<?php echo base_url();?>assets/images/icon/avatar-04.jpg" alt="Diane Myers" />
                        </div>
                        <div class="content">
                          <h6>Diane Myers</h6>
                          <p>You are now connected on message</p>
                          <span class="time">Yesterday</span>
                        </div>
                      </div>
                      <div class="mess__footer">
                        <a href="#">View all messages</a>
                      </div>
                    </div>
                  </div>
                  <div class="noti__item js-item-menu">
                    <i class="zmdi zmdi-email"></i>
                    <span class="quantity">1</span>
                    <div class="email-dropdown js-dropdown">
                      <div class="email__title">
                        <p>You have 3 New Emails</p>
                      </div>
                      <div class="email__item">
                        <div class="image img-cir img-40">
                          <img src="<?php echo base_url();?>assets/images/icon/avatar-06.jpg" alt="Cynthia Harvey" />
                        </div>
                        <div class="content">
                          <p>Meeting about new dashboard...</p>
                          <span>Cynthia Harvey, 3 min ago</span>
                        </div>
                      </div>
                      <div class="email__item">
                        <div class="image img-cir img-40">
                          <img src="<?php echo base_url();?>assets/images/icon/avatar-05.jpg" alt="Cynthia Harvey" />
                        </div>
                        <div class="content">
                          <p>Meeting about new dashboard...</p>
                          <span>Cynthia Harvey, Yesterday</span>
                        </div>
                      </div>
                      <div class="email__item">
                        <div class="image img-cir img-40">
                          <img src="<?php echo base_url();?>assets/images/icon/avatar-04.jpg" alt="Cynthia Harvey" />
                        </div>
                        <div class="content">
                          <p>Meeting about new dashboard...</p>
                          <span>Cynthia Harvey, April 12,,2018</span>
                        </div>
                      </div>
                      <div class="email__footer">
                        <a href="#">See all emails</a>
                      </div>
                    </div>
                  </div>
                  <div class="noti__item js-item-menu">
                    <i class="zmdi zmdi-notifications"></i>
                    <span class="quantity">3</span>
                    <div class="notifi-dropdown js-dropdown">
                      <div class="notifi__title">
                        <p>You have 3 Notifications</p>
                      </div>
                      <div class="notifi__item">
                        <div class="bg-c1 img-cir img-40">
                          <i class="zmdi zmdi-email-open"></i>
                        </div>
                        <div class="content">
                          <p>You got a email notification</p>
                          <span class="date">April 12, 2018 06:50</span>
                        </div>
                      </div>
                      <div class="notifi__item">
                        <div class="bg-c2 img-cir img-40">
                          <i class="zmdi zmdi-account-box"></i>
                        </div>
                        <div class="content">
                          <p>Your account has been blocked</p>
                          <span class="date">April 12, 2018 06:50</span>
                        </div>
                      </div>
                      <div class="notifi__item">
                        <div class="bg-c3 img-cir img-40">
                          <i class="zmdi zmdi-file-text"></i>
                        </div>
                        <div class="content">
                          <p>You got a new file</p>
                          <span class="date">April 12, 2018 06:50</span>
                        </div>
                      </div>
                      <div class="notifi__footer">
                        <a href="#">All notifications</a>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="account-wrap">
                  <div class="account-item clearfix js-item-menu">
                    <div class="image">
                      <img src="<?php echo base_url();?>assets/images/icon/avatar-01.jpg" alt="John Doe" />
                    </div>
                    <div class="content">
                      <a class="js-acc-btn" href="#">john doe</a>
                    </div>
                    <div class="account-dropdown js-dropdown">
                      <div class="info clearfix">
                        <div class="image">
                          <a href="#">
                            <img src="<?php echo base_url();?>assets/images/icon/avatar-01.jpg" alt="John Doe" />
                          </a>
                        </div>
                        <div class="content">
                          <h5 class="name">
                            <a href="#">john doe</a>
                          </h5>
                          <span class="email">johndoe@example.com</span>
                        </div>
                      </div>
                      <div class="account-dropdown__body">
                        <div class="account-dropdown__item">
                          <a href="#">
                            <i class="zmdi zmdi-account"></i>Account</a>
                        </div>
                        <div class="account-dropdown__item">
                          <a href="#">
                            <i class="zmdi zmdi-settings"></i>Setting</a>
                        </div>
                        <div class="account-dropdown__item">
                          <a href="#">
                            <i class="zmdi zmdi-money-box"></i>Billing</a>
                        </div>
                      </div>
                      <div class="account-dropdown__footer">
                        <a href="#">
                          <i class="zmdi zmdi-power"></i>Logout</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </header>
      <!-- HEADER DESKTOP-->

      <!-- MAIN CONTENT-->
      <div class="main-content">
        <div class="section__content section__content--p30">
          <div class="container-fluid">
            <!-- DATA TABLE -->
            <div class="row">
              <div class="col-md-12">
                <h3 class="title-5 m-b-35">Daftar Pemasukan</h3>
                <div class="table-data__tool">
                  <div class="table-data__tool-left">
                    <div class="rs-select2--light rs-select2--sm">
                      <select class="js-select2" name="property">
                        <option selected="selected">Tahun</option>
                        <option value="">2018</option>
                        <option value="">2017</option>
                      </select>
                      <div class="dropDownSelect2"></div>
                    </div>
                    <div class="rs-select2--light rs-select2--sm">
                      <select class="js-select2" name="time">
                        <option selected="selected">Bulan</option>
                        <option value="">Januari</option>
                        <option value="">Februari</option>
                      </select>
                      <div class="dropDownSelect2"></div>
                    </div>
                    <button class="au-btn-filter">
                      <i class="zmdi zmdi-filter-list"></i>filters</button>
                  </div>
                  <div class="table-data__tool-right">
                    <button class="au-btn au-btn-icon au-btn--green au-btn--small" data-toggle="modal" data-target="#tambahData">
                      <i class="zmdi zmdi-plus"></i>tambah data</button>
                    <div class="rs-select2--dark rs-select2--sm rs-select2--dark2">
                      <select class="js-select2" name="type">
                        <option selected="selected">Export</option>
                        <option value="">Option 1</option>
                        <option value="">Option 2</option>
                      </select>
                      <div class="dropDownSelect2"></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- RINCIAN PEMASUKAN -->
            <div class="row m-t-30">
              <div class="col-md-12">
                <div class="table-responsive table-responsive-data2">
                  <table class="table table-data2">
                    <thead>
                      <tr>
                        <th>id</th>
                        <th>tanggal</th>
                        <th>nama transaksi</th>
                        <th>kategori</th>
                        <th>nominal (Rp.)</th>
                        <th>terima dari</th>
                        <th>bukti</th>
                        <th></th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr class="tr-shadow">
                        <td>1113</td>
                        <td>2017-12-05 10:12</td>
                        <td class="desc">Pinjaman Bank ABC</td>
                        <td>Pinjaman</td>
                        <td>1,000,000</td>
                        <td>Bank ABC</td>
                        <td><a href="#">detail</a></td>
                        <td>
                          <div class="table-data-feature">
                            <button class="item" data-toggle="tooltip" data-placement="top" title="Edit">
                              <i class="zmdi zmdi-edit"></i>
                            </button>
                            <button class="item" data-toggle="tooltip" data-placement="top" title="Delete">
                              <i class="zmdi zmdi-delete"></i>
                            </button>
                          </div>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
            <!-- END RINCIAN PEMASUKAN -->
            <!-- END DATA TABLE -->
            <div class="row">
              <div class="col-md-12">
                <div class="copyright">
                  <p>Copyright © 2018 Colorlib. All rights reserved. Template by
                    <a href="https://colorlib.com">Colorlib</a>.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- END MAIN CONTENT-->
      <!-- modal create -->
      <div class="modal fade" id="tambahData" tabindex="-1" role="dialog" aria-labelledby="mediumModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-md" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="mediumModalLabel">Tambah Data</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <form action="" method="post" enctype="multipart/form-data" class="form-horizontal">
                <div class="row form-group">
                  <div class="col col-md-3">
                    <label class=" form-control-label">Id Transaksi</label>
                  </div>
                  <div class="col-12 col-md-9">
                    <p class="form-control-static">id_transaksi</p>
                  </div>
                </div>
                <div class="row form-group">
                    <div class="col col-md-3">
                      <label class="namatrans form-control-label">Nama Transaksi</label>
                    </div>
                    <div class="col-12 col-md-9">
                        <input type="text" id="namatrans-input" name="namatrans-input" class="form-control">
                        <small class="form-text text-muted">Masukkan nama transaksi</small>
                    </div>
                </div>
                <div class="row form-group">
                  <div class="col col-md-3">
                    <label for="waktu-input" class=" form-control-label">Waktu Transaksi</label>
                  </div>
                  <div class="col-12 col-md-9">
                    <input type="date" id="waktu-input" name="waktu-input" class="form-control">
                    <small class="form-text text-muted">Masukkan tanggal transaksi</small>
                  </div>
                </div>
                <div class="row form-group">
                  <div class="col col-md-3">
                    <label for="nominal-input" class=" form-control-label">Nominal</label>
                  </div>
                  <div class="col-12 col-md-9">
                    <input type="number" id="nominal-input" name="nominal-input" placeholder="1000000" class="form-control">
                    <small class="help-block form-text">Masukkan nominal pemasukan</small>
                  </div>
                </div>
                <div class="row form-group">
                  <div class="col col-md-3">
                    <label for="terimadari-input" class=" form-control-label">Terima Dari</label>
                  </div>
                  <div class="col-12 col-md-9">
                    <input type="text" id="terimadari-input" name="terimadari-input" placeholder="johndoe" class="form-control">
                    <small class="form-text text-muted">Masukkan nama pembayar</small>
                  </div>
                </div>
                <div class="row form-group">
                  <div class="col col-md-3">
                    <label for="jenistransaksi-input" class=" form-control-label">Jenis Transaksi</label>
                  </div>
                  <div class="col-12 col-md-9">
                    <select name="jenistransaksi-input" id="jenistransaksi-input">
                      <option value="pinjaman">Pinjaman</option>
                      <option value="bayar-project">Pembayaran Project</option>
                    </select>
                  </div>
                </div>
                <div class="row form-group">
                    <div class="col col-md-3">
                      <label for="bukti-input" class=" form-control-label">Bukti</label>
                    </div>
                    <div class="col-12 col-md-9">
                        <input type="file" id="bukti-input" name="bukti-input" class="form-control" pattern="jpg">
                        <small class="form-text text-muted">Upload bukti transaksi</small>
                    </div>
                  </div>
              </form>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
              <button type="button" class="btn btn-primary">Confirm</button>
            </div>
          </div>
        </div>
      </div>
      <!-- end modal create -->
    </div>
    <!-- END PAGE CONTAINER-->

  </div>

  <!-- Jquery JS-->
  <script src="vendor/jquery-3.2.1.min.js"></script>
  <!-- Bootstrap JS-->
  <script src="vendor/bootstrap-4.1/popper.min.js"></script>
  <script src="vendor/bootstrap-4.1/bootstrap.min.js"></script>
  <!-- Vendor JS       -->
  <script src="vendor/slick/slick.min.js">
  </script>
  <script src="vendor/wow/wow.min.js"></script>
  <script src="vendor/animsition/animsition.min.js"></script>
  <script src="vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
  </script>
  <script src="vendor/counter-up/jquery.waypoints.min.js"></script>
  <script src="vendor/counter-up/jquery.counterup.min.js">
  </script>
  <script src="vendor/circle-progress/circle-progress.min.js"></script>
  <script src="vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
  <script src="vendor/chartjs/Chart.bundle.min.js"></script>
  <script src="vendor/select2/select2.min.js">
  </script>

  <!-- Main JS-->
  <script src="js/main.js"></script>

</body>

</html>
<!-- end document-->