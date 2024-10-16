<div class="row">
    <div class="col-sm-12">
        <div class="panel panel-danger">
            <div class="panel-heading">Database Daerah Irigasi</div>
            <div class="panel-body">
                
                <table class="table table-responsive table-bordered">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama DI</th>
                            <th>Desa</th>
                            <th>Kecamatan</th>
                            <th>Status DI</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no=1; foreach ($irigasi as $key => $value) { ?>
                        <tr>
                            <td><?= $no++; ?></td>
                            <td><?= $value->nama_irigasi; ?></td>
                            <td><?= $value->desa; ?></td>
                            <td><?= $value->kec; ?></td>
                            <td><?= $value->status_irigasi; ?></td>
                            <td>
                                <a href="<?= base_url('webgis/detail/'.$value->id_irigasi) ?>" class="btn btn-sm btn-success"><i class="fa fa-eye"></i></a>
                                <!-- <a href="" class="btn btn-sm btn-primary"><i class="fa fa-download"></i></a> -->
                            </td>
                        </tr>
                        <?php } ?>
                    </tbody>
                </table>

            </div>
        </div>
    </div>
</div>
