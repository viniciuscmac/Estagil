<?php 
 $path = $_SERVER['DOCUMENT_ROOT'];
include$path.'/' . 'header.php';?>

<div ng-controller="LoginEmpresaController as loginEmpresaCtrl" id="loginempresapop" >

      <div class="modal-dialog">
        <div class="modal-content">
          <div class="row">
            <div class="col-sm-offset-3 col-sm-6 login">
              <h4>Login</h4>
              <form class="" method="post" action="">
                <div class="form-group">
                  <label class="sr-only" for="exampleInputEmail2">Email</label>
                  <input name="form_email" type="text" class="form-control" id="exampleInputEmail2" placeholder="Enter email"
                    ng-model="loginEmpresaCtrl.email">
                </div>
                <div class="form-group">
                  <label class="sr-only" for="exampleInputPassword2">Senha</label>
                  <input name="form_password" type="password" class="form-control" id="exampleInputPassword2" placeholder="Password"
                    ng-model="loginEmpresaCtrl.password">
                </div>
                <div class="checkbox">
                  <label>
                    <input type="checkbox" name="checkbox"> Mantenha-me conectado
                  </label>

                </div>
                <br><br>
                <button type="submit" class="btn btn-success" name="login">Entrar</button>
                <center><a href="#">Esqueci minha senha</a><center>

              </form>
              <br>
              <?php echo $loginmessage; ?>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- /.modal -->
<?php include$path.'/' . 'footer.php';?>