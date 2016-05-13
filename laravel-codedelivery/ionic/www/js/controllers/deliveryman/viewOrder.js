angular.module('starter.controllers')
    .controller('DeliverymanViewOrderCtrl', [
        '$scope', '$stateParams', 'DeliverymanOrder', '$ionicLoading',
        function ($scope, $stateParams, DeliverymanOrder, $ionicLoading) {

            $scope.order = {};
            $ionicLoading.show({
                template: 'Carregando...'
            });

            DeliverymanOrder.get({id: $stateParams.id, include: "items, cupom"}, function (data) {
                $scope.order = data.data;
                $ionicLoading.hide();
            }, function (dataError) {
                $ionicLoading.hide();
            });

            DeliverymanOrder.updateStatus({id: $stateParams.id},{status: 2}, function (data) {
                console.log(data);
            });
            DeliverymanOrder.geo({id: $stateParams.id}, {lat: -23.4444, long: -45.4444}, function (data) {
                console.log(data);
            });

        }]);