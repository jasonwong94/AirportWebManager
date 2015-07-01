angular.module("airportModule", [])
	.controller ("radioController", ['$scope', '$http', function($scope, $http) {

		$http.get('airportInfo.json').success(function(data) ){
			$scope.airportInfo = data;
		}


}); 