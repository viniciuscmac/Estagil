var app = angular.module('EstagilApp').controller("estagiosCtrl", function ($scope, $window, $cookies) {
    $scope.estagios = $window.estagios;

    $scope.detalhesEstagio = $window.detalhesEstagio;

    $scope.getId = function(id) {
      $scope.id = id;
      console.log("id no angular" + $scope.id);
      $cookies.put('id', $scope.id);
    }


    });
