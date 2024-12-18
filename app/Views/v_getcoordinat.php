<div class="row">
    <div class="col-sm-6">
        <div class="form-group">
            <label>Latitude</label>
            <input class="form-control" name="latitude" id="latitude">
        </div>
    </div>

    <div class="col-sm-6">
        <div class="form-group">
            <label>Longitude</label>
            <input class="form-control" name="longitude" id="longitude">
        </div>
    </div>

    <div class="col-sm-12">
        <br>
        <div id="map" style="width: 100%; height: 70vh;"></div>
    </div>
</div>
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