(function() {
  //'use strict';

  angular
  .module('EstagilApp', ['ngCookies'])
  .controller('HeaderController', HeaderController);

  function HeaderController($cookies, $scope) {
    var vm = this;
    $scope.empresaLogada = $cookies.get('empresaLogada');
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
  .controller('loginCtrl', function($scope, $window) {

    
  });

})();
