// Coordonnées pour localiser la carte sur la Bretagne
var bretagneCoordinates = [48.2020, -2.9326];

// Créer la carte avec OpenStreetMap comme fournisseur de tuiles
var map = L.map('map').setView(bretagneCoordinates, 8);

// Utiliser les tuiles OpenStreetMap
L.tileLayer('https://stamen-tiles-{s}.a.ssl.fastly.net/watercolor/{z}/{x}/{y}.png', {
    attribution: '© Stamen Design'
}).addTo(map);


// Coordonnées pour Rennes et Brest
var rennesCoordinates = [48.1173, -1.6778];
var brestCoordinates = [48.3904, -4.4860];

// Ajouter des marqueurs pour Rennes et Brest
L.marker(rennesCoordinates).addTo(map)
    .bindPopup('<b>Rennes</b><br>Population : 215 000<br>Adhérents : 350');

L.marker(brestCoordinates).addTo(map)
    .bindPopup('<b>Brest</b><br>Population : 139 000<br>Adhérents : 220');