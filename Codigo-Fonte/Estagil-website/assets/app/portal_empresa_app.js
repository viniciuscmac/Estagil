angular
  .module("EstagilApp")
  .controller("PortalEmpresaController", function ($scope, $window){
    $scope.empresa = $window.empresa;
    console.log("EMPRESA: " + $scope.empresa);
});
