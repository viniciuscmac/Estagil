var app = angular.module('EstagilApp').controller("estagiosCtrl", function ($scope, $window, $cookies) {
    $scope.estagios = $window.estagios;

    $scope.getId = function(id, nomeEmpresa) {
      $scope.detalhesEstagio = $window.detalhesEstagio;
      $scope.detalhesEstagio[0].nomeEmpresa = nomeEmpresa;
      $scope.id = id;
      console.log("id no angular" + $scope.id);
      $cookies.put('id', $scope.id);
    }


    });
