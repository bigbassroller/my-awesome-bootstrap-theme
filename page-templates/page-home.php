<div data-ng-controller="HomeCtrl">
        <div data-ng-repeat="post in posts" >
                <h1><a href="{{post.guid}}">{{post.post_title}}</a></h1>
              	 <div ng-bind-html="post.safeHtml"></div>
                <i>{{post.post_modified}}</i>
                
              
        </div>
</div>
