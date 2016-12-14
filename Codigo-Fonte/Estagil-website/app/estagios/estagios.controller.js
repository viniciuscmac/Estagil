var app = angular.module('EstagilApp')
.controller("EstagiosController", function($scope, $window, $cookies, $http) {
  var vm = this;
  vm.estagios = $window.estagios;
  vm.getId = getId;
  vm.inscreverVaga = inscreverVaga;

  function getId(idVaga, nomeEmpresa) {
    vm.id = idVaga;
    console.log("id no angular" + vm.id);
    $cookies.put('idVaga', vm.id);
    $http.get('detalhes.php').then(successCallback, errorCallback);

    function successCallback(response) {
      console.log(response);
      vm.detalhesEstagio = response.data;
      vm.detalhesEstagio.nomeEmpresa = nomeEmpresa;
      vm.detalhesEstagio.dataInicio = new Date(vm.detalhesEstagio.dataInicio);
      $cookies.remove('idVaga');
    }

    function errorCallback(response){
      console.log(response);
    }
  }

  function inscreverVaga(idVaga){
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
