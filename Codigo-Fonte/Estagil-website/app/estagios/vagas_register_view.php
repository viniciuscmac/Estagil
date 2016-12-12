<?php $_REQUEST['page'] = 'entrar';?>
<?php include'header.php';?>
<!-- banner -->
<div class="inside-banner">
  <div class="container">
    <h2>Cadastre sua vaga</h2>
  </div>
</div>
<!-- banner -->


<div class="container">
  <div class="spacer">
    <div class="row register">
      <div class="col-lg-6 col-lg-offset-3 col-sm-6 col-sm-offset-3 col-xs-12 ">

        <form class="" action="" method="post">

          <input type="text" class="form-control" placeholder="Forneça o título da vaga" name="form_titulo_vaga" required>
          <input type="text" class="form-control" placeholder="Forneça a área de atuação da vaga" name="form_area_vaga" required>
          <input type="textarea" class="form-control" rows="15" placeholder="Forneça uma descrição da vaga" name="form_descricao_vaga" required></textarea>

          <h5>Selecione a data de início do estágio</h5>
          <input type="date" class="form-control" placeholder="Date" name="form_inicio_vaga">
          <input type="number" class="form-control" placeholder="Salário" name="form_salario_vaga" required></textarea>
          <select name="form_transporte_vaga" class="form-control" required>
            <option value="1" disabled selected>Auxílio Transporte</option>
            <option value="1">Sim</option>
            <option value="0">Não</option>
          </select>

          <select name="form_extra_vaga" class="form-control" required>
            <option disabled selected>Auxílio Extra</option>
            <option>Sim</option>
            <option>Não</option>
          </select>

          <input type="textArea" rows="5" class="form-control" placeholder="Descreva os requisitos da vaga" name="form_requisitos_vaga" required>

          <button type="submit" class="btn btn-success" name="Sign">Abrir Vaga</button>
        </form>


      </div>
    </div>
  </div>
</div>
<?php include'footer.php';?>
