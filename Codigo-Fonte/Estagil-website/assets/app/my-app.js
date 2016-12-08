(function() {
  //'use strict';

  angular
  .module('EstagilApp', ['ngCookies'])
  .controller('HeaderController', HeaderController);

  function HeaderController($cookies, $scope, $window) {
    var vm = this;
    $scope.empresaLogada = $cookies.get('empresaLogada');
    console.log("id da empresa logada: "+ $scope.empresaLogada);

    $scope.logout = function logout() {
      $cookies.remove('empresaLogada');
      console.log('logout realizado com sucesso.');
      $window.location.href = '/index.php';

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
