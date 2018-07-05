        <!-- MAIN CONTENT-->
        <div class="main-content">
            <div class="section__content section__content--p30">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <!-- DATA TABLE -->
                            <h3 class="title-5 m-b-35">data pegawai</h3>
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
                                    <button class="au-btn au-btn-icon au-btn--green au-btn--small" data-toggle="modal" data-target="#tambahData">
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
                            <div class="infoMessage"><?php echo $message;?></div>
                            <div class="table-responsive table-responsive-data2">
                                <table class="table table-data2">
                                    <thead>
                                    <tr>
                                        <th>no.</th>
                                        <th>nama pegawai</th>
                                        <th>role</th>
                                        <th>status</th>
                                        <th></th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                    $i = 0;
                                    foreach($users as $user){
                                    $i++; ?>
                                    <tr class="tr-shadow">
                                        <td><?= $i.'.'; ?></td>
                                        <td><?= $user->username ?></td>
                                        <td>
                                            <?php foreach($user->groups as $grup) {?>
                                            <span class="role <?php echo $grup->name; ?>"><?php echo $grup->name; ?></span>
                                            <?php }?>
                                        </td>
                                        <td>
                                            <span class="role members">aktif</span>
                                        </td>
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
                </div>
            </div>
        </div>
        <!-- END MAIN CONTENT -->
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
                        <form action="<?=base_url()?>pegawai/create_user" method="post" id="formTambahUser" enctype="multipart/form-data" class="form-horizontal">
                            <div class="row form-group">
                                <div class="col col-md-3">
                                    <label class="form-control-label">Static</label>
                                </div>
                                <div class="col-12 col-md-9">
                                    <p class="form-control-static">Username</p>
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3">
                                    <label for="first_name" class=" form-control-label">Nama Depan</label>
                                </div>
                                <div class="col-12 col-md-9">
                                    <input type="text" id="first_name" name="first_name" placeholder="John Doe" class="form-control">
                                    <small class="form-text text-muted">Masukkan nama depan pegawai</small>
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3">
                                    <label for="last_name" class=" form-control-label">Nama Belakang</label>
                                </div>
                                <div class="col-12 col-md-9">
                                    <input type="text" id="last_name" name="last_name" placeholder="John Doe" class="form-control">
                                    <small class="form-text text-muted">Masukkan nama belakang pegawai</small>
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3">
                                    <label for="email" class=" form-control-label">E-mail</label>
                                </div>
                                <div class="col-12 col-md-9">
                                    <input type="email" id="email" name="email" placeholder="mail@example.com" class="form-control">
                                    <small class="help-block form-text">Masukkan e-mail pegawai</small>
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3">
                                    <label for="phone" class=" form-control-label">Phone</label>
                                </div>
                                <div class="col-12 col-md-9">
                                    <input type="text" id="phone" name="phone" placeholder="0812334567" class="form-control">
                                    <small class="form-text text-muted">Masukkan no telepon</small>
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3">
                                    <label for="username" class=" form-control-label">Nama Belakang</label>
                                </div>
                                <div class="col-12 col-md-9">
                                    <input type="text" id="username" name="username" placeholder="John Doe" class="form-control">
                                    <small class="form-text text-muted">Masukkan username</small>
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3">
                                    <label for="password" class=" form-control-label">Password</label>
                                </div>
                                <div class="col-12 col-md-9">
                                    <input type="password" id="password" name="password" placeholder="Password" class="form-control">
                                    <small class="help-block form-text">Masukkan password pegawai</small>
                                </div>
                            </div>
                            <div class="row form-group">
                                <?php if(isset($roles)){ ?>
                                <div class="col col-md-3">
                                    <label for="groups" class=" form-control-label">Roles</label>
                                </div>
                                <div class="col-12 col-md-9">
                                    <?php foreach($roles as $group)
                                    {
                                    echo '<div class="checkbox">';
                                        echo '<label>';
                                            echo form_checkbox('groups', $group->id, set_checkbox('groups', $group->id));
                                            echo ' '.$group->name;
                                            echo '</label>';
                                        echo '</div>';
                                    }
                                    } ?>
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3">
                                    <label for="status" class=" form-control-label">Status</label>
                                </div>
                                <div class="col-12 col-md-9">
                                    <select name="status" id="status" class="form-control">
                                        <option value="1">Pegawai Aktif</option>
                                        <option value="2">Pegawai Nonaktif</option>
                                    </select>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                        <button type="submit" form="formTambahUser" class="btn btn-primary">Confirm</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- end modal create -->

    </div>
