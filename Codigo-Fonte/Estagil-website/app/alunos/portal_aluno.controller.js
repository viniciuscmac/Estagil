angular
  .module("EstagilApp")
  .controller("PortalAlunoController", function ($scope, $window){
    $scope.aluno = $window.aluno;
});
