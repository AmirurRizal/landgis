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

    L.polygon([
        [-6.556787966941386, 110.71139325371304],
        [-6.552012864187638, 110.71465482027162],
        [-6.550648540734847, 110.7165430952926],
        [-6.549917362992994, 110.7167459447345],
        [-6.54957628104707, 110.71902045782795],
        [-6.549192563579275, 110.72052249477645],
        [-6.544587930958325, 110.72322616128376],
        [-6.541603424059835, 110.72335490709683],
        [-6.5413049724008205, 110.72017917183427],
        [-6.53763826604406, 110.7216812087828],
        [-6.538192537217442, 110.71841964223562],
        [-6.5340994424294685, 110.71623095982493],
        [-6.535154680788148, 110.71569452645222],
        [-6.53243652636623, 110.71279766535683],
        [-6.531029475923723, 110.7146967187416],
        [-6.532020807329086, 110.710319239753],
        [-6.52968637862924, 110.710319239753],
        [-6.531477174220927, 110.70632800891046],
        [-6.529654400078304, 110.70626363421945],
        [-6.529462528729785, 110.7036886465791],
        [-6.530869583577653, 110.70256208948645],
        [-6.532052785654139, 110.70259427613024],
        [-6.532564439771949, 110.70024459990842],
        [-6.530549798657594, 110.7000514758354],
        [-6.530933540551247, 110.69683274132139],
        [-6.53096551902047, 110.69139307993115],
        [-6.5332040067871615, 110.69007339876546],
        [-6.534611051114391, 110.69123214320362],
        [-6.535634353593664, 110.69065277098454],
        [-6.537521062119344, 110.69206901436434],
        [-6.538032710643245, 110.69293807269294],
        [-6.53844842468333, 110.6938715057126],
        [-6.540752367703059, 110.69581179941372],
        [-6.5464723190164475, 110.70074676407377],
        [-6.54857799897492, 110.70166416148346],
        [-6.551343654509814, 110.70435308440825],
        [-6.553355030724192, 110.70720017926979],
        [-6.556787966941386, 110.71139325371304],
    ], {
        color: 'yellow',
    }).addTo(map);
</script>