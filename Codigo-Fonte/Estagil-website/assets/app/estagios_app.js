var app = angular.module("EstagilApp").controller("estagiosCtrl" , function ($scope, $window) {
    $scope.estagios = $window.estagios;

    $scope.getId = function(id) {
      console.log(id);
      $scope.idVaga = id;
    }
    });
