            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <!-- DATA TABLE -->
                        <div class="row">
                            <div class="col-md-12">
                                <h3 class="title-5 m-b-35">Tabel Kas</h3>
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
                        <div class="row m-t-25">
                            <!-- TOTAL PEMASUKAN -->
                            <div class="col-sm-6 col-lg-4">
                                <div class="overview-item overview-item--c4">
                                    <div class="overview__inner">
                                        <div class="overview-box clearfix">
                                            <div class="icon">
                                                <i class="zmdi zmdi-money"></i>
                                            </div>
                                            <div class="text">
                                                <h2>$1,060,386</h2>
                                                <span>total pemasukan</span>
                                            </div>
                                        </div>
                                        <div class="overview-chart">
                                            <canvas id="widgetChart4"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- TOTAL PENGELUARAN -->
                            <div class="col-sm-6 col-lg-4">
                                <div class="overview-item overview-item--c3">
                                    <div class="overview__inner">
                                        <div class="overview-box clearfix">
                                            <div class="icon">
                                                <i class="zmdi zmdi-shopping-cart"></i>
                                            </div>
                                            <div class="text">
                                                <h2>$1,060,386</h2>
                                                <span>total pengeluaran</span>
                                            </div>
                                        </div>
                                        <div class="overview-chart">
                                            <canvas id="widgetChart3"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- SALDO -->
                            <div class="col-sm-6 col-lg-4">
                                <div class="overview-item overview-item--c2">
                                    <div class="overview__inner">
                                        <div class="overview-box clearfix">
                                            <div class="icon">
                                                <i class="zmdi zmdi-money"></i>
                                            </div>
                                            <div class="text">
                                                <h2>$1,060,386</h2>
                                                <span>SALDO</span>
                                            </div>
                                        </div>
                                        <div class="overview-chart">
                                            <canvas id="widgetChart2"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- RINCIAN PEMASUKAN -->
                        <div class="row m-t-30">
                            <div class="col-md-12">
                                <h3 class="title-5 m-b-35">Rincian Pemasukan</h3>
                                <div class="table-responsive table-responsive-data2">
                                    <table class="table table-data2">
                                        <thead>
                                            <tr>
                                                <th>id</th>
                                                <th>tanggal</th>
                                                <th>nama transaksi</th>
                                                <th>kategori</th>
                                                <th>nominal (Rp.)</th>
                                                <th>POC</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr class="tr-shadow">
                                                <td>1113</td>
                                                <td>2017-12-05 10:12</td>
                                                <td class="desc">Pinjaman Bank ABC</td>
                                                <td>Pinjaman</td>
                                                <td>1,000,000</td>
                                                <td>Loadhi Didi</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <!-- END RINCIAN PEMASUKAN -->
                        <!-- RINCIAN PENGELUARAN -->
                        <div class="row m-t-30">
                            <div class="col-md-12">
                                <h3 class="title-5 m-b-35">Rincian Pengeluaran</h3>
                                <div class="table-responsive table-responsive-data2">
                                    <table class="table table-data2">
                                        <thead>
                                            <tr>
                                                <th>id</th>
                                                <th>tanggal</th>
                                                <th>nama transaksi</th>
                                                <th>kategori</th>
                                                <th>nominal (Rp.)</th>
                                                <th>POC</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr class="tr-shadow">
                                                <td>101</td>
                                                <td>2017-12-02 10:12</td>
                                                <td class="desc">Beli Krupuk</td>
                                                <td>Lain-lain</td>
                                                <td>10,000</td>
                                                <td>Loadhi Didi</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <!-- END RINCIAN PENGELUARAN -->
                        <!-- END DATA TABLE -->