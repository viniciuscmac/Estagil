var app = angular.module("estagiosApp", []).controller("estagiosCtrl" , function ($scope, $window) {
    $scope.estagios = $window.estagios;
    });
