<!DOCTYPE html>
<html lang="en">
<?php
echo "\n"; 
echo "<head>\n"; 
echo "    <!-- Required meta tags-->\n"; 
echo "    <meta charset=\"UTF-8\">\n"; 
echo "    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">\n"; 
echo "    <meta name=\"description\" content=\"au theme template\">\n"; 
echo "    <meta name=\"author\" content=\"Hau Nguyen\">\n"; 
echo "    <meta name=\"keywords\" content=\"au theme template\">\n"; 
echo "\n"; 
echo "    <!-- Title Page-->\n"; 
echo "    <title>Laporan Pengeluaran</title>\n"; 
echo "\n"; 
echo "    <!-- Fontfaces CSS-->\n"; 
echo "    <link href=\"css/font-face.css\" rel=\"stylesheet\" media=\"all\">\n"; 
echo "    <link href=\"vendor/font-awesome-4.7/css/font-awesome.min.css\" rel=\"stylesheet\" media=\"all\">\n"; 
echo "    <link href=\"vendor/font-awesome-5/css/fontawesome-all.min.css\" rel=\"stylesheet\" media=\"all\">\n"; 
echo "    <link href=\"vendor/mdi-font/css/material-design-iconic-font.min.css\" rel=\"stylesheet\" media=\"all\">\n"; 
echo "\n"; 
echo "    <!-- Bootstrap CSS-->\n"; 
echo "    <link href=\"vendor/bootstrap-4.1/bootstrap.min.css\" rel=\"stylesheet\" media=\"all\">\n"; 
echo "\n"; 
echo "    <!-- Vendor CSS-->\n"; 
echo "    <link href=\"vendor/animsition/animsition.min.css\" rel=\"stylesheet\" media=\"all\">\n"; 
echo "    <link href=\"vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css\" rel=\"stylesheet\" media=\"all\">\n"; 
echo "    <link href=\"vendor/wow/animate.css\" rel=\"stylesheet\" media=\"all\">\n"; 
echo "    <link href=\"vendor/css-hamburgers/hamburgers.min.css\" rel=\"stylesheet\" media=\"all\">\n"; 
echo "    <link href=\"vendor/slick/slick.css\" rel=\"stylesheet\" media=\"all\">\n"; 
echo "    <link href=\"vendor/select2/select2.min.css\" rel=\"stylesheet\" media=\"all\">\n"; 
echo "    <link href=\"vendor/perfect-scrollbar/perfect-scrollbar.css\" rel=\"stylesheet\" media=\"all\">\n"; 
echo "\n"; 
echo "    <!-- Main CSS-->\n"; 
echo "    <link href=\"css/theme.css\" rel=\"stylesheet\" media=\"all\">\n"; 
echo "\n"; 
echo "</head>\n"; 
echo "\n"; 
echo "<body class=\"animsition\">\n"; 
echo "    <div class=\"page-wrapper\">\n"; 
echo "        <!-- HEADER MOBILE-->\n"; 
echo "        <header class=\"header-mobile d-block d-lg-none\">\n"; 
echo "            <div class=\"header-mobile__bar\">\n"; 
echo "                <div class=\"container-fluid\">\n"; 
echo "                    <div class=\"header-mobile-inner\">\n"; 
echo "                        <a class=\"logo\" href=\"index.html\">\n"; 
echo "                            <img src=\"images/icon/logo.png\" alt=\"CoolAdmin\" />\n"; 
echo "                        </a>\n"; 
echo "                        <button class=\"hamburger hamburger--slider\" type=\"button\">\n"; 
echo "                            <span class=\"hamburger-box\">\n"; 
echo "                                <span class=\"hamburger-inner\"></span>\n"; 
echo "                            </span>\n"; 
echo "                        </button>\n"; 
echo "                    </div>\n"; 
echo "                </div>\n"; 
echo "            </div>\n"; 
echo "            <nav class=\"navbar-mobile\">\n"; 
echo "                <div class=\"container-fluid\">\n"; 
echo "                    <ul class=\"navbar-mobile__list list-unstyled\">\n"; 
echo "                        <li class=\"has-sub\">\n"; 
echo "                            <a class=\"js-arrow\" href=\"beranda.html\">\n"; 
echo "                                <i class=\"fas fa-tachometer-alt\"></i>Dashboard</a>\n"; 
echo "                        </li>\n"; 
echo "                        <li>\n"; 
echo "                            <a href=\"absensi.html\">\n"; 
echo "                                <i class=\"fas fa-calendar-alt\"></i>Absensi</a>\n"; 
echo "                        </li>\n"; 
echo "                        <li>\n"; 
echo "                            <a href=\"absensi.html\">\n"; 
echo "                                <i class=\"fas fa-user\"></i>Pegawai</a>\n"; 
echo "                        </li>\n"; 
echo "                        <li>\n"; 
echo "                            <a href=\"form.html\">\n"; 
echo "                                <i class=\"far fa-check-square\"></i>Daftar Proyek</a>\n"; 
echo "                        </li>\n"; 
echo "                        <li class=\"active has-sub\">\n"; 
echo "                            <a class=\"js-arrow\" href=\"#\">\n"; 
echo "                                <i class=\"fas fa-dollar\"></i>Keuangan</a>\n"; 
echo "                            <ul class=\"navbar-mobile-sub__list list-unstyled js-sub-list\">\n"; 
echo "                                <li>\n"; 
echo "                                    <a href=\"table.html\">\n"; 
echo "                                        <i class=\"fas fa-briefcase\"></i>Kas</a>\n"; 
echo "                                </li>\n"; 
echo "                                <li>\n"; 
echo "                                    <a href=\"table.html\">\n"; 
echo "                                        <i class=\"fas fa-download\"></i>Pemasukan Proyek</a>\n"; 
echo "                                </li>\n"; 
echo "                                <li>\n"; 
echo "                                    <a href=\"table.html\">\n"; 
echo "                                        <i class=\"fas fa-upload\"></i>Pengeluaran Proyek</a>\n"; 
echo "                                </li>\n"; 
echo "                                <li>\n"; 
echo "                                    <a href=\"chart.html\">\n"; 
echo "                                        <i class=\"fas fa-chart-bar\"></i>Laporan Pemasukan</a>\n"; 
echo "                                </li>\n"; 
echo "                                <li>\n"; 
echo "                                    <a href=\"chart.html\">\n"; 
echo "                                        <i class=\"active fas fa-chart-bar\"></i>Laporan Pengeluaran</a>\n"; 
echo "                                </li>\n"; 
echo "\n"; 
echo "                            </ul>\n"; 
echo "                        </li>\n"; 
echo "                    </ul>\n"; 
echo "                </div>\n"; 
echo "            </nav>\n"; 
echo "        </header>\n"; 
echo "        <!-- END HEADER MOBILE-->\n"; 
echo "\n"; 
echo "        <!-- MENU SIDEBAR-->\n"; 
echo "        <aside class=\"menu-sidebar d-none d-lg-block\">\n"; 
echo "            <div class=\"logo\">\n"; 
echo "                <a href=\"#\">\n"; 
echo "                    <img src=\"images/icon/logo.png\" alt=\"Cool Admin\" />\n"; 
echo "                </a>\n"; 
echo "            </div>\n"; 
echo "            <div class=\"menu-sidebar__content js-scrollbar1\">\n"; 
echo "                <nav class=\"navbar-sidebar\">\n"; 
echo "                    <ul class=\"list-unstyled navbar__list\">\n"; 
echo "                        <li class=\"has-sub\">\n"; 
echo "                            <a class=\"js-arrow\" href=\"beranda.html\">\n"; 
echo "                                <i class=\"fas fa-tachometer-alt\"></i>Dashboard</a>\n"; 
echo "                        </li>\n"; 
echo "                        <li>\n"; 
echo "                            <a href=\"absensi.html\">\n"; 
echo "                                <i class=\"fas fa-calendar-alt\"></i>Absensi</a>\n"; 
echo "                        </li>\n"; 
echo "                        <li>\n"; 
echo "                            <a href=\"absensi.html\">\n"; 
echo "                                <i class=\"fas fa-user\"></i>Pegawai</a>\n"; 
echo "                        </li>\n"; 
echo "                        <li>\n"; 
echo "                            <a href=\"form.html\">\n"; 
echo "                                <i class=\"far fa-check-square\"></i>Daftar Proyek</a>\n"; 
echo "                        </li>\n"; 
echo "                        <li class=\"active has-sub\">\n"; 
echo "                            <a class=\"js-arrow\" href=\"#\">\n"; 
echo "                                <i class=\"fas fa-dollar\"></i>Keuangan</a>\n"; 
echo "                            <ul class=\"list-unstyled navbar__sub-list js-sub-list\">\n"; 
echo "                                <li>\n"; 
echo "                                    <a href=\"table.html\">\n"; 
echo "                                        <i class=\"fas fa-briefcase\"></i>Kas</a>\n"; 
echo "                                </li>\n"; 
echo "                                <li>\n"; 
echo "                                    <a href=\"table.html\">\n"; 
echo "                                        <i class=\"fas fa-download\"></i>Pemasukan Proyek</a>\n"; 
echo "                                </li>\n"; 
echo "                                <li>\n"; 
echo "                                    <a href=\"table.html\">\n"; 
echo "                                        <i class=\"fas fa-upload\"></i>Pengeluaran Proyek</a>\n"; 
echo "                                </li>\n"; 
echo "                                <li>\n"; 
echo "                                    <a href=\"chart.html\">\n"; 
echo "                                        <i class=\"fas fa-chart-bar\"></i>Laporan Pemasukan</a>\n"; 
echo "                                </li>\n"; 
echo "                                <li>\n"; 
echo "                                    <a href=\"chart.html\">\n"; 
echo "                                        <i class=\"active fas fa-chart-bar\"></i>Laporan Pengeluaran</a>\n"; 
echo "                                </li>\n"; 
echo "\n"; 
echo "                            </ul>\n"; 
echo "                        </li>\n"; 
echo "                    </ul>\n"; 
echo "                </nav>\n"; 
echo "            </div>\n"; 
echo "        </aside>\n"; 
echo "        <!-- END MENU SIDEBAR-->\n"; 
echo "\n"; 
echo "        <!-- PAGE CONTAINER-->\n"; 
echo "        <div class=\"page-container\">\n"; 
echo "            <!-- HEADER DESKTOP-->\n"; 
echo "            <header class=\"header-desktop\">\n"; 
echo "                <div class=\"section__content section__content--p30\">\n"; 
echo "                    <div class=\"container-fluid\">\n"; 
echo "                        <div class=\"header-wrap\">\n"; 
echo "                            <form class=\"form-header\" action=\"\" method=\"POST\">\n"; 
echo "                                <input class=\"au-input au-input--xl\" type=\"text\" name=\"search\" placeholder=\"Search for datas &amp; reports...\" />\n"; 
echo "                                <button class=\"au-btn--submit\" type=\"submit\">\n"; 
echo "                                    <i class=\"zmdi zmdi-search\"></i>\n"; 
echo "                                </button>\n"; 
echo "                            </form>\n"; 
echo "                            <div class=\"header-button\">\n"; 
echo "                                <div class=\"noti-wrap\">\n"; 
echo "                                    <div class=\"noti__item js-item-menu\">\n"; 
echo "                                        <i class=\"zmdi zmdi-comment-more\"></i>\n"; 
echo "                                        <span class=\"quantity\">1</span>\n"; 
echo "                                        <div class=\"mess-dropdown js-dropdown\">\n"; 
echo "                                            <div class=\"mess__title\">\n"; 
echo "                                                <p>You have 2 news message</p>\n"; 
echo "                                            </div>\n"; 
echo "                                            <div class=\"mess__item\">\n"; 
echo "                                                <div class=\"image img-cir img-40\">\n"; 
echo "                                                    <img src=\"images/icon/avatar-06.jpg\" alt=\"Michelle Moreno\" />\n"; 
echo "                                                </div>\n"; 
echo "                                                <div class=\"content\">\n"; 
echo "                                                    <h6>Michelle Moreno</h6>\n"; 
echo "                                                    <p>Have sent a photo</p>\n"; 
echo "                                                    <span class=\"time\">3 min ago</span>\n"; 
echo "                                                </div>\n"; 
echo "                                            </div>\n"; 
echo "                                            <div class=\"mess__item\">\n"; 
echo "                                                <div class=\"image img-cir img-40\">\n"; 
echo "                                                    <img src=\"images/icon/avatar-04.jpg\" alt=\"Diane Myers\" />\n"; 
echo "                                                </div>\n"; 
echo "                                                <div class=\"content\">\n"; 
echo "                                                    <h6>Diane Myers</h6>\n"; 
echo "                                                    <p>You are now connected on message</p>\n"; 
echo "                                                    <span class=\"time\">Yesterday</span>\n"; 
echo "                                                </div>\n"; 
echo "                                            </div>\n"; 
echo "                                            <div class=\"mess__footer\">\n"; 
echo "                                                <a href=\"#\">View all messages</a>\n"; 
echo "                                            </div>\n"; 
echo "                                        </div>\n"; 
echo "                                    </div>\n"; 
echo "                                    <div class=\"noti__item js-item-menu\">\n"; 
echo "                                        <i class=\"zmdi zmdi-email\"></i>\n"; 
echo "                                        <span class=\"quantity\">1</span>\n"; 
echo "                                        <div class=\"email-dropdown js-dropdown\">\n"; 
echo "                                            <div class=\"email__title\">\n"; 
echo "                                                <p>You have 3 New Emails</p>\n"; 
echo "                                            </div>\n"; 
echo "                                            <div class=\"email__item\">\n"; 
echo "                                                <div class=\"image img-cir img-40\">\n"; 
echo "                                                    <img src=\"images/icon/avatar-06.jpg\" alt=\"Cynthia Harvey\" />\n"; 
echo "                                                </div>\n"; 
echo "                                                <div class=\"content\">\n"; 
echo "                                                    <p>Meeting about new dashboard...</p>\n"; 
echo "                                                    <span>Cynthia Harvey, 3 min ago</span>\n"; 
echo "                                                </div>\n"; 
echo "                                            </div>\n"; 
echo "                                            <div class=\"email__item\">\n"; 
echo "                                                <div class=\"image img-cir img-40\">\n"; 
echo "                                                    <img src=\"images/icon/avatar-05.jpg\" alt=\"Cynthia Harvey\" />\n"; 
echo "                                                </div>\n"; 
echo "                                                <div class=\"content\">\n"; 
echo "                                                    <p>Meeting about new dashboard...</p>\n"; 
echo "                                                    <span>Cynthia Harvey, Yesterday</span>\n"; 
echo "                                                </div>\n"; 
echo "                                            </div>\n"; 
echo "                                            <div class=\"email__item\">\n"; 
echo "                                                <div class=\"image img-cir img-40\">\n"; 
echo "                                                    <img src=\"images/icon/avatar-04.jpg\" alt=\"Cynthia Harvey\" />\n"; 
echo "                                                </div>\n"; 
echo "                                                <div class=\"content\">\n"; 
echo "                                                    <p>Meeting about new dashboard...</p>\n"; 
echo "                                                    <span>Cynthia Harvey, April 12,,2018</span>\n"; 
echo "                                                </div>\n"; 
echo "                                            </div>\n"; 
echo "                                            <div class=\"email__footer\">\n"; 
echo "                                                <a href=\"#\">See all emails</a>\n"; 
echo "                                            </div>\n"; 
echo "                                        </div>\n"; 
echo "                                    </div>\n"; 
echo "                                    <div class=\"noti__item js-item-menu\">\n"; 
echo "                                        <i class=\"zmdi zmdi-notifications\"></i>\n"; 
echo "                                        <span class=\"quantity\">3</span>\n"; 
echo "                                        <div class=\"notifi-dropdown js-dropdown\">\n"; 
echo "                                            <div class=\"notifi__title\">\n"; 
echo "                                                <p>You have 3 Notifications</p>\n"; 
echo "                                            </div>\n"; 
echo "                                            <div class=\"notifi__item\">\n"; 
echo "                                                <div class=\"bg-c1 img-cir img-40\">\n"; 
echo "                                                    <i class=\"zmdi zmdi-email-open\"></i>\n"; 
echo "                                                </div>\n"; 
echo "                                                <div class=\"content\">\n"; 
echo "                                                    <p>You got a email notification</p>\n"; 
echo "                                                    <span class=\"date\">April 12, 2018 06:50</span>\n"; 
echo "                                                </div>\n"; 
echo "                                            </div>\n"; 
echo "                                            <div class=\"notifi__item\">\n"; 
echo "                                                <div class=\"bg-c2 img-cir img-40\">\n"; 
echo "                                                    <i class=\"zmdi zmdi-account-box\"></i>\n"; 
echo "                                                </div>\n"; 
echo "                                                <div class=\"content\">\n"; 
echo "                                                    <p>Your account has been blocked</p>\n"; 
echo "                                                    <span class=\"date\">April 12, 2018 06:50</span>\n"; 
echo "                                                </div>\n"; 
echo "                                            </div>\n"; 
echo "                                            <div class=\"notifi__item\">\n"; 
echo "                                                <div class=\"bg-c3 img-cir img-40\">\n"; 
echo "                                                    <i class=\"zmdi zmdi-file-text\"></i>\n"; 
echo "                                                </div>\n"; 
echo "                                                <div class=\"content\">\n"; 
echo "                                                    <p>You got a new file</p>\n"; 
echo "                                                    <span class=\"date\">April 12, 2018 06:50</span>\n"; 
echo "                                                </div>\n"; 
echo "                                            </div>\n"; 
echo "                                            <div class=\"notifi__footer\">\n"; 
echo "                                                <a href=\"#\">All notifications</a>\n"; 
echo "                                            </div>\n"; 
echo "                                        </div>\n"; 
echo "                                    </div>\n"; 
echo "                                </div>\n"; 
echo "                                <div class=\"account-wrap\">\n"; 
echo "                                    <div class=\"account-item clearfix js-item-menu\">\n"; 
echo "                                        <div class=\"image\">\n"; 
echo "                                            <img src=\"images/icon/avatar-01.jpg\" alt=\"John Doe\" />\n"; 
echo "                                        </div>\n"; 
echo "                                        <div class=\"content\">\n"; 
echo "                                            <a class=\"js-acc-btn\" href=\"#\">john doe</a>\n"; 
echo "                                        </div>\n"; 
echo "                                        <div class=\"account-dropdown js-dropdown\">\n"; 
echo "                                            <div class=\"info clearfix\">\n"; 
echo "                                                <div class=\"image\">\n"; 
echo "                                                    <a href=\"#\">\n"; 
echo "                                                        <img src=\"images/icon/avatar-01.jpg\" alt=\"John Doe\" />\n"; 
echo "                                                    </a>\n"; 
echo "                                                </div>\n"; 
echo "                                                <div class=\"content\">\n"; 
echo "                                                    <h5 class=\"name\">\n"; 
echo "                                                        <a href=\"#\">john doe</a>\n"; 
echo "                                                    </h5>\n"; 
echo "                                                    <span class=\"email\">johndoe@example.com</span>\n"; 
echo "                                                </div>\n"; 
echo "                                            </div>\n"; 
echo "                                            <div class=\"account-dropdown__body\">\n"; 
echo "                                                <div class=\"account-dropdown__item\">\n"; 
echo "                                                    <a href=\"#\">\n"; 
echo "                                                        <i class=\"zmdi zmdi-account\"></i>Account</a>\n"; 
echo "                                                </div>\n"; 
echo "                                                <div class=\"account-dropdown__item\">\n"; 
echo "                                                    <a href=\"#\">\n"; 
echo "                                                        <i class=\"zmdi zmdi-settings\"></i>Setting</a>\n"; 
echo "                                                </div>\n"; 
echo "                                                <div class=\"account-dropdown__item\">\n"; 
echo "                                                    <a href=\"#\">\n"; 
echo "                                                        <i class=\"zmdi zmdi-money-box\"></i>Billing</a>\n"; 
echo "                                                </div>\n"; 
echo "                                            </div>\n"; 
echo "                                            <div class=\"account-dropdown__footer\">\n"; 
echo "                                                <a href=\"#\">\n"; 
echo "                                                    <i class=\"zmdi zmdi-power\"></i>Logout</a>\n"; 
echo "                                            </div>\n"; 
echo "                                        </div>\n"; 
echo "                                    </div>\n"; 
echo "                                </div>\n"; 
echo "                            </div>\n"; 
echo "                        </div>\n"; 
echo "                    </div>\n"; 
echo "                </div>\n"; 
echo "            </header>\n"; 
echo "            <!-- HEADER DESKTOP-->\n"; 
echo "\n"; 
echo "            <!-- MAIN CONTENT-->\n"; 
echo "            <div class=\"main-content\">\n"; 
echo "                <div class=\"section__content section__content--p30\">\n"; 
echo "                    <div class=\"container-fluid\">\n"; 
echo "                        <!-- DATA TABLE -->\n"; 
echo "                        <div class=\"row\">\n"; 
echo "                            <div class=\"col-md-12\">\n"; 
echo "                                <h3 class=\"title-5 m-b-35\">Laporan Pengeluaran - latest</h3>\n"; 
echo "                                <div class=\"table-data__tool\">\n"; 
echo "                                    <div class=\"table-data__tool-left\">\n"; 
echo "                                        <div class=\"rs-select2--light rs-select2--sm\">\n"; 
echo "                                            <select class=\"js-select2\" name=\"property\">\n"; 
echo "                                                <option selected=\"selected\">Tahun</option>\n"; 
echo "                                                <option value=\"\">2018</option>\n"; 
echo "                                                <option value=\"\">2017</option>\n"; 
echo "                                            </select>\n"; 
echo "                                            <div class=\"dropDownSelect2\"></div>\n"; 
echo "                                        </div>\n"; 
echo "                                        <div class=\"rs-select2--light rs-select2--sm\">\n"; 
echo "                                            <select class=\"js-select2\" name=\"time\">\n"; 
echo "                                                <option selected=\"selected\">Bulan</option>\n"; 
echo "                                                <option value=\"\">Januari</option>\n"; 
echo "                                                <option value=\"\">Februari</option>\n"; 
echo "                                            </select>\n"; 
echo "                                            <div class=\"dropDownSelect2\"></div>\n"; 
echo "                                        </div>\n"; 
echo "                                        <button class=\"au-btn-filter\">\n"; 
echo "                                            <i class=\"zmdi zmdi-filter-list\"></i>filters</button>\n"; 
echo "                                    </div>\n"; 
echo "                                    <div class=\"table-data__tool-right\">\n"; 
echo "                                        <div class=\"rs-select2--dark rs-select2--sm rs-select2--dark2\">\n"; 
echo "                                            <select class=\"js-select2\" name=\"type\">\n"; 
echo "                                                <option selected=\"selected\">Export</option>\n"; 
echo "                                                <option value=\"\">Option 1</option>\n"; 
echo "                                                <option value=\"\">Option 2</option>\n"; 
echo "                                            </select>\n"; 
echo "                                            <div class=\"dropDownSelect2\"></div>\n"; 
echo "                                        </div>\n"; 
echo "                                    </div>\n"; 
echo "                                </div>\n"; 
echo "                            </div>\n"; 
echo "                        </div>\n"; 
echo "                        <div class=\"row m-t-25\">\n"; 
echo "                            <!-- TOTAL PENGEULUARAN -->\n"; 
echo "                            <div class=\"col-sm-6 col-lg-8\">\n"; 
echo "                                <div class=\"overview-item overview-item--c3\">\n"; 
echo "                                    <div class=\"overview__inner\">\n"; 
echo "                                        <div class=\"overview-box clearfix\">\n"; 
echo "                                            <div class=\"icon\">\n"; 
echo "                                                <i class=\"zmdi zmdi-shopping-cart\"></i>\n"; 
echo "                                            </div>\n"; 
echo "                                            <div class=\"text\">\n"; 
echo "                                                <h2>$5,000</h2>\n"; 
echo "                                                <span>total pengeluaran</span>\n"; 
echo "                                            </div>\n"; 
echo "                                        </div>\n"; 
echo "                                        <div class=\"overview-chart\">\n"; 
echo "                                            <canvas id=\"widgetChart3\"></canvas>\n"; 
echo "                                        </div>\n"; 
echo "                                    </div>\n"; 
echo "                                </div>\n"; 
echo "                            </div>\n"; 
echo "                        </div>\n"; 
echo "                        <!-- RINCIAN PENGELUARAN -->\n"; 
echo "                        <div class=\"row m-t-30\">\n"; 
echo "                            <div class=\"col-md-12\">\n"; 
echo "                                <h3 class=\"title-5 m-b-35\">Rincian Pengeluaran</h3>\n"; 
echo "                                <div class=\"table-responsive table-responsive-data2\">\n"; 
echo "                                    <table class=\"table table-data2\">\n"; 
echo "                                        <thead>\n"; 
echo "                                        <tr>\n"; 
echo "                                            <th>id</th>\n"; 
echo "                                            <th>tanggal</th>\n"; 
echo "                                            <th>nama transaksi</th>\n"; 
echo "                                            <th>kategori</th>\n"; 
echo "                                            <th>nominal (Rp.)</th>\n"; 
echo "                                            <th>person in charge</th>\n"; 
echo "                                        </tr>\n"; 
echo "                                        </thead>\n"; 
echo "                                        <tbody>\n"; 
echo "                                            <tr class=\"tr-shadow\">\n"; 
echo "                                                <td>2113</td>\n"; 
echo "                                                <td>2017-12-05 12:12</td>\n"; 
echo "                                                <td class=\"desc\">Beli Cilok</td>\n"; 
echo "                                                <td>Lain-lain</td>\n"; 
echo "                                                <td>5,000</td>\n"; 
echo "                                                <td>Loadhi Didi</td>\n"; 
echo "                                            </tr>\n"; 
echo "                                        </tbody>\n"; 
echo "                                    </table>\n"; 
echo "                                </div>\n"; 
echo "                            </div>\n"; 
echo "                        </div>\n"; 
echo "                        <!-- END RINCIAN PENGELUARAN -->\n"; 
echo "                        <!-- END DATA TABLE -->\n"; 
echo "                        <div class=\"row\">\n"; 
echo "                            <div class=\"col-md-12\">\n"; 
echo "                                <div class=\"copyright\">\n"; 
echo "                                    <p>Copyright © 2018 Colorlib. All rights reserved. Template by\n"; 
echo "                                        <a href=\"https://colorlib.com\">Colorlib</a>.</p>\n"; 
echo "                                </div>\n"; 
echo "                            </div>\n"; 
echo "                        </div>\n"; 
echo "                    </div>\n"; 
echo "                </div>\n"; 
echo "            </div>\n"; 
echo "            <!-- END MAIN CONTENT-->\n"; 
echo "            <!-- END PAGE CONTAINER-->\n"; 
echo "        </div>\n"; 
echo "\n"; 
echo "    </div>\n"; 
echo "\n"; 
echo "    <!-- Jquery JS-->\n"; 
echo "    <script src=\"vendor/jquery-3.2.1.min.js\"></script>\n"; 
echo "    <!-- Bootstrap JS-->\n"; 
echo "    <script src=\"vendor/bootstrap-4.1/popper.min.js\"></script>\n"; 
echo "    <script src=\"vendor/bootstrap-4.1/bootstrap.min.js\"></script>\n"; 
echo "    <!-- Vendor JS       -->\n"; 
echo "    <script src=\"vendor/slick/slick.min.js\">\n"; 
echo "    </script>\n"; 
echo "    <script src=\"vendor/wow/wow.min.js\"></script>\n"; 
echo "    <script src=\"vendor/animsition/animsition.min.js\"></script>\n"; 
echo "    <script src=\"vendor/bootstrap-progressbar/bootstrap-progressbar.min.js\">\n"; 
echo "    </script>\n"; 
echo "    <script src=\"vendor/counter-up/jquery.waypoints.min.js\"></script>\n"; 
echo "    <script src=\"vendor/counter-up/jquery.counterup.min.js\">\n"; 
echo "    </script>\n"; 
echo "    <script src=\"vendor/circle-progress/circle-progress.min.js\"></script>\n"; 
echo "    <script src=\"vendor/perfect-scrollbar/perfect-scrollbar.js\"></script>\n"; 
echo "    <script src=\"vendor/chartjs/Chart.bundle.min.js\"></script>\n"; 
echo "    <script src=\"vendor/select2/select2.min.js\">\n"; 
echo "    </script>\n"; 
echo "\n"; 
echo "    <!-- Main JS-->\n"; 
echo "    <script src=\"js/main.js\"></script>\n"; 
echo "\n"; 
echo "</body>\n"; 
echo "\n"; 
echo "</html>\n"; 
echo "<!-- end document-->\n";
?>