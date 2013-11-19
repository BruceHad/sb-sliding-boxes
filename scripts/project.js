function ProjCntr($scope){
    $scope.name = "Sliding Boxes";
    var isActive = 1;

    $scope.active = function (id) {
        isActive = id;
    };

    $scope.is = function (id) {
        return isActive == id;
    };
}