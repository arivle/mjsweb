<!-- MENU SIDEBAR-->
<aside class="menu-sidebar d-none d-lg-block">
        <div class="logo">
            <a href="<?php echo base_url()?>">
                <img src="<?php echo base_url()."assets";?>/images/icon/logo.png" alt="Cool Admin"/>
            </a>
        </div>
        <div class="menu-sidebar__content js-scrollbar1">
            <nav class="navbar-sidebar">
                <ul class="list-unstyled navbar__list">
                    <li class="active has-sub">
                        <a class="js-arrow" href="<?php echo base_url()?>beranda"><i class="fas fa-tachometer-alt"></i>Dashboard</a>
                    </li>
                    <li>
                        <a href="<?php echo base_url()?>absensi">
                            <i class="fas fa-calendar-alt"></i>Absensi</a>
                    </li>
                    <li>
                        <a href="<?php echo base_url()?>pegawai/list_users">
                            <i class="fas fa-user"></i>Pegawai</a>
                    </li>
                    <li>
                        <a href="<?php echo base_url()?>klien">
                            <i class="far fa-check-square"></i>Klien</a>
                    </li>
                     <li>
                        <a href="<?php echo base_url()?>daftarproyek">
                            <i class="far fa-check-square"></i>Daftar Proyek</a>
                    </li>
                    <li class="has-sub">
                        <a class="js-arrow" href="#">
                            <i class="fas fa-dollar"></i>Keuangan</a>
                        <ul class="list-unstyled navbar__sub-list js-sub-list">
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
            </nav>
        </div>
    </aside>
    <!-- END MENU SIDEBAR-->