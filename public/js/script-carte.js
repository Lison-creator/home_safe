const apiKey = 'pk.eyJ1IjoibXZhbmhvcmVuIiwiYSI6ImNrdDAxeDVzMTA4cGkydW83Mmxsejk1eXEifQ.MfLIncFT-JseHf4Yfukcqg';

const maCarte = L.map('map').setView([50.850346, 4.351721], 13);

var gl = L.mapboxGL({
    accessToken: apiKey,
    style: 'mapbox://styles/mvanhoren/cktofojxp17q317lwgj1v9woy'
}).addTo(maCarte);