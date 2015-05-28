var app = angular.module('app', ['ngRoute']);

app.config(['$routeProvider',function($routeProvider){

	//Removendo o # da url
	//$locationProvider.html5mode(true);

	$routeProvider

		// Carrega a pagina base
		.when('/',{
			templateUrl: 'app/views/dashboard.html',
			controller: 'ctrlDash'
		})
		// Carrega a pagina clientes
		.when('/clientes',{
			templateUrl: 'app/views/clientes.html',
			controller: 'ctrlClientes'
		})
		// Carrega a pagina agenda
		.when('/agenda',{
			templateUrl: 'app/views/agenda.html',
			controller: 'ctrlAgenda'
		})		
		// se não achar nenhum deste vai para o principal
		.otherwise({ redirectTo: '/'});
}]);