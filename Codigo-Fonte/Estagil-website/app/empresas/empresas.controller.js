angular
  .module("EstagilApp")
  .controller("empresaCtrl" , function ($scope, $window) {
    $scope.empresas = $window.empresas;
});
