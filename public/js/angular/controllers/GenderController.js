angular.module("Controller",[])

.controller("Gender", function($scope, gender){
	
	angular.extend($scope, {
		genderData: {},
		errorMessages: []
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

})
.controller("Movie", function($scope, movie){

	angular.extend($scope, {
		movieData: {},	
		getGenders: [],	
		errorMessages: []
	});
	 
	movie.get()
		.success(function(data) {
	    	$scope.getGenders = data;
	        console.log($scope.getGender);           
	     });
	angular.extend($scope, {
		submitmovie: function() {	
			console.log($scope.movieData);
		}
	});
});