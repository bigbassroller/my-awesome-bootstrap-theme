<div data-ng-controller="HomeCtrl">
        <div data-ng-repeat="post in posts" ng-bind-html-unsafe="" >
                <h1><a href="{{post.guid}}">{{post.post_title}}</a></h1>
              	 <div class="foo">{{post.post_content}}</div>
                <i>{{post.post_modified}}</i>
                
                
        </div>
</div>
