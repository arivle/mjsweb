      <!-- MAIN CONTENT-->
      <div class="main-content">
        <div class="section__content section__content--p30">
          <div class="container-fluid">
            <!-- DATA TABLE -->
            <div class="row">
              <div class="col-md-12">
                <h3 class="title-5 m-b-35">Daftar Pengeluaran</h3>
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
                        <th>person in charge</th>
                        <th>bukti</th>
                        <th></th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr class="tr-shadow">
                        <td>2113</td>
                        <td>2017-12-05 12:12</td>
                        <td class="desc">Beli Cilok</td>
                        <td>Lain-lain</td>
                        <td>5,000</td>
                        <td>Loadhi Didi</td>
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
                    <label for="poc-input" class=" form-control-label">Person In Charge</label>
                  </div>
                  <div class="col-12 col-md-9">
                    <input type="text" id="poc-input" name="poc-input" placeholder="johndoe" class="form-control">
                    <small class="form-text text-muted">Masukkan nama pegawai bersangkutan</small>
                  </div>
                </div>
                <div class="row form-group">
                  <div class="col col-md-3">
                    <label for="jenistransaksi-input" class=" form-control-label">Jenis Transaksi</label>
                  </div>
                  <div class="col-12 col-md-9">
                    <select name="jenistransaksi-input" id="jenistransaksi-input">
                      <option value="pinjaman">Hutang</option>
                      <option value="bayar-project">Lain-lain</option>
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