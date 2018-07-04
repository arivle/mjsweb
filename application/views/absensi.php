        <!-- MAIN CONTENT-->
        <div class="main-content">
            <div class="section__content section__content--p30">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <!-- DATA TABLE -->
                            <h3 class="title-5 m-b-35">data absensi</h3>
                            <div class="table-data__tool">
                                <div class="table-data__tool-left">
                                    <div class="rs-select2--light rs-select2--md">
                                        <select class="js-select2" name="property">
                                            <option selected="selected">All Properties</option>
                                            <option value="">Option 1</option>
                                            <option value="">Option 2</option>
                                        </select>
                                        <div class="dropDownSelect2"></div>
                                    </div>
                                    <div class="rs-select2--light rs-select2--sm">
                                        <select class="js-select2" name="time">
                                            <option selected="selected">Today</option>
                                            <option value="">3 Days</option>
                                            <option value="">1 Week</option>
                                        </select>
                                        <div class="dropDownSelect2"></div>
                                    </div>
                                    <button class="au-btn-filter">
                                        <i class="zmdi zmdi-filter-list"></i>filters
                                    </button>
                                </div>
                                <div class="table-data__tool-right">
                                    <button class="au-btn au-btn-icon au-btn--green au-btn--small" data-toggle="modal"
                                            data-target="#tambahData">
                                        <i class="zmdi zmdi-plus"></i>tambah data
                                    </button>
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
                            <div class="table-responsive table-responsive-data2">
                                <table class="table table-data2">
                                    <thead>
                                    <tr>
                                        <th>no.</th>
                                        <th>nama pegawai</th>
                                        <th>tanggal</th>
                                        <th>waktu masuk</th>
                                        <th>waktu keluar</th>
                                        <th>keterangan</th>
                                        <th></th>
                                    </tr>
                                    </thead>
                                    <tbody>
										<?php
										$i = 0;
										foreach($absensi as $a){
											$i++;
											?>
                                    <tr class="tr-shadow">
                                        <td><?= $i ?>.</td>
                                        <td><?= $a->first_name.' '.$a->last_name ?></td>
                                        <td><?= $a->tanggal ?></td>
                                        <td><?= $a->waktuMasuk ?></td>
                                        <td><?= $a->waktuKeluar ?></td>
                                        <td class="desc"><?php echo strlen($a->keterangan) > 50 ? substr($a->keterangan,0,30)."..." : $a->keterangan ?></td>
                                        <td>
                                            <div class="table-data-feature">
                                                <button class="item" data-toggle="tooltip" data-placement="top"
                                                        title="Edit">
                                                    <i class="zmdi zmdi-edit"></i>
                                                </button>
                                                <button class="item" data-toggle="tooltip" data-placement="top"
                                                        title="Delete">
                                                    <i class="zmdi zmdi-delete"></i>
                                                </button>
                                                <button class="item" data-toggle="tooltip" data-placement="top"
                                                        title="More">
                                                    <i class="zmdi zmdi-more"></i>
                                                </button>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr class="spacer"></tr>
										<?php } ?>
                                    </tbody>
                                </table>
                            </div>
                            <!-- END DATA TABLE -->
                        </div>
                    </div>
                    <!-- <div class="col-md-12">
                        <div class="copyright">
                            <p>Copyright © 2018 Colorlib. All rights reserved. Template by <a
                                    href="https://colorlib.com">Colorlib</a>.</p>
                        </div>
                    </div> -->
                </div>
            </div>
        </div>
        <!-- end main content -->
        <!-- modal create -->
        <div class="modal fade" id="tambahData" tabindex="-1" role="dialog" aria-labelledby="mediumModalLabel"
             aria-hidden="true">
            <div class="modal-dialog modal-md" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="mediumModalLabel">Tambah Data</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="<?= base_url() ?>Absensi/tambahManual" id="formTambahData" method="post" enctype="multipart/form-data" class="form-horizontal">
                            <div class="row form-group">
                                <div class="col col-md-3">
                                    <label for="pegawai-select" class=" form-control-label">Nama Pegawai</label>
                                </div>
                                <div class="col-12 col-md-9">
                                    <select name="pegawai-select" id="pegawai-select" class="form-control">
                                        <option value="0">Please select</option>
                                        <?php
										foreach ($pegawai as $p){
											echo "<option value=\"$p->id\">".$p->first_name." ".$p->last_name."</option>";
										}
										?>
                                    </select>
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3">
                                    <label for="tanggal-input" class=" form-control-label">Tanggal</label>
                                </div>
                                <div class="col-12 col-md-9">
                                    <input type="text" id="tanggal-input" name="tanggal-input" placeholder=""
                                           class="form-control">
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3">
                                    <label for="masuk-input" class=" form-control-label">Jam Masuk</label>
                                </div>
                                <div class="col-12 col-md-9">
                                    <input type="text" id="masuk-input" name="masuk-input" placeholder=""
                                           class="form-control">
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3">
                                    <label for="keluar-input" class=" form-control-label">Jam Keluar</label>
                                </div>
                                <div class="col-12 col-md-9">
                                    <input type="text" id="keluar-input" name="keluar-input" placeholder=""
                                           class="form-control">
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3">
                                    <label for="keterangan-input" class=" form-control-label">Keterangan</label>
                                </div>
                                <div class="col-12 col-md-9">
                                    <textarea name="keterangan-input" id="keterangan-input" rows="9" placeholder="Masukkan keterangan..." class="form-control"></textarea>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                        <button type="submit" form="formTambahData" class="btn btn-primary">Confirm</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- end modal create -->
