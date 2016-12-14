angular
  .module("EstagilApp")
  .controller("PortalEmpresaController", function ($scope, $window, $cookies, $http){
    var vm = this;
    vm.empresa = $window.empresa;
    vm.vagas = $window.vagas;
    vm.temVagas = temVagas;
    vm.deletarVaga = deletarVaga;


    function temVagas(){
      return vm.vagas.length > 0 ;
    }

    function deletarVaga(idVaga){
      console.log("entrou no deletar");
      $cookies.put('idVagaDeletar', idVaga);

      $http.get('portal_empresa.php').then(successCallback, errorCallback);

      function successCallback(response) {
        console.log(response);

        $cookies.remove('idVagaDeletar');
        $window.location.reload();
      }

      function errorCallback(response){
        console.log(response);
      }
    }
});
