var app = angular.module('EstagilApp')
.controller("estagiosCtrl", function($scope, $window, $cookies, $http) {
  $scope.estagios = $window.estagios;

  $scope.getId = function(idVaga, nomeEmpresa) {
    $scope.id = idVaga;
    console.log("id no angular" + $scope.id);
    $cookies.put('idVaga', $scope.id);
    $http.get('detalhes.php').then(successCallback, errorCallback);

    function successCallback(response) {
      console.log(response);
      $scope.detalhesEstagio = response.data;
      $scope.detalhesEstagio.nomeEmpresa = nomeEmpresa;
      $scope.detalhesEstagio.dataInicio = new Date($scope.detalhesEstagio.dataInicio);
      $cookies.remove('idVaga');
    }

    function errorCallback(response){
      console.log(response);
    }
  }

  $scope.inscreverVaga = function(idVaga){
    $cookies.put('idVagaInscricao', idVaga);
    $http.get('estagios.php').then(successCallback, errorCallback);

    function successCallback(response) {
      console.log(response);

      $cookies.remove('idVagaInscricao');
      $window.location.reload();
    }

    function errorCallback(response){
      console.log(response);
    }
  }
})
