<div id="map" style="height: 500px;"></div>

<script>
const map = L.map('map').setView([-7.231228, 110.355651], 10);

L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
    attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
}).addTo(map);

var Icon_irigasi = L.icon({
    iconUrl: '<?= base_url('icon/irigasi.png') ?>',
    iconSize:     [50, 65], // size of the icon
});

<?php foreach ($irigasi as $key => $value) { ?>
    L.marker([<?= $value->lat ?>, <?= $value->lng ?>], {icon:Icon_irigasi}).addTo(map)
        .bindPopup('<b>Nama DI : <?= $value->nama_irigasi ?></b><br/>'+
        'Desa : <?= $value->desa ?></br>'+
        'Kecamatan : <?= $value->kec ?></br>'+
        'Status DI : <?= $value->status_irigasi ?></br>');
<?php } ?>

</script>