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
		},
		updategender: function(id) {
		
		gender.update(id,$scope.genderData)
			.success(function(data) {

			})
			.error(function(data) {
				$scope.errorMessages = data;	
				console.log($scope.errorMessages);			
			});
		}
	});

})
.controller("Movie", function($scope, movie, Upload){

	
	angular.extend($scope, {
		movieData: {},	
		getGenders: [],	
		errorMessages: []
	});

	movie.get()
		.success(function(data) {
	    	$scope.getGenders = data;
	        console.log($scope.getGenders);           
	     });

	$scope.uploadPic = function(file) {
	    file.upload = Upload.upload({
	      url: 'http://localhost/laravel51/public/api/movies',
	      data: $scope.movieData,
	    });
	};

});