(function() {
  //'use strict';

  angular
  .module('EstagilApp', ['ngCookies'])
  .controller('HeaderController', HeaderController);

  function HeaderController($cookies, $scope, $window) {
    var vm = this;
    $scope.empresaLogada = $cookies.get('empresaLogada');
    $scope.alunoLogado = $cookies.get('alunoLogado');
    $scope.logout = logout;
    $scope.userLogado = userLogado;

    console.log("id da empresa logada: "+ $scope.empresaLogada);
    console.log("id do aluno logado: "+ $scope.alunoLogado);

    function logout() {
      if(angular.isDefined($cookies.get('empresaLogada'))){
        $cookies.remove('empresaLogada');
      }
      else {
        $cookies.remove('alunoLogado');
      }

      console.log('logout realizado com sucesso.');
      $window.location.href = '/index.php';

    }

    function userLogado(){

      if(angular.isDefined($cookies.get('empresaLogada')) || angular.isDefined($cookies.get('alunoLogado'))){
        return true;
      }
      else return false;
      }




  }




  angular
  .module('EstagilApp')
  .controller('navbarCtrl', function($scope, $window) {

    $scope.isActive = function (windowLocation) {
      //console.log($window.location.pathname);
      return windowLocation === $window.location.pathname;
    };

  });

  angular
  .module('EstagilApp')
  .controller('LoginEmpresaController', function($scope,$cookies, $http) {
      var vm = this;
      vm.email = '';
      vm.password = '';
      vm.doLogin = function() {
          //$http.get()
      }
  });

})();
