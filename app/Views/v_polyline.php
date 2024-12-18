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
        center: [-6.540793340529337, 110.70807704512421],
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

    L.polyline([
        [-6.530576284813763, 110.69966973407031],
        [-6.530982394618815, 110.69961699054959],
        [-6.531665565454463, 110.69925410309229],
        [-6.535485568512086, 110.6977603399459],
        [-6.540900580553958, 110.69601959462129],
    ], {
        color: '#FFBB01',
        width: 1,
    }).bindPopup('Jalan Raya Jepara-Bangsri')
        .addTo(map);

    L.polyline([
        [-6.532366227356321, 110.69895802171588],
        [-6.5344546719161745, 110.70294529820453],
        [-6.534638003563602, 110.70341320531567],
        [-6.535959381117103, 110.7060002972799],
        [-6.536256113921876, 110.70648619988341],
        [-6.537705787272341, 110.71029542767835],
        [-6.538454041282526, 110.71177232971115],
        [-6.539039322268499, 110.71260477212876],
        [-6.540432542762245, 110.71371256100034],
        [-6.5417967913248445, 110.71489968191962],
        [-6.54248864674735, 110.71582221928388],
        [-6.5425920683625325, 110.7159191395839],
        [-6.544168353614978, 110.71670886027498],
        [-6.54438812314119, 110.71686626035516],
        [-6.545330595123606, 110.71815949331662],
        [-6.545330595123606, 110.71815949331662],
        [-6.5466618865814645, 110.71935913700825],
        [-6.5466830181632965, 110.72052049425787],
        [-6.546801355009822, 110.72102247289757],
        [-6.547139825863551, 110.72175733971926],
    ], {
        color: '#FE002A',
        width: 0.5,
    }).bindPopup('Jalan KH. Nawawi')
        .addTo(map);

    L.polyline([
        [-6.539939138898144, 110.69636777811732],
        [-6.542902558624698, 110.70158446058267],
        [-6.543490018597412, 110.70134793593688],
        [-6.544808537353865, 110.70377888368522],
        [-6.544847701257544, 110.70402854880489],
        [-6.545526541216918, 110.70548711762332],
        [-6.547602219156829, 110.7080363278343],
        [-6.548516036881811, 110.70879846280403],
        [-6.548620473086708, 110.70953431725759],
        [-6.5496278245801625, 110.71105305307437],
        [-6.550896103757473, 110.71328133904613],
        [-6.551318734497103, 110.71380398380525],
        [-6.55186815390715, 110.71477634590433],
    ], {
        color: '#FE002A',
        width: 0.5,
    }).bindPopup('Jalan Sinanggul-Sekacer')
        .addTo(map);
</script>