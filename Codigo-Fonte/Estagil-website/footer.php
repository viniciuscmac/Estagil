<div class="footer">
  <div class="container">
    <div class="row">

      <div class="col-lg-3 col-sm-3">
        <h4>Informações</h4>
        <ul class="row">

          <li class="col-lg-12 col-sm-12 col-xs-3"><a href="/app/empresas/empresas_view.php">Empresas Cadastradas</a></li>
          <li class="col-lg-12 col-sm-12 col-xs-3"><a href="/contact.php">Fale conosco</a></li>
        </ul>
      </div>


      <div class="col-lg-3 col-lg-offset-3 col-sm-3">
        <h4>Nos siga nas redes sociais</h4>
        <a href="#"><img src="/images/facebook.png" alt="facebook"></a>
        <a href="#"><img src="/images/instagram.png" alt="instagram"></a>
      </div>

      <div class="col-lg-3 col-sm-3">
        <h4>Fale Conosco</h4>
        <p><b>Estágil.</b><br>
          <span class="glyphicon glyphicon-map-marker"></span> Rua x, Goiânia, Goiás <br>
          <span class="glyphicon glyphicon-envelope"></span> estagio@estagil.com<br>
          <span class="glyphicon glyphicon-earphone"></span> (62) 9999-9999</p>
        </div>
      </div>
      <p class="copyright">Copyright 2016. Todos os direitos reservados.	</p>


    </div></div>




    <!-- Modal -->
    <div id="loginpop" class="modal fade">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="row">
            <div class="col-sm-6 login">
              <h4>Login Estudante</h4>
              <form class="" action="" method="post">
                <div class="form-group">
                  <label class="sr-only" for="exampleInputEmail2">Email</label>
                  <input type="text" class="form-control" id="exampleInputEmail2" placeholder="Enter email"
                    ng-model="loginCtrl.email" name="emailUser">
                </div>
                <div class="form-group">
                  <label class="sr-only" for="exampleInputPassword2">Senha</label>
                  <input type="password" class="form-control" id="exampleInputPassword2" placeholder="Password"
                    ng-model="loginCtrl.password" name="passwordUser">
                </div>
                <div class="checkbox">
                  <label>
                    <input type="checkbox" name="checkbox"> Mantenha-me conectado
                  </label>

                </div>
                <button type="submit" class="btn btn-success" ng-click="loginCtrl.doLogin()"name="loginuser">Entrar</button>
                <h3><?php echo $loginmessage;?></h3>
                <br><a href="#">Esqueci minha senha</a>
              </form>
            </div>
            <div class="col-sm-6">
              <h4>Não tem uma conta?</h4>
              <p>Cadastre-se hoje e fique sabendo em primeira mão das vagas ofertadas!</p>
              <button type="submit" class="btn btn-info"  onclick="window.location.href='/app/alunos/register.php'">Criar conta</button><br><br>

              <h4>É uma empresa?</h4>
              <p>Faça Login ou Cadastre-a hoje e ofereça vagas de estágios!</p>
              <button type="submit" class="btn btn-info btn-empresa" onclick="window.location.href='/app/empresas/empresa_register.php'">Criar conta de Empresa</button>
              <button type="submit" class="btn btn-info btn-default" data-toggle="modal"
                data-target="#loginempresapop"
              data-dismiss="modal"> Fazer Login Empresa</button>

            </div>



          </div>
        </div>
      </div>
    </div>
    <!-- /.modal -->
  
  </body>
  </html>
