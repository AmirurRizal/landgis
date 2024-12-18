<div class="row">
    <div class="col-sm-6">
        <div class="form-group">
            <label>Jarak (*meter)</label>
            <input class="form-control" name="jarak" id="Jarak">
        </div>
    </div>
</div>

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
        zoom: 14,
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

    var routingControl = L.Routing.control({
        waypoints: [
            L.latLng(-6.53407582669291, 110.69408325971648),
            L.latLng(-6.615578882868359, 110.69206153214418)
        ]
    }).addTo(map);

    routingControl.on('routesfound', function (e) {
        var routes = e.routes;
        var summary = routes[0].summary;
        var totalDistance = summary.totalDistance;

        document.getElementById('Jarak').value = totalDistance;
        animasiCar(routes[0]);
    });

    function animasiCar(route) {
        const iconMotor = L.icon({
            iconUrl: '<?= base_url('image/motor.png') ?>',
            iconSize: [40, 40],
        });

        var motor = L.marker([route.coordinates[0].lat, route.coordinates[0].lng], {
            icon: iconMotor
        }).addTo(map);

        var index = 0;
        var maxIndex = route.coordinates.length - 1;

        function animate() {
            motor.setLatLng([route.coordinates[index].lat, route.coordinates[index].lng]);
            index++;
            if (index > maxIndex) {
                index = 0;
            }
            setTimeout(animate, 200);
        }
        animate();
    }
</script>