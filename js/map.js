// Coordonnées pour localiser la carte sur la Bretagne
var bretagneCoordinates = [48.2020, -2.9326];

// Créer la carte avec OpenStreetMap comme fournisseur de tuiles
var map = L.map('map').setView(bretagneCoordinates, 8);

var map2 = L.map('map2').setView(bretagneCoordinates, 8);

var map3 = L.map('map3').setView(bretagneCoordinates, 8);

var map4 = L.map('map4').setView(bretagneCoordinates, 8);

var map5 = L.map('map5').setView(bretagneCoordinates, 8);
var map6 = L.map('map6').setView(bretagneCoordinates, 8);

var map7 = L.map('map7').setView(bretagneCoordinates, 8);

var map8 = L.map('map8').setView(bretagneCoordinates, 8);

var map9 = L.map('map9').setView(bretagneCoordinates, 8);

var map10 = L.map('map10').setView(bretagneCoordinates, 8);




// Utiliser les tuiles OpenStreetMap
L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
    attribution: '© OpenStreetMap contributors'
}).addTo(map);


L.tileLayer('https://{s}.basemaps.cartocdn.com/rastertiles/voyager/{z}/{x}/{y}.png', {
    attribution: '© CARTO'
}).addTo(map2);


// arcgisonline.com

L.tileLayer('https://server.arcgisonline.com/ArcGIS/rest/services/World_Terrain_Base/MapServer/tile/{z}/{y}/{x}', {
    attribution: '© Esri'
}).addTo(map3);

// 150k requêtes par mois -> gratuit. Sinon 95 dollars

L.tileLayer('https://{s}.tile.thunderforest.com/outdoors/{z}/{x}/{y}.png?apikey=f9ca54ba5a4b46608b76a81c5e910be3', {
    attribution: '&copy; Thunderforest'
}).addTo(map4);


L.tileLayer('https://{s}.tile.thunderforest.com/cycle/{z}/{x}/{y}.png?apikey=f9ca54ba5a4b46608b76a81c5e910be3', {
    attribution: '&copy; Thunderforest'
}).addTo(map5);

L.tileLayer('https://{s}.tile.thunderforest.com/transport-dark/{z}/{x}/{y}.png?apikey=f9ca54ba5a4b46608b76a81c5e910be3', {
    attribution: '&copy; Thunderforest'
}).addTo(map6);



L.tileLayer('https://{s}.tile.thunderforest.com/pioneer/{z}/{x}/{y}.png?apikey=f9ca54ba5a4b46608b76a81c5e910be3', {
    attribution: '&copy; Thunderforest'
}).addTo(map7);



L.tileLayer('https://{s}.tile.thunderforest.com/mobile-atlas/{z}/{x}/{y}.png?apikey=f9ca54ba5a4b46608b76a81c5e910be3', {
    attribution: '&copy; Thunderforest'
}).addTo(map8);


L.tileLayer('https://{s}.tile.thunderforest.com/neighbourhood/{z}/{x}/{y}.png?apikey=f9ca54ba5a4b46608b76a81c5e910be3', {
    attribution: '&copy; Thunderforest'
}).addTo(map9);


L.tileLayer('https://{s}.tile.thunderforest.com/atlas/{z}/{x}/{y}.png?apikey=f9ca54ba5a4b46608b76a81c5e910be3', {
    attribution: '&copy; Thunderforest'
}).addTo(map10);





// Coordonnées pour Rennes et Brest
var rennesCoordinates = [48.1173, -1.6778];
var brestCoordinates = [48.3904, -4.4860];

// Définir l'icône personnalisée
var customIcon = L.icon({
    iconUrl: 'https://mobin.nicolastroadec.fr/wp-content/themes/mobin/assets/img/bicyclette.png',
    iconSize: [38, 38], // Taille de l'icône en pixels
    iconAnchor: [19, 38], // Point d'ancrage de l'icône, correspondant au centre de l'image
    popupAnchor: [0, -38] // Point d'ancrage du popup par rapport à l'icône
});

// Créer le marqueur en utilisant l'icône personnalisée


// add these coordinates to each map above 

L.marker(rennesCoordinates, { icon: customIcon }).addTo(map)
    .bindPopup('<b>Rennes</b><br>Population : 215 000<br>Adhérents : 350');

L.marker(brestCoordinates).addTo(map)
    .bindPopup('<b>Brest</b><br>Population : 139 000<br>Adhérents : 220');

L.marker(rennesCoordinates).addTo(map2)
    .bindPopup('<b>Rennes</b><br>Population : 215 000<br>Adhérents : 350');

L.marker(brestCoordinates).addTo(map2)
    .bindPopup('<b>Brest</b><br>Population : 139 000<br>Adhérents : 220');

L.marker(rennesCoordinates).addTo(map3)
    .bindPopup('<b>Rennes</b><br>Population : 215 000<br>Adhérents : 350');

L.marker(brestCoordinates).addTo(map3)
    .bindPopup('<b>Brest</b><br>Population : 139 000<br>Adhérents : 220');

L.marker(rennesCoordinates).addTo(map4)
    .bindPopup('<b>Rennes</b><br>Population : 215 000<br>Adhérents : 350');

L.marker(brestCoordinates).addTo(map4)
    .bindPopup('<b>Brest</b><br>Population : 139 000<br>Adhérents : 220');

L.marker(rennesCoordinates).addTo(map5)
    .bindPopup('<b>Rennes</b><br>Population : 215 000<br>Adhérents : 350');

L.marker(brestCoordinates).addTo(map5)
    .bindPopup('<b>Brest</b><br>Population : 139 000<br>Adhérents : 220');

L.marker(rennesCoordinates).addTo(map6)
    .bindPopup('<b>Rennes</b><br>Population : 215 000<br>Adhérents : 350');

L.marker(brestCoordinates).addTo(map6)
    .bindPopup('<b>Brest</b><br>Population : 139 000<br>Adhérents : 220');

L.marker(rennesCoordinates).addTo(map7)
    .bindPopup('<b>Rennes</b><br>Population : 215 000<br>Adhérents : 350');

L.marker(brestCoordinates).addTo(map7)
    .bindPopup('<b>Brest</b><br>Population : 139 000<br>Adhérents : 220');

L.marker(rennesCoordinates).addTo(map8)
    .bindPopup('<b>Rennes</b><br>Population : 215 000<br>Adhérents : 350');

L.marker(brestCoordinates).addTo(map8)
    .bindPopup('<b>Brest</b><br>Population : 139 000<br>Adhérents : 220');

L.marker(rennesCoordinates).addTo(map9)
    .bindPopup('<b>Rennes</b><br>Population : 215 000<br>Adhérents : 350');

L.marker(brestCoordinates).addTo(map9)
    .bindPopup('<b>Brest</b><br>Population : 139 000<br>Adhérents : 220');

L.marker(rennesCoordinates).addTo(map10)
    .bindPopup('<b>Rennes</b><br>Population : 215 000<br>Adhérents : 350');

L.marker(brestCoordinates).addTo(map10)
    .bindPopup('<b>Brest</b><br>Population : 139 000<br>Adhérents : 220');
