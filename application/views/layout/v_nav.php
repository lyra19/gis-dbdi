<nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
				    <li class="text-center">
                    <img src="<?= base_url() ?>template/assets/img/find_user.png" class="user-image img-responsive"/>
					</li>
				
					
                    <li>
                        <a  href="<?= base_url('home') ?>"><i class="fa fa-compass"></i>Peta</a>
                    </li>
                    
                    <li>
                        <a  href="<?= base_url('irigasi') ?>"><i class="fa fa-sitemap"></i>Daerah Irigasi</a>
                    </li>

                    <?php if ($this->session->userdata('username')<>"") { ?>
                        <li>
                            <a  href="<?= base_url('irigasi/input') ?>"><i class="fa fa-plus"></i>Input Daerah Irigasi</a>
                        </li>

                        <li>
                            <a  href="<?= base_url('user') ?>"><i class="fa fa-user"></i>User</a>
                        </li>		
                        
                        <!-- <li>    
                            <a  href="<?= base_url('user/input') ?>"><i class="fa fa-plus"></i>Input User</a>
                        </li> -->
                    <?php } ?>		
                </ul>
               
            </div>
            
        </nav>  
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                     <h2><?= $title; ?></h2>   
                    </div>
                </div>
                 <!-- /. ROW  -->
                 <hr />