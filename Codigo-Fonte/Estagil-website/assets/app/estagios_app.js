var app = angular.module("EstagilApp").controller("estagiosCtrl" , function ($scope, $window) {
    $scope.estagios = $window.estagios;
    //$scope.detalhe = $window.detalhe;

    $scope.getId = function(id) {
      console.log(id);
      $scope.idVaga = id;
    }


    });
