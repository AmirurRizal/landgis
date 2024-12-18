<div class="row">
    <div class="col-sm-8">
        <div id="map" style="width: 100%; height: 70vh;"></div>
    </div>

    <div class="col-sm-4">
        <div class="row">
            <?php
            if (session()->getFlashdata('pesan')) {
                echo '<div class= "alert alert-success">';
                echo session()->getFlashdata('pesan');
                echo '</div>';
            }
            ?>
            <?php $errors = validation_errors() ?>
            <?php echo form_open_multipart('Lokasi/insertData') ?>

            <div class="form-group">
                <label>Nama Lokasi</label>
                <input class="form-control" name="nama_lokasi">
                <p class="text-danger">
                    <?= isset($errors['nama_lokasi']) == isset($errors['nama_lokasi']) ? validation_show_error('nama_lokasi') : '' ?>
                </p>
            </div>

            <div class="form-group">
                <label>Alamat Lokasi</label>
                <input class="form-control" name="alamat_lokasi">
                <p class="text-danger">
                    <?= isset($errors['alamat_lokasi']) == isset($errors['alamat_lokasi']) ? validation_show_error('alamat_lokasi') : '' ?>
                </p>
            </div>

            <div class="form-group">
                <label>Latitude</label>
                <input class="form-control" name="latitude">
                <p class="text-danger">
                    <?= isset($errors['latitude']) == isset($errors['latitude']) ? validation_show_error('latitude') : '' ?>
                </p>
            </div>

            <div class="form-group">
                <label>Longitude</label>
                <input class="form-control" name="longitude">
                <p class="text-danger">
                    <?= isset($errors['longitude']) == isset($errors['longitude']) ? validation_show_error('longitude') : '' ?>
                </p>
            </div>

            <div class="form-group">
                <label>Foto Lokasi</label>
                <input type="file" class="form-control" name="foto_lokasi" accept="image/*">
                <p class="text-danger">
                    <?= isset($errors['foto_lokasi']) == isset($errors['foto_lokasi']) ? validation_show_error('foto_lokasi') : '' ?>
                </p>
            </div>

            <br>
            <button type="submit" class="btn btn-primary">Simpan</button>
            <button type="reset" class="btn btn-success">Reset</button>

            <?php echo form_close() ?>
        </div>
    </div>
</div>


<script>
    // Layer Tile Definitions
    var Grayscale = L.tileLayer(
        'https://api.mapbox.com/styles/v1/mapbox/light-v10/tiles/{z}/{x}/{y}@2x?access_token=YOUR_ACCESS_TOKEN', {
        attribution: 'Map data &copy; OpenStreetMap contributors, Imagery © Mapbox',
        tileSize: 512,
        zoomOffset: -1
    });

    var Satellite = L.tileLayer(
        'https://api.mapbox.com/styles/v1/mapbox/satellite-v9/tiles/{z}/{x}/{y}@2x?access_token=YOUR_ACCESS_TOKEN', {
        attribution: 'Map data &copy; OpenStreetMap contributors, Imagery © Mapbox',
        tileSize: 512,
        zoomOffset: -1
    });

    var Night = L.tileLayer(
        'https://api.mapbox.com/styles/v1/mapbox/dark-v10/tiles/{z}/{x}/{y}@2x?access_token=YOUR_ACCESS_TOKEN', {
        attribution: 'Map data &copy; OpenStreetMap contributors, Imagery © Mapbox',
        tileSize: 512,
        zoomOffset: -1
    });

    var Stamen = L.tileLayer(
        'https://stamen-tiles.a.ssl.fastly.net/toner/{z}/{x}/{y}.png', {
        attribution: 'Map tiles by Stamen Design, Map data &copy; OpenStreetMap contributors'
    });

    var CartoDB = L.tileLayer(
        'https://{s}.basemaps.cartocdn.com/light_all/{z}/{x}/{y}.png', {
        attribution: '&copy; OpenStreetMap contributors, &copy; CARTO',
        subdomains: 'abcd'
    });

    var Street = L.tileLayer(
        'https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        attribution: '&copy; OpenStreetMap contributors'
    });

    // Initialize Map
    const map = L.map('map', {
        center: [-6.534346249188772, 110.69398048599118],
        zoom: 15,
        layers: [Street]
    });

    // Layer Control
    const baseLayers = {
        'Grayscale': Grayscale,
        'Satellite': Satellite,
        'Street': Street,
        'Night': Night,
        'Stamen': Stamen,
        'CartoDB': CartoDB
    };

    const layerControl = L.control.layers(baseLayers).addTo(map);

    var latInput = document.querySelector("[name=latitude]");
    var lngInput = document.querySelector("[name=longitude]");
    var posisi = document.querySelector("[name=posisi]");
    var curLocation = [-6.534346249188772, 110.69398048599118];
    map.attributionControl.setPrefix(false);

    var marker = new L.marker(curLocation, {
        draggable: true,
    });

    marker.on('dragend', function (e) {
        var position = marker.getLatLng();
        marker.setLatLng(position, {
            curLocation,
        }).bindPopup(position).update();
        $("#latitude").val(position.lat);
        $("#longitude").val(position.lng);
    });

    map.on('click', function (e) {
        var lat = e.latlng.lat;
        var lng = e.latlng.lng;
        if (!marker) {
            marker = L.marker(e.latlng).addTo(map);
        } else {
            marker.setLatLng(e.latlng);
        }
        latInput.value = lat;
        lngInput.value = lng;
    })

    map.addLayer(marker);
</script>