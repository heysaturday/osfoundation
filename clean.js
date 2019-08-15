'use strict';
var algoliasearch = require('algoliasearch');
var Webflow = require('webflow-api');
var request = require('request');
var _ = require('lodash');
var fs = require('fs');
var stealthyRequire = require('stealthy-require');
var request = stealthyRequire(require.cache, function () {
    return require('request');
});


var configure = require('request-promise-core/configure/request2');

configure({
    request: request,
    // Pass your favorite ES6-compatible promise implementation
    PromiseImpl: Promise,
    // Expose all methods of the promise instance you want to call on the request(...) call
    expose: [
        'then', // Allows to use request(...).then(...)
        'catch', // Allows to use request(...).catch(...)
        'promise' // Allows to use request(...).promise() which returns the promise instance
    ],
    // Optional: Pass a callback that is called within the Promise constructor
    constructorMixin: function (resolve, reject) {
        // `this` is the request object
        // Additional arguments may be passed depending on the PromiseImpl used
    }
});

// Clear Index Function... just call this if you want to clear the algolia index
function clearIndex() {
    index.clearIndex(function (err, content) {
        if (err) throw err;
        console.log(content)
    
});


var client = algoliasearch('482E1GZVVF', '65d92fbaef4162b6662708554d16d330');
var index = client.initIndex('onslow_index');
var tmpIndex = client.initIndex('onslow_index_temp');
var siteId = '5afeeb3390908a1094e2672c';

var collectionId = '5c339230b203973715f331ff';

var siteTrue = false; // true = collectionIds; false = collection Items;

if (siteTrue == true) {
    var uri = `https://api.webflow.com/sites/${siteId}/collections`
} else {
    var uri = `https://api.webflow.com/collections/${collectionId}/items`
}

var options = {
    method: 'GET',
    json: true,
    simple: false,
    uri: uri,
    siteId: siteId,
    headers: {
        'Postman-Token': '6e652689-43a7-41a4-9ab6-fab6bbb1acfb',
        'cache-control': 'no-cache',
        Authorization: 'Bearer 918d6786a1a370b5331e0f61194fe8a05fbe09a37dd6be7ecb75f745bfa36b7d',
        'Accept-Version': '1.0.0',
        token: '918d6786a1a370b5331e0f61194fe8a05fbe09a37dd6be7ecb75f745bfa36b7d',
    },
}


var webflow = new Webflow(options.headers);

request(`https://api.webflow.com/sites/${siteId}/collections`, options, function (err, res, body) {
            var collectionIds = body;
            var cids = _.clone(collectionIds);
            var collIdArr = cids.map(function (d, i) {
                return {
                    id: d._id,
                    name: d.name,
                }
            });

            for (let i of collIdArr) {
                request(`https://api.webflow.com/collections/${i.id}/items`, options, function (error, response, body) {
                            if (error) throw error;
                            var dataObject = body.items;
                            var dc = _.clone(dataObject);
                            const smallData = dc.map(function (d, i) {
                                // if statements for formatting needed fields
                                // gender
                                if (d.gender) {
                                    if (d.gender == '0ef7da8f3bdd6a8fc52e00dad8509045') {
                                        var gender = 'female';
                                    } else {
                                        gender = 'male';
                                    }
                                }
                                // locations
                                if (d.location) {
                                    var locationObject = JSON.parse(fs.readFileSync('./json/locations.json'));
                                    locationObject.forEach(function (i) {
                                        if (d.location === i.objectId) {
                                            d.location = i.name
                                        }
                                    })
                                }

                                return {
                                    name: d.name,
                                    objectId: d._id,
                                    slug: d.slug,
                                    gender: gender,
                                    'board-certified': d['board-certified'],
                                    'phone-number': d['phone-number'],
                                    education: d.education,
                                    internship: d.internship,
                                    residency: d.residency,
                                    location: d.location,
                                    specialty: d.specialty,


                                }
                            })}




                            // index.addObjects(smallData, function(err, content){
                            //   if (err) throw err;
                            //   console.log(content)
                            // })






                            // request(options('5c339230b203977f9df33200'), function(error, response, body){
                            //   var dataObject = body.items;
                            //   const dataCopy = _.clone(dataObject);
                            //   console.log(dataCopy.length)
                            //   var filtered = _.filter(dataCopy, function(o){return o.content});
                            //   console.log(filtered.length)
                            //
                            //     const smallData = filtered.map(function(d, i) {
                            //     return {
                            //       name: d.name,
                            //       index: i + 1,
                            //       objectID: d._id,
                            //       slug: d.slug,
                            //       content: d.content.replace(/<(?:.|\n)*?>/gm, ''),
                            //     }
                            //
                            //
                            //
                            // });



                            //clearIndex();

                            // });
