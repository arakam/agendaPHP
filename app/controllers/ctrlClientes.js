app.controller("ctrlClientes", ['$scope','$http', function($scope, $http){
	$scope.teste = "Aramis";

	$scope.listaClientes= listaClientes();    
    function listaClientes(){
		$http.get('php/clientes').success(function (data) {
	    	$scope.clientes = data;


	    	
	    });
	}



}]);