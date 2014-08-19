app.controller('HomeCtrl', ['$scope', 'Posts', '$sce', function ($scope, Posts, $sce) {
	console.log('HomeCtrl Intialised');
	Posts.getPosts().then(function (data) {
		// console.log(data)
		$scope.posts = data;//$sce.trustAsHtml(data[0].post_content);
		angular.forEach($scope.posts, function(post){
			post.safeHtml = $sce.trustAsHtml(post.post_content);
		})
		// console.log($scope.posts);
	});
}]);

