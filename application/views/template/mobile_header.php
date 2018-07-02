<!-- HEADER MOBILE-->
<header class="header-mobile d-block d-lg-none">
        <div class="header-mobile__bar">
            <div class="container-fluid">
                <div class="header-mobile-inner">
                    <a class="logo" href="<?php echo base_url()?>">
                        <img src="<?php echo base_url()."assets";?>/images/icon/logo.png" alt="CoolAdmin"/>
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
                    <li class="active has-sub">
                        <a class="js-arrow" href="<?php echo base_url()?>beranda"><i class="fas fa-tachometer-alt"></i>Dashboard</a>
                    </li>
                    <li>
                        <a href="<?php echo base_url()?>absensi">
                            <i class="fas fa-calendar-alt"></i>Absensi</a>
                    </li>
                    <li>
                        <a href="<?php echo base_url()?>pegawai">
                            <i class="fas fa-user"></i>Pegawai</a>
                    </li>
                    <li>
                        <a href="<?php echo base_url()?>klien">
                            <i class="far fa-check-square"></i>Daftar Proyek</a>
                    </li>
                    <li class="has-sub">
                        <a class="js-arrow" href="#">
                            <i class="fas fa-dollar"></i>Keuangan</a>
                        <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                            <li>
                                <a href="<?php echo base_url()?>kas">
                                    <i class="fas fa-briefcase"></i>Kas</a>
                            </li>
                            <li>
                                <a href="<?php echo base_url()?>pemasukan">
                                    <i class="fas fa-download"></i>Pemasukan Proyek</a>
                            </li>
                            <li>
                                <a href="<?php echo base_url()?>pengeluaran">
                                    <i class="fas fa-upload"></i>Pengeluaran Proyek</a>
                            </li>
                            <li>
                                <a href="<?php echo base_url()?>lap_pemasukan">
                                    <i class="fas fa-chart-bar"></i>Laporan Pemasukan</a>
                            </li>
                            <li>
                                <a href="<?php echo base_url()?>lap_pengeluaran">
                                    <i class="fas fa-chart-bar"></i>Laporan Pengeluaran</a>
                            </li>

                        </ul>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
    <!-- END HEADER MOBILE-->