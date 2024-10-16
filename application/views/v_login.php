<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Administrator | Login</title>
    <link rel="shortcut icon" href="<?= base_url() ?>icon/pupr.png" rel="stylesheet">

	<!-- BOOTSTRAP STYLES-->
    <link href="<?= base_url() ?>template/assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FONTAWESOME STYLES-->
    <link href="<?= base_url() ?>template/assets/css/font-awesome.css" rel="stylesheet" />
        <!-- CUSTOM STYLES-->
    <link href="<?= base_url() ?>template/assets/css/custom.css" rel="stylesheet" />
     <!-- GOOGLE FONTS-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />

</head>
<body>
    <div class="container">
        <div class="row text-center">
            <div class="col-md-12">
                <br><br>
                <h1>GISDI</h1>
                <h4>Sistem Informasi Geografis Daerah Irigasi</h4>
                <br>
            </div>
        </div>
    </div>
         
        <div class="row text-center">

            <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 col-xs-10 col-xs-offset-1">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                        <strong>Please Login yourself to get access !</strong> 
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

                            echo form_open('login/index'); 
                            ?>
                        <br>
                        <div class="form-group input-group">
                            <span class="input-group-addon"><i class="fa fa-user"></i></span>
                            <input name="username" placeholder="Masukkan Username" value="<?= set_value('username'); ?>" class="form-control" />
                        </div>

                        <div class="form-group input-group">
                            <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                            <input type="password" name="password" placeholder="Masukkan Password" value="<?= set_value('password'); ?>" class="form-control" />
                        </div>
                        <br>
                        <div class="form-group">
                            <label></label>
                            <button type="submit" class="btn btn-success">Login</button><br>
                            <a href="<?= base_url() ?>" class="btn btn-tranparent"><i class="fa fa-home"></i> Back To Home</a>
                        </div>

                            <?php echo form_close(); ?>
                        </div>
                    </div>


            </div>
        </div>
    </div>


     <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="<?= base_url() ?>template/assets/js/jquery-1.10.2.js"></script>
      <!-- BOOTSTRAP SCRIPTS -->
    <script src="<?= base_url() ?>template/assets/js/bootstrap.min.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="<?= base_url() ?>template/assets/js/jquery.metisMenu.js"></script>
      <!-- CUSTOM SCRIPTS -->
    <script src="<?= base_url() ?>template/assets/js/custom.js"></script>
   
</body>
</html>