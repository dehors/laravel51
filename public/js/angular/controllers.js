angular.module("genreController")

.controller("gender", function($scope, $http){
	$scope.genderData = {};
	$scope.submitgender = function() {

		Comment.save($scope.genderData)
			.success(function(data) {
				console.log('success');
			})
			.error(function(data) {
				console.log(data);
			});
	};
})