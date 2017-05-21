angular.module('funApp', [])

.factory('ProductService', function($http){
    return {
        'loadAll': function() {
            return $http.get('/api/products');
        },
        'save': function(data) {
            return $http.post('/api/products', data);
        }
    }
})
;