 fetch('https://france-geojson.gregoiredavid.fr/repo/regions.geojson')
    .then((response) => response.json())
    .then(async (json) => {
    var map = L.map('map').setView([45.0415, 3.884], 16);
    L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png').addTo(map);
    
    // icone textile
    var textile = L.icon({
        iconUrl: 'icones/textile.png',
        iconSize: [40, 40],
        iconAnchor: [0, 0],
        popupAnchor: [20, 10],
    });

    
    L.marker([45.03991830811298, 3.8840032454817934], {icon: textile}).addTo(map)
    .bindPopup('Jardin Henry Vinay')
    .openPopup();
    })
