<div class="col-sm-12">
    <?php
    // Notifikasi pesan data berhasil disimpan
    if ($this->session->flashdata('pesan')) {
        echo '<div class="alert alert-success alert-dismissable">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>';
        echo $this->session->flashdata('pesan');
        echo '</div>';
        
    }
    ?>
    <table class="table table-responsive table-bordered">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama DI</th>
                <th>Desa</th>
                <th>Kecamatan</th>
                <th>Status DI</th>
                <th>Foto</th>
                <?php if ($this->session->userdata('username')<>"") { ?>
                    <th>Action</th>
                <?php } ?>
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
                <td><img src="<?= base_url('foto/'.$value->foto) ?>" width="150px"></td>
                <?php if ($this->session->userdata('username')<>"") { ?>
                <td>
                    <a href="<?= base_url('irigasi/edit/'.$value->id_irigasi) ?>" class="btn btn-sm btn-primary"><i class="fa fa-edit"></i></a>
                    <a href="<?= base_url('irigasi/hapus/'.$value->id_irigasi) ?>" class="btn btn-sm btn-danger" onclick="return confirm('Apakah anda ingin menghapus data?')"><i class="fa fa-trash"></i></a>
                </td>
                <?php } ?>
            </tr>
            <?php } ?>
        </tbody>
    </table>

</div>