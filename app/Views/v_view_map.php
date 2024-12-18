<div id="map" style="width: 100%; height: 70vh;"></div>

<script>
    const map = L.map('map').setView([-6.534346249188772, 110.69398048599118], 14);

    const tiles = L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
        maxZoom: 19,
        attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">landgis</a>'
    }).addTo(map);
</script>