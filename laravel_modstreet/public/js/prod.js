var app = angular.module('empApp', [], function($interpolateProvider) {
        $interpolateProvider.startSymbol('<%');
        $interpolateProvider.endSymbol('%>');
    });
app.controller('empCtrl', function($scope, $http) {

var getProd = function(){    
    $http.get("http://localhost:3000/product")
    .then(function(response) {
        $scope.prodData = response.response;
    }, function(response) {
        $scope.prodData = "Error occured!";
    });
};
    
    getProd();
    
    $scope.saveData = function(){
        //alert(JSON.stringify($scope.prodForm));
		//return false;
        $http({
        method : "POST",
        url : "http://localhost:3000/product",
        data : $scope.prodForm
        }).then(function (response) {
            if(response.data) {
                getProd();
                alert('Item successfully added!');
            }
        });
    };
    
    $scope.saveEditData = function(){
        $http({
        method : "PUT",
        url : "http://localhost:3000/product",
        data : $scope.editProdForm
        }).then(function (response) {
            if(response.data) {
                $scope.editProdForm = {};
                getProd();
                alert('Item successfully updated!');
            }
        });
    };
    
    $scope.deleteData = function(prodid){
        $http({
        method : "DELETE",
        url : "http://localhost:3000/product",
        data : prodid
        }).then(function (response) {
            if(response.data) {
                getProd();
                alert('Item successfully deleted!');
            }
        });
    };
    
    $scope.editProdForm = {};	
	
});