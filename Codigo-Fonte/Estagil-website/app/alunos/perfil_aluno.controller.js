angular
.module("EstagilApp")
.controller("PerfilAlunoController", function ($scope, $window, $cookies){
  var vm = this;
  vm.aluno = $window.aluno;
  vm.editar = false;
  vm.setEditar = setEditar;
  vm.setSemestre = setSemestre;

  vm.options = [{ name: "1º", id: "1" }, { name: "2º", id: "2" }, { name: "3º", id: "3" },
  { name: "4º", id: "4" }, { name: "5º", id: "5" }, { name: "6º", id: "6"}, { name: "7º", id: "7" },
  { name: "8º", id: "8" }, { name: "9º", id: "9" }, { name: "10º", id: "10" }];

  vm.selectedOption = vm.options[vm.aluno.semestreAluno-1];

  function setSemestre(){
    vm.aluno.semestreAluno = vm.selectedOption.id;
  };

  function setEditar (){
    vm.editar = !vm.editar;
  };
});
