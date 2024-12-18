<div id="map" style="width: 100%; height: 70vh;"></div>

<script>
    var Grayscale = L.tileLayer(
        'https://api.mapbox.com/styles/v1/mapbox/light-v10/tiles/{z}/{x}/{y}@2x?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw', {
        attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, ' +
            '<a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, ' +
            'Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
        tileSize: 512,
        zoomOffset: -1
    });

    var Satellite = L.tileLayer(
        'https://api.mapbox.com/styles/v1/mapbox/satellite-v9/tiles/{z}/{x}/{y}@2x?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw', {
        attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, ' +
            '<a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, ' +
            'Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
        tileSize: 512,
        zoomOffset: -1
    });

    var Night = L.tileLayer(
        'https://api.mapbox.com/styles/v1/mapbox/dark-v10/tiles/{z}/{x}/{y}@2x?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw', {
        attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, ' +
            '<a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, ' +
            'Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
        tileSize: 512,
        zoomOffset: -1
    });

    var Stamen = L.tileLayer(
        'https://stamen-tiles.a.ssl.fastly.net/toner/{z}/{x}/{y}.png', {
        attribution: 'Map tiles by <a href="http://stamen.com">Stamen Design</a>, ' +
            '<a href="http://creativecommons.org/licenses/by/3.0">CC BY 3.0</a>, ' +
            'Map data &copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
    });

    var CartoDB = L.tileLayer(
        'https://{s}.basemaps.cartocdn.com/light_all/{z}/{x}/{y}.png', {
        attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors, ' +
            '&copy; <a href="https://carto.com/attributions">CARTO</a>',
        subdomains: 'abcd'
    });

    var Street = L.tileLayer(
        'https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
    });

    const map = L.map('map', {
        center: [-6.534346249188772, 110.69398048599118],
        zoom: 15,
        layers: [CartoDB]
    });

    const baseLayers = {
        'Grayscale': Grayscale,
        'Satellite': Satellite,
        'Street': Street,
        'Night': Night,
        'Stamen': Stamen,
        'CartoDB': CartoDB,
    };

    const layerControl = L.control.layers(baseLayers).addTo(map);

    L.marker([-6.531621368745786, 110.69929030696974])
        .bindPopup('<img src="<?= base_url("image/puskesmas.jpg") ?>" width="250px"><br>' +
            "<b>Puskesmas</b><br>" +
            "Alamat : Jl. Jepara-Bangsri Km.9 <br>" +
            "Kecamatan : Mlonggo <br>")
        .addTo(map);

    L.marker([-6.536990021597296, 110.71040140099353])
        .bindPopup('<img src="<?= base_url("image/masjid.jpg") ?>" width="250px"><br>' +
            "<b>Masjid Al Makmur</b><br>" +
            "Alamat : Jl. KH. Nawawi <br>" +
            "Kecamatan : Mlonggo <br>")
        .addTo(map);

    L.marker([-6.538965550695033, 110.71251129460425])
        .bindPopup('<img src="<?= base_url("image/sekolah.jpg") ?>" width="250px"><br>' +
            "<b>SDN 02 Sinanggul</b><br>" +
            "Alamat : Jl. KH. Nawawi <br>" +
            "Kecamatan : Mlonggo <br>")
        .addTo(map);

    L.marker([-6.550694412710884, 110.71346024450008])
        .bindPopup('<img src="<?= base_url("image/garasi.jpg") ?>" width="250px"><br>' +
            "<b>KJM Putra</b><br>" +
            "Alamat : Jl. Sinanggul-Sidang <br>" +
            "Kecamatan : Mlonggo <br>")
        .addTo(map);

    L.marker([-6.537089053153929, 110.705754297373])
        .bindPopup('<img src="<?= base_url("image/perumahan.jpg") ?>" width="250px"><br>' +
            "<b>Perumahan Perdana Asri</b><br>" +
            "Alamat : Jl. KH. Nawawi <br>" +
            "Kecamatan : Mlonggo <br>")
        .addTo(map);
</script>