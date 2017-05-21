angular.module('funApp').directive('productForm', function(){
    return {
        restrict: 'E',
        scope: {},
        templateUrl: '/js/components/product-form.directive.html',
        controller: function($scope, ProductService){
            $scope.product = {};

            $scope.save = function() {
                ProductService.save($scope.product).then(function(){
                    $scope.$emit('product:saved');
                    $scope.product = {};
                });
            }
        }
    };
});