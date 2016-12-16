<!-- Modal -->

  <!-- modal de login empresa -->
    <div ng-controller="LoginEmpresaController as loginEmpresaCtrl" id="loginempresapop" >
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="row">
            <div class="col-sm-6 login">
              <h4>Login Empresa</h4>
              <form class="" method="post" action="">
                <div class="form-group">
                  <label class="sr-only" for="exampleInputEmail2">Email</label>
                  <input name="form_email_empresa_login" type="text" class="form-control" id="exampleInputEmail2" placeholder="Enter email"
                    ng-model="loginEmpresaCtrl.email">
                </div>
                <div class="form-group">
                  <label class="sr-only" for="exampleInputPassword2">Senha</label>
                  <input name="form_password_empresa_login" type="password" class="form-control" id="exampleInputPassword2" placeholder="Password"
                    ng-model="loginEmpresaCtrl.password">
                </div>
                <div class="checkbox">
                  <label>
                    <input type="checkbox" name="checkbox"> Mantenha-me conectado
                  </label>

                </div>
                <br><br><a href="#">Esqueci minha senha</a>
                <button type="submit" class="btn btn-success" name="loginempresa" ng-click="loginEmpresaCtrl.doLogin()">Entrar</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- /.modal -->
