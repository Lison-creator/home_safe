// const apiKey = 'pk.eyJ1IjoiY2hhdHNoaW1pbWFub24iLCJhIjoiY2t0b2Z1cDNlMGNkbDJ1b3hpY29kbXNodiJ9.LQAYUcY3REFSrZwX7yoGZQ';
const apiKey = 'pk.eyJ1IjoibXZhbmhvcmVuIiwiYSI6ImNrdDAxeDVzMTA4cGkydW83Mmxsejk1eXEifQ.MfLIncFT-JseHf4Yfukcqg';

const maCarte = L.map('map').setView([50.850346, 4.351721], 13);

/* L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token={accessToken}', {
    maxZoom: 18,
    id: 'mapbox/streets-v11',
    tileSize: 512,
    zoomOffset: -1,
    accessToken: apiKey
}).addTo(maCarte); */

var gl = L.mapboxGL({
    accessToken: apiKey,
    style: 'mapbox://styles/mvanhoren/cktofojxp17q317lwgj1v9woy'
}).addTo(maCarte);

//ajouter des marqueurs

//création d'un marqueur 
//Je rajoute les coordonnées de ce que je veux et je les ajoute à ma carte
/* const marqueur = L.marker([50.830597721903615, 4.345150637346656]).addTo(maCarte);

//ajouter un pop up message au marqueur

let exemple =
`
<h3>Parvis de Saint-Gilles</h3>
<div style="text-align-center">
<img width="150" height"150" src="parvis.jpg">
</div>

`

marqueur.bindPopup(exemple) //si j'ai envie que ça soit toujorus afficher je peux rajouter .openPopup()

//ajouter par exemple un cercle
const cercle = L.circle([50.830597721903615, 4.345150637346656],{
    radius:500,
    color: 'green',
    fillColor:'blue',
    fillOpacity:0.2
}).addTo(maCarte).bindPopup('je suis un beau cercle');

//cercle.bindPop('mon message ici);

// ajouter un polygone

const polygone = L.polygon([
    //un tableau qui contiendra un autre tableau qui contiendront des coordonnées
    [], // les coordonnées ici 
    [], // les coordonnées ici 
    [], // les coordonnées ici 
    [], // les coordonnées ici 
],{
    //ici je peux rajouter les couleurs / opacité
}).addTo(maCarte);

// utilisation d'un marqueur personnalisé */

// Marqueur 'Maison'
const marqueurMaison = L.icon({
    iconUrl: 'marqueur_maison.png',
    /* shadowUrl: 'marqueur.png', */

    iconSize: [60, 75], // size of the icon
    /*  shadowSize:   [50, 64], */ // size of the shadow
    iconAnchor: [0, 0], // point of the icon which will correspond to marker's location
    /* shadowAnchor: [4, 62], */  // the same for the shadow
    popupAnchor: [-3, -76] // point from which the popup should open relative to the iconAnchor
});

L.marker([50.830597721903615, 4.345150637346656], { icon: marqueurMaison }).addTo(maCarte);

// Marqueur 'Police'
const marqueurPolice = L.icon({
    iconUrl: 'marqueur_police.png',
    /* shadowUrl: 'marqueur.png', */

    iconSize: [60, 75], // size of the icon
    /*  shadowSize:   [50, 64], */ // size of the shadow
    iconAnchor: [0, 0], // point of the icon which will correspond to marker's location
    /* shadowAnchor: [4, 62], */  // the same for the shadow
    popupAnchor: [-3, -76] // point from which the popup should open relative to the iconAnchor
});

L.marker([50.8367837, 4.3445671], { icon: marqueurPolice }).addTo(maCarte);

// Marqueur 'Police'
const marqueurBar = L.icon({
    iconUrl: 'marqueur_bar.png',
    /* shadowUrl: 'marqueur.png', */

    iconSize: [60, 75], // size of the icon
    /*  shadowSize:   [50, 64], */ // size of the shadow
    iconAnchor: [0, 0], // point of the icon which will correspond to marker's location
    /* shadowAnchor: [4, 62], */  // the same for the shadow
    popupAnchor: [-3, -76] // point from which the popup should open relative to the iconAnchor
});

L.marker([50.8270366, 4.3726005], { icon: marqueurBar }).addTo(maCarte);

// Geolocalisation
map.locate({ setView: true, maxZoom: 16 });

function onLocationFound(e) {
    var radius = e.accuracy;

    L.marker(e.latlng).addTo(map)
        .bindPopup("You are within " + radius + " meters from this point").openPopup();

    L.circle(e.latlng, radius).addTo(map);
}

map.on('locationfound', onLocationFound);

function onLocationError(e) {
    alert(e.message);
}

map.on('locationerror', onLocationError);