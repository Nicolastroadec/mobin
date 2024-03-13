// Coordonnées pour localiser la carte sur la Bretagne
var bretagneCoordinates = [48.2020, -2.9326];

// Créer la carte avec OpenStreetMap comme fournisseur de tuiles
var map = L.map('map').setView(bretagneCoordinates, 8);

// Utiliser les tuiles OpenStreetMap
L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
    attribution: '© OpenStreetMap contributors'
}).addTo(map);

// Coordonnées pour Rennes et Brest
var rennesCoordinates = [48.1173, -1.6778];
var brestCoordinates = [48.3904, -4.4860];

// Ajouter des marqueurs pour Rennes et Brest
L.marker(rennesCoordinates).addTo(map)
    .bindPopup('Rennes');

L.marker(brestCoordinates).addTo(map)
    .bindPopup('Brest');