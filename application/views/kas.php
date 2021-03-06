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
                        <!-- RINCIAN KAS -->
                        <div class="row m-t-30">
                            <div class="col-md-12">
                                <div class="table-responsive table-responsive-data2">
                                    <table class="table table-data2">
                                        <thead>
                                            <tr>
                                                <th>Tanggal</th>
                                                <th>Bukti</th>
                                                <th>Transaksi</th>
                                                <th>Kode</th>
                                                <th>Debet (Rp.)</th>
                                                <th>Kredit (Rp.)</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr class="tr-shadow">
                                                <td>2017-12-01 00:15</td>
                                                <td><a href="#">201712010015.jpg</a></td>
                                                <td class="desc">Saldo Awal</td>
                                                <td>SDO</td>
                                                <td>2,500,000</td>
                                                <td>-</td>
                                            </tr>
                                            <tr class="tr-shadow">
                                                <td>2017-12-05 10:12</td>
                                                <td><a href="#">201712051012.jpg</a></td>
                                                <td class="desc">Pembelian Alat Tulis Kantor</td>
                                                <td>ADM</td>
                                                <td>-</td>
                                                <td>250,000</td>
                                            </tr>
                                            <tr class="tr-shadow">
                                                <td>2017-12-10 10:12</td>
                                                <td><a href="#">201712101012.jpg</a></td>
                                                <td class="desc">Ambil kas dari BCA</td>
                                                <td>BNK</td>
                                                <td>2,500,000</td>
                                                <td>-</td>
                                            </tr>
                                            <tr class="tr-shadow">
                                                <td>2017-12-14 10:12</td>
                                                <td><a href="#">201712141012.jpg</a></td>
                                                <td class="desc">Pembelian Komputer</td>
                                                <td>ADM</td>
                                                <td>-</td>
                                                <td>2,500,000</td>
                                            </tr>
                                            <tr class="tr-shadow">
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td class="desc">Jumlah</td>
                                                <td>5,000,000</td>
                                                <td>2,750,000</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <!-- END RINCIAN KAS -->
                        <!-- TOTAL PEMASUKAN -->
                        <div class="row m-t-25">
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

                        <!-- END DATA TABLE -->
