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
            var cart = this.get(), itemAux, exists = false;
            for (var index in cart.items) {
                itemAux = cart.items[index];
                if (itemAux.id == item.id) {
                    itemAux.qtd = item.qtd + itemAux.qtd;
                    itemAux.subTotal = calculateSubTotal(itemAux);
                    exists = true;
                    break;
                }
                ;
            }

            if (!exists) {
                item.subtotal = calculateSubTotal(item);
                cart.items.push(item);
            }

            $localStorage.setObject(key, cart);
        };

        this.removeItem = function (i) {

        };

        function calculateSubTotal(item) {
            return item.price * item.qtd;
        }

    }]);