function ProjCntr($scope){
    $scope.name = "Sliding Boxes";
    var isActive = 1;
    console.log("hello");

    $scope.active = function (id) {
        isActive = id;
        console.log(id);
    };

    $scope.is = function (id) {
        return isActive == id;
    };
}