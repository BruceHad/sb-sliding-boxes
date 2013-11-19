<div class="row heading clearfix">
    <h1>Treerock</h1>
    <p class="subheading">
        Sandbox Projects
        <br />\ Sliding Boxes
    </p>
</div>

<div ng-controller="ProjCntr" ng-app>
    <div class="container clearfix">
        <div class="row">
            <div class="col col-3 clearfix">
                <ul class="nav-container">
                    <li> <a href="#" ng-click="active(1)" ng-class="{'active': is(1)}" class="active">Box 1</a></li>
                    <li> <a href="#" ng-click="active(2)" ng-class="{'active': is(2)}">Box 2</a></li>
                    <li> <a href="#" ng-click="active(3)" ng-class="{'active': is(3)}">Box 3</a></li>
                </ul>
            </div>
            <div class="col col-5 clearfix">
                <div class="box-container">
                    <div class="box one active" ng-class="{'active': is(1)}" class="active">
                        <p>1</p>
                    </div>
                    <div class="box two" ng-class="{'active': is(2)}">
                        <p>2</p>
                    </div>
                    <div class="box three" ng-class="{'active': is(3)}">
                        <p>3</p>
                    </div>
                </div>
            </div>
            <div class="col col-4 clearfix">
                <h2>About</h2>
                <p>A small <a href="http://docs.angularjs.org/guide/introduction">project that uses Angular JS</a> framework and CSS transitions for simple animations.</p>
                <h2>Meta</h2>
                <p>Created in October 2013</p>
                <p>AngularJS, Javascript, MVC, css transitions</p>
                <p>Source on <a href="https://github.com/treerock/sb-sliding-boxes">Github</a></p>
            </div>
        </div>
    </div>
</div>