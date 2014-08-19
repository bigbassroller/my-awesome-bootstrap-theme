app.controller('HomeCtrl', ['$scope', 'Posts', '$sce', function ($scope, Posts, $sce) {
	console.log('HomeCtrl Intialised');
	Posts.getPosts().then(function (data) {
		$scope.posts = data;
		angular.forEach($scope.posts, function(post){
			post.safeHtml = $sce.trustAsHtml(post.post_content);
		});
	});
}]);

