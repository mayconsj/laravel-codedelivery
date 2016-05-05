angular.module('starter.controllers')
    .controller('ClientViewProductCtrl', [
        '$scope', '$state', function ($scope, $state, appConfig) {

            $http:get('http://localhost/api/client/products')
                    
        }]);