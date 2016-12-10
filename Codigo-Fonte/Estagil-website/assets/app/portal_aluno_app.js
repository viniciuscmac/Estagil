angular
  .module("EstagilApp")
  .controller("PortalAlunoController", function ($scope, $window){
    $scope.aluno = $window.aluno;
    console.log("ALUNO: " + $scope.aluno.nomeAluno);
});
