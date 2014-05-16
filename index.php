<!DOCTYPE html>
<html>

<head>
    <title>Treerock - Sandbox</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="http://treerock.me/assets/favicon.ico">
    <link href="css/normalize.css" rel="stylesheet">
    <link href="css/sandbox.css" rel="stylesheet" media="screen">
    <link href="css/project.css" rel="stylesheet" media="screen" />
    <link href='http://fonts.googleapis.com/css?family=Vollkorn' rel='stylesheet' type='text/css'>

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="http://treerock.me/assets/js/html5shiv.js"></script>
      <script src="http://treerock.me/assets/js/respond.min.js"></script>
      <![endif]-->
</head>

<body>
     <nav class="clearfix">
        <div class="container">
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#">News</a></li>
                <li><a href="#">Sandbox</a></li>
            </ul>
        </div>
    </nav>
    <header class="section">
        <div class="container">
            <h1>Treerock</h1>
            <p class="sub"><span>Sandbox - Sliding Boxes</span></p>    
        </div>
    </header>
    <div class="sandbox main section">
        <div class="container clearfix" ng-controller="ProjCntr" ng-app>
            <ul class="nav-container">
                <li> <a href="#" ng-click="active(1)" ng-class="{'active': is(1)}" class="active">Box 1</a></li>
                <li> <a href="#" ng-click="active(2)" ng-class="{'active': is(2)}">Box 2</a></li>
                <li> <a href="#" ng-click="active(3)" ng-class="{'active': is(3)}">Box 3</a></li>
            </ul>
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
    </div>
    <footer class="section clearfix">
        <div class="container">
            <p>Fais ce que tu veux.</p>
        </div>
    </footer>
     <script src="//ajax.googleapis.com/ajax/libs/angularjs/1.0.7/angular.min.js"></script>
    <script src="scripts/project.js"></script>
</body>

</html>