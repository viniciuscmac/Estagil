var app = angular.module('EstagilApp').controller("estagiosCtrl", function ($scope, $window, $cookies) {
    $scope.estagios = $window.estagios;

    $scope.getId = function(idVaga, nomeEmpresa) {
      $scope.id = idVaga;
      console.log("id no angular" + $scope.id);
      $cookies.put('idVaga', $scope.id);

      $scope.detalhesEstagio = $window.detalhesEstagio;
      $scope.detalhesEstagio[0].nomeEmpresa = nomeEmpresa;
      
    }


    });
