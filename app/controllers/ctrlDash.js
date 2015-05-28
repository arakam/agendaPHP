app.controller('ctrlDash', ['$scope','$http', function($scope,$http){


	//Busca a quantidade de cliente que o usuario tem no dia para entrar em contato
	$scope.cliDia = cliDia();
	cliDia();
	function cliDia(){
		$http.get('').success(function(){
			$scope.totalDia = data;
		});
	}

}]);