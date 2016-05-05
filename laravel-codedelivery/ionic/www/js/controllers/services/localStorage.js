angular.module('starter.services')
    .factory('$localStorage', ['$window', function ($window) {
        return {
            set: function (key, value) {
                $window.localStorage[key] = value;
                return $window.localStorage[key];
            },
            get: function (key, defaultValue) {
                return $window.localStorage[key] || defaultValue;
            }
        }
    }]);