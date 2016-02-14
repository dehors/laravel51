angular.module("genderController",[])

.controller("Gender", function($scope, gender){
	$scope.errorMessages = [];
	angular.extend($scope, {
		genderData: {}
	});

	angular.extend($scope, {
		submitgender: function() {
	
		gender.save($scope.genderData)
			.success(function(data) {

			})
			.error(function(data) {
				$scope.errorMessages = data;	
				console.log($scope.errorMessages);			
			});
		}

	});

});