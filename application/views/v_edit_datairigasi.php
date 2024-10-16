<div class="col-sm-7">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            Lokasi Daerah Irigasi
                        </div>
                        <div class="panel-body">
                            
                            <div id="map" style="height: 500px;"></div>

                        </div>
                    </div>
                </div>

<div class="col-sm-5">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            Input Data
                        </div>
                        <div class="panel-body">
                            <?php 

                            // Notifikasi gagal upload foto
                            if(isset($error_upload)){
                                echo '<div class="alert alert-danger alert-dismissable">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>'. $error_upload . '</div>';
                            }
                            
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

                            echo form_open_multipart('irigasi/edit/'.$irigasi->id_irigasi); 
                            ?>

                        <div class="form-group">
                            <input name="nama_irigasi" placeholder="Nama Daerah Irigasi" value="<?= $irigasi->nama_irigasi ?>" class="form-control" />
                        </div>

                        <div class="form-group">
                            <input name="desa" placeholder="Desa" value="<?= $irigasi->desa ?>" class="form-control" />
                        </div>

                        <div class="form-group">
                            <input name="kec" placeholder="Kecamatan" value="<?= $irigasi->kec ?>" class="form-control" />
                        </div>
                        <br>
                        <h4><b>Luas Area (ha)</b></h4>
                        <div class="form-group">
                            <input name="baku" placeholder="Baku" value="<?= $irigasi->baku ?>" class="form-control" />
                        </div>

                        <div class="form-group">
                            <input name="fungsional" placeholder="Fungsional" value="<?= $irigasi->fungsional ?>" class="form-control" />
                        </div>

                        <div class="form-group">
                            <input name="potensial" placeholder="Potensial" value="<?= $irigasi->potensial ?>" class="form-control" />
                        </div>

                        <br>
                        <h4><b>Panjang Saluran (Km)</b></h4>
                        <div class="form-group">
                            <input name="primer" placeholder="Primer" value="<?= $irigasi->primer ?>" class="form-control" />
                        </div>

                        <div class="form-group">
                            <input name="sekunder" placeholder="Sekunder" value="<?= $irigasi->sekunder ?>" class="form-control" />
                        </div>

                        <div class="form-group">
                            <input name="total" placeholder="Total" value="<?= $irigasi->total ?>" class="form-control" />
                        </div>
                            <br>
                        <div class="form-group">
                            <input name="status_irigasi" placeholder="Status Irigasi" value="<?= $irigasi->status_irigasi ?>" class="form-control" />
                        </div>

                        <div class="form-group">
                            <input id="Latitude" name="lat" placeholder="Latitude" value="<?= $irigasi->lat ?>" class="form-control" />
                        </div>
                        
                        <div class="form-group">
                            <input id="Longitude" name="lng" placeholder="Longitude" value="<?= $irigasi->lng ?>" class="form-control" />
                        </div>

                        <img src="<?= base_url('foto/'.$irigasi->foto) ?>" width="120px">

                        <div class="form-group">
                            <label>Ganti Foto</label>
                            <input type="file" name="foto" class="form-control">
                        </div>

                        <div class="form-group">
                            <label></label>
                            <button type="submit" class="btn btn-sm btn-success">Simpan</button>
                            <!-- <button type="reset" class="btn btn-sm btn-danger">Cancel</button> -->
                        </div>

                            <?php echo form_close(); ?>
                        </div>
                    </div>
                </div>

<script>
var curLocation=[0,0];
if (curLocation[0]==0 && curLocation[1]==0) {
	curLocation =[<?= $irigasi->lat ?>, <?= $irigasi->lng ?>];	
}

const map = L.map('map').setView([<?= $irigasi->lat ?>, <?= $irigasi->lng ?>], 12);

L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
    attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
}).addTo(map);

map.attributionControl.setPrefix(false);
const marker = new L.marker(curLocation, {
	draggable:'true'
});

marker.on('dragend', function(event) {
const position = marker.getLatLng();
marker.setLatLng(position,{
	draggable : 'true'
	}).bindPopup(position).update();
	$("#Latitude").val(position.lat);
	$("#Longitude").val(position.lng).keyup();
});

$("#Latitude, #Longitude").change(function(){
	const position =[parseInt($("#Latitude").val()), parseInt($("#Longitude").val())];
	marker.setLatLng(position, {
	draggable : 'true'
	}).bindPopup(position).update();
	map.panTo(position);
});
map.addLayer(marker);

</script>
