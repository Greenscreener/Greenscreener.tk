const functions = require('firebase-functions');
const cors = require('cors')({ origin:true });
const fetch = require('node-fetch');

exports.localGuideInfo = functions.https.onRequest((req, response) => {
    return cors(req, response, () => {
        return fetch("https://www.google.com/maps/contrib/116242286923394079188/").then(res => res.text()).then(res => {
            response.send(res);
        });
    });
});

