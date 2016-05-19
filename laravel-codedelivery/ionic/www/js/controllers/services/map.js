angular.module('starter.services')
    .factory('$map', function () {
        return {
            center: {
                latitude: -23.444,
                longitude: -46.444
            },
            zoom: 12
        };
    });