angular.module('starter.services')
    .service('$cart', ['$localStorage', function ($localStorage) {
        var key = 'kart';
        this.clear = function () {
            $localStorage.setObject(key, {
                items: [],
                total: 0
            })
        };

        this.get = function () {
            return $localStorage.getObject(key);
        };

        this.getItem = function (i) {
            return this.get().items[i];
        };

        this.addItem = function (item) {

        };

        this.removeItem = function (i) {

        };

    }]);