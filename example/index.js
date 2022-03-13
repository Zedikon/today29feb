const fetch = require('node-fetch')

fetch('http://today29feb.ml/api/')
    .then(res => res.json())
    .then(json => {
        console.log(json.today_29_feb + ' ' + json.when_29_feb)
    });