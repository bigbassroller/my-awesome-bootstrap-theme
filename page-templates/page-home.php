<div data-ng-controller="HomeCtrl">
        <div data-ng-repeat="post in posts">
                <h1>{{post.post_title}}</h1>
                <p>{{post.post_content}}</p>
                <i>{{post.post_modified}}</i>
        </div>
</div>
