<div class="row">
    <div class="col-sm-6">
        <div class="panel panel-warning">
            <div class="panel-heading"><b>Lokasi Daerah Irigasi</b></div>
            <div class="panel-body">

            <div id="map" style="height: 500px;"></div>
                
            </div>
        </div>
    </div>

    <div class="col-sm-6">
        <div class="panel panel-warning">
            <div class="panel-heading"><b>Foto</b></div>
            <div class="panel-body">

                <img src="<?= base_url('foto/'.$irigasi->foto) ?>" width="100%" height="500px">
                
            </div>
        </div>
    </div>

    <div class="col-sm-12">
        <div class="panel panel-warning">
            <div class="panel-heading"><b>Detail Data Irigasi</b></div>
            <div class="panel-body">

                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th width="200px">Nama</th>
                            <th width="50px">:</th>
                            <td><?= $irigasi->nama_irigasi ?></td>
                        </tr>
                        <tr>
                            <th>Desa</th>
                            <th>:</th>
                            <td><?= $irigasi->desa ?></td>
                        </tr>
                        <tr>
                            <th>Kecamatan</th>
                            <th>:</th>
                            <td><?= $irigasi->kec ?></td>
                        </tr>
                        <tr>
                            <th>Luas Areal (Ha)</th>
                        </tr>
                        <tr>
                            <th>Baku</th>
                            <th>:</th>
                            <td><?= $irigasi->baku ?></td>
                        </tr>
                        <tr>
                            <th>Fungsional</th>
                            <th>:</th>
                            <td><?= $irigasi->fungsional ?></td>
                        </tr>
                        <tr>
                            <th>Potensial</th>
                            <th>:</th>
                            <td><?= $irigasi->potensial ?></td>
                        </tr>
                        <tr>
                            <th>Panjang Saluran (Km)</th>
                        </tr>
                        <tr>
                            <th>Primer</th>
                            <th>:</th>
                            <td><?= $irigasi->primer ?></td>
                        </tr>
                        <tr>
                            <th>Sekunder</th>
                            <th>:</th>
                            <td><?= $irigasi->sekunder ?></td>
                        </tr>
                        <tr>
                            <th>Total</th>
                            <th>:</th>
                            <td><?= $irigasi->total ?></td>
                        </tr>
                        <tr>
                            <th>Status DI</th>
                            <th>:</th>
                            <td><?= $irigasi->status_irigasi ?></td>
                        </tr>
                        <tr>
                            <th>Latitude</th>
                            <th>:</th>
                            <td><?= $irigasi->lat ?></td>
                        </tr>
                        <tr>
                            <th>Longitude</th>
                            <th>:</th>
                            <td><?= $irigasi->lng ?></td>
                        </tr>
                    </thead>
                </table>
                
            </div>
        </div>
    </div>
</div>

<script>
    const map = L.map('map').setView([<?= $irigasi->lat ?>, <?= $irigasi->lng ?>], 17);

    L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
        attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
    }).addTo(map);

    var Icon_irigasi = L.icon({
    iconUrl: '<?= base_url('icon/irigasi.png') ?>',
    iconSize:     [50, 65], // size of the icon
    });

    L.marker([<?= $irigasi->lat ?>, <?= $irigasi->lng ?>], {icon:Icon_irigasi}).addTo(map)
        .bindPopup('<b><?= $irigasi->nama_irigasi ?></b><br/>'+
        'Desa : <?= $irigasi->desa ?></br>'+
        'Kecamatan : <?= $irigasi->kec ?></br>'+
        'Status : <?= $irigasi->status_irigasi ?></br>').openPopup();
</script>
