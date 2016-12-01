(function() {
'use strict';

    angular
        .module('EstagilApp', ['ngCookies'])
        .controller('HeaderController', HeaderController);

    function HeaderController($cookies, $scope) {
        var vm = this;
        $scope.empresaLogada = $cookies.get('empresaLogada');
        console.log($scope.empresaLogada);
    }
})();