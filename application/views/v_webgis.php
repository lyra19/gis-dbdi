<div class="row">
    <div class="col-sm-12">
        <div class="panel panel-danger">
            <div class="panel-heading">Peta Lokasi Daerah Irigasi</div>
            <div class="panel-body">

                <div id="map" style="height: 500px;"></div>
                
            </div>
        </div>
    </div>
</div>

<script>
    navigator.geolocation.getCurrentPosition(function(location) {
    var latlng = new L.LatLng(location.coords.latitude, location.coords.longitude);

    //map view
    console.log(location.coords.latitude, location.coords.longitude);

    const map = L.map('map').setView([-7.231228, 110.355651], 11);
    L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
    attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
    }).addTo(map);

    var Icon_irigasi = L.icon({
    iconUrl: '<?= base_url('icon/irigasi.png') ?>',
    iconSize:     [50, 65], // size of the icon
    });

    // Load kml file
    fetch('<?= base_url() ?>public/Kab_Semarang_Baku.kml')
                .then(res => res.text())
                .then(kmltext => {
                    // Create new kml overlay
                    const parser = new DOMParser();
                    const kml = parser.parseFromString(kmltext, 'text/xml');
                    const track = new KML(kml);
                    map.addLayer(track);

                    // Adjust map to show the kml
                    const bounds = track.getBounds();
                    map.fitBounds(bounds);
                });

    <?php foreach ($irigasi as $key => $value) { ?>
        L.marker([<?= $value->lat ?>, <?= $value->lng ?>], {icon:Icon_irigasi}).addTo(map)
            .bindPopup('<b><?= $value->nama_irigasi ?></b><br/>'+
            'Desa : <?= $value->desa ?></br>'+
            'Kecamatan : <?= $value->kec ?></br>'+
            'Status : <?= $value->status_irigasi ?></br>'+
            '<a href="<?= base_url('webgis/detail/'.$value->id_irigasi) ?>" class="btn btn-sm btn-default">Detail</a>'+
            '<a href="https://www.google.com/maps/dir/?api=1&origin=' +
				location.coords.latitude + ',' + location.coords.longitude + '&destination=<?= $value->lat ?>,<?= $value->lng ?>" class="btn btn-sm btn-default" target="_blank">Rute</a>');
    <?php } ?>
    });

</script>
