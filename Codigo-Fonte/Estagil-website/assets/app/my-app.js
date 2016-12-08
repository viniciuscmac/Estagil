(function() {
  //'use strict';

  angular
  .module('EstagilApp', ['ngCookies'])
  .controller('HeaderController', HeaderController);

  function HeaderController($cookies, $scope) {
    var vm = this;
    console.log($scope.empresaLogada);
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
  .controller('LoginEmpresaController', function($scope,$cookies) {
      var vm = this;
      vm.email = '';
      vm.password = '';

      vm.doLogin = function() {
         // var id = JSON.parse( '<?php echo json_encode(  checkEmpresa('+vm.email+ ',' + vm.password+ ') ); ?>' );
      }
  });

})();
