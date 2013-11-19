<div class="row heading clearfix">
    <h1>Treerock</h1>
    <p class="subheading">
        Sandbox Projects
        <br />\ Sliding Boxes
    </p>
</div>

<div ng-controller="ProjCntr" ng-app>
    <div class="container">
        <div class="row">
            <div class="col col-4">
                <ul class="nav-container">
                    <li ng-class="{'active': is(1)}"> <a href="#" ng-click="active(1)">Link 1</a>
                    </li>
                    <li ng-class="{'active': is(2)}"> <a href="#" ng-click="active(2)">Link 2</a>
                    </li>
                    <li ng-class="{'active': is(3)}"> <a href="#" ng-click="active(3)">Link 3</a>
                    </li>
                </ul>
            </div>
            <div class="col col-4">
                <div class="box-container">
                    <div class="box one active" ng-class="{'active': is(1)}">
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
            <div class="col col-4">
                
            </div>
        </div>
    </div>
</div>