<!-- HEADER MOBILE-->
<header class="header-mobile d-block d-lg-none">
        <div class="header-mobile__bar">
            <div class="container-fluid">
                <div class="header-mobile-inner">
                    <a class="logo" href="<?php echo base_url() ?>">
                        <img src="<?php echo base_url() . "assets"; ?>/images/icon/logo.png" alt="CoolAdmin"/>
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
                    <li class="<?php echo show_current_class('beranda'); ?>">
                        <a href="<?php echo base_url() ?>beranda"><i class="fas fa-tachometer-alt"></i>Dashboard</a>
                    </li>
                    <li class="<?php echo show_current_class('absensi'); ?>">
                        <a href="<?php echo base_url() ?>absensi">
                            <i class="fas fa-calendar-alt"></i>Absensi</a>
                    </li>
                    <li class="<?php echo show_current_class('pegawai/list_users'); ?>">
                        <a href="<?php echo base_url() ?>pegawai/list_users">
                            <i class="fas fa-user"></i>Pegawai</a>
                    </li>
                    <li class="<?php echo show_current_class('klien'); ?>">
                        <a href="<?php echo base_url() ?>klien">
                            <i class="far fa-check-square"></i>Klien</a>
                    </li>
                     <li class="<?php echo show_current_class('daftarproyek'); ?>">
                        <a href="<?php echo base_url() ?>daftarproyek">
                            <i class="far fa-check-square"></i>Daftar Proyek</a>
                    </li>
                    <li class="has-sub">
                        <a class="js-arrow" href="#">
                            <i class="fas fa-dollar"></i>Keuangan</a>
                        <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                            <li class="<?php echo show_current_class('keuangan/kas'); ?>">
                                <a href="<?php echo base_url() ?>keuangan/kas">
                                    <i class="fas fa-briefcase"></i>Kas</a>
                            </li>
                            <li class="<?php echo show_current_class('keuangan/pemasukan'); ?>">
                                <a href="<?php echo base_url() ?>keuangan/pemasukan">
                                    <i class="fas fa-download"></i>Pemasukan Proyek</a>
                            </li>
                            <li class="<?php echo show_current_class('keuangan/pengeluaran'); ?>">
                                <a href="<?php echo base_url() ?>keuangan/pengeluaran">
                                    <i class="fas fa-upload"></i>Pengeluaran Proyek</a>
                            </li>
                            <li class="<?php echo show_current_class('keuangan/lap_pemasukan'); ?>">
                                <a href="<?php echo base_url() ?>keuangan/lap_pemasukan">
                                    <i class="fas fa-chart-bar"></i>Laporan Pemasukan</a>
                            </li>
                            <li class="<?php echo show_current_class('keuangan/lap_pengeluaran'); ?>">
                                <a href="<?php echo base_url() ?>keuangan/lap_pengeluaran">
                                    <i class="fas fa-chart-bar"></i>Laporan Pengeluaran</a>
                            </li>
                        </ul>
                    </li>
                    <li class="has-sub show-dropdown">
                        <a class="js-arrow" href="#">
                            <i class="fas"><img width="20px" height="20px" src="<?php echo base_url()."assets";?>/images/icon/avatar-01.jpg" alt="John Doe"/></i>
                            John Doe
                        </a>
                        <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                        <li>
                            <a href="#">
                                <i class="zmdi zmdi-account"></i>Profile</a>
                        </li>
                        <li>
                            <a href="/logout">
                                <i class="zmdi zmdi-power"></i>Logout</a>
                        </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
    <!-- END HEADER MOBILE-->