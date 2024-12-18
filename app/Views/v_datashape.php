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
    center: [-6.532005863683863, 110.71960931438625],
    zoom: 13,
    layers: [Street]
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


$.getJSON("<?= base_url('provinsi/sinanggul.geojson') ?>", function(data) {
    L.geoJson(data, {
            style: function(feature) {
                return {
                    color: 'red',
                    fillOpacity: 0.5,
                }
            }
        }).bindPopup('Desa Sinanggul')
        .addTo(map);
});

$.getJSON("<?= base_url('provinsi/suwawal.geojson') ?>", function(data) {
    L.geoJson(data, {
            style: function(feature) {
                return {
                    color: 'green',
                    fillOpacity: 0.5,
                }
            }
        }).bindPopup('Desa Suwawal')
        .addTo(map);
});

$.getJSON("<?= base_url('provinsi/jambu.geojson') ?>", function(data) {
    L.geoJson(data, {
            style: function(feature) {
                return {
                    color: 'yellow',
                    fillOpacity: 0.5,
                }
            }
        }).bindPopup('Desa Jambu')
        .addTo(map);
});

$.getJSON("<?= base_url('provinsi/jambu_timur.geojson') ?>", function(data) {
    L.geoJson(data, {
            style: function(feature) {
                return {
                    color: 'purple',
                    fillOpacity: 0.5,
                }
            }
        }).bindPopup('Desa Jambu Timur')
        .addTo(map);
});

$.getJSON("<?= base_url('provinsi/sekuro.geojson') ?>", function(data) {
    L.geoJson(data, {
            style: function(feature) {
                return {
                    color: 'grey',
                    fillOpacity: 0.5,
                }
            }
        }).bindPopup('Desa Sekuro')
        .addTo(map);
});

$.getJSON("<?= base_url('provinsi/slagi.geojson') ?>", function(data) {
    L.geoJson(data, {
            style: function(feature) {
                return {
                    color: 'blue',
                    fillOpacity: 0.5,
                }
            }
        }).bindPopup('Desa Slagi')
        .addTo(map);
});
</script>