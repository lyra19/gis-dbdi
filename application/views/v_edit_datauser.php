<div class="col-sm-7">
    <div class="panel panel-primary">
        <div class="panel-heading">
            Edit Data
        </div>
            <div class="panel-body">
            <?php 
                            // validasi data tidak boleh kosong
                            echo validation_errors('<div class="alert alert-danger alert-dismissable">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>','</div>');

                            // Notifikasi pesan data berhasil disimpan
                            if ($this->session->flashdata('pesan')) {
                                echo '<div class="alert alert-success alert-dismissable">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>';
                                echo $this->session->flashdata('pesan');
                                echo '</div>';
                                
                            } 

                            echo form_open('user/edit/'.$user->id_user); 
                            ?>

                        <div class="form-group">
                            <label>Nama User</label>
                            <input name="nama_user" placeholder="Masukkan Nama User" value="<?= $user->nama_user ?>" class="form-control" />
                        </div>

                        <div class="form-group">
                            <label>Username</label>
                            <input name="username" placeholder="Masukkan Username" value="<?= $user->username ?>" class="form-control" />
                        </div>

                        <div class="form-group">
                            <label>Password</label>
                            <input name="password" placeholder="Masukkan Password" value="<?= $user->password ?>" class="form-control" />
                        </div>

                        <div class="form-group">
                            <label></label>
                            <button type="submit" class="btn btn-sm btn-primary">Simpan</button>
                            <button type="reset" class="btn btn-sm btn-success">Reset</button>
                        </div>

                        <?php echo form_close(); ?>
                </div>
        </div>
</div>
