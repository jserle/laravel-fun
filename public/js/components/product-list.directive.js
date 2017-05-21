angular.module('funApp').directive('productList', function(){
    return {
        restrict: 'E',
        scope: {},
        templateUrl: '/js/components/product-list.directive.html',
        controller: function($scope, ProductService, $rootScope){
            function init() {
                ProductService.loadAll().then(function(response){
                    $scope.products = response.data;
                    console.log($scope.products);
                });
            }

            $rootScope.$on('product:saved', init);

            init();

            $scope.calcTotalValue = function(){
                if (!$scope.products) return;
                var total = 0;
                $scope.products.forEach(function(product){
                    if (product.value && parseFloat(product.value) == product.value) {
                        total += parseFloat(product.value);
                    }
                });
                return Number(total).toFixed(2);
            };
        }
    };
});