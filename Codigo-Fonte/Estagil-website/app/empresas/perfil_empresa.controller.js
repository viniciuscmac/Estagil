angular
  .module("EstagilApp")
  .controller("PerfilEmpresaController", function ($scope, $window, $cookies){
    var vm = this;
    vm.empresa = $window.empresa;
    vm.editar = false;
    vm.setEditar = setEditar;

    function setEditar (){
      vm.editar = !vm.editar;
    };
});
