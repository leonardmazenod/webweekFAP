 fetch('https://france-geojson.gregoiredavid.fr/repo/regions.geojson')
    .then((response) => response.json())
    .then(async (json) => {
    var map = L.map('map').setView([45.0435, 3.882], 16);
    L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png').addTo(map);
 
    })
    