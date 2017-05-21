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
        }
    };
});