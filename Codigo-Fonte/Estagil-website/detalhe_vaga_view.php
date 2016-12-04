<?php include'header.php';?>

<script src="assets/app/detalhes_app.js"></script>
<!-- banner -->
<div class="inside-banner">
  <div class="container">
    <h2>Detalhes da Vaga</h2>
  </div>
</div>
<!-- banner -->


<div class="container" ng-controller="destlhesCtrl">
  <div class="properties-listing spacer">

    <div class="row">

      <div class="col-lg-offset-3 col-lg-9 col-sm-offset-4 col-sm-8">

        <h2>{{detalhes.tituloVaga}}</h2>
        <div class="row">
          <div class="col-lg-8">

            <div ><h4><span class="glyphicon glyphicon-th-list"></span> Descrição da vaga</h4>
              <p>Efficiently unleash cross-media information without cross-media value. Quickly maximize timely deliverables for real-time schemas. Dramatically maintain clicks-and-mortar solutions without functional solutions.</p>
              <p>Completely synergize resource sucking relationships via premier niche markets. Professionally cultivate one-to-one customer service with robust ideas. Dynamically innovate resource-leveling customer service for state of the art customer service</p>
            </div>

            <!-- Map -->
            <div><h4><span class="glyphicon glyphicon-map-marker"></span> Endereço</h4>
              <div class="well"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3656.4993108499043!2d-46.684077185470045!3d-23.586419384670485!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce5744e0ebff5b%3A0x769bf4a32f914782!2sGoogle+S%C3%A3o+Paulo!5e0!3m2!1sen!2sbr!4v1480721735843" width="100%" height="350" frameborder="0" style="border:0" allowfullscreen></iframe></iframe></div>
            </div>

          </div>
          <div class="col-lg-4">
            <div class="col-lg-12  col-sm-6">
              <div class="property-info">
                <h3>Salário</h3>
                <p class="price">$ 200,000,000</p>
                <p class="area"><span class="glyphicon glyphicon-map-marker"></span> 344 Villa, Syndey, Australia</p>

                <div class="profile">
                  <span class="glyphicon glyphicon-user"></span> Agent Details
                  <p>John Parker<br>009 229 2929</p>
                </div>
              </div>

              <h6><span class="glyphicon glyphicon-home"></span> Availabilty</h6>
              <div class="listing-detail">
                <span data-toggle="tooltip" data-placement="bottom" data-original-title="Bed Room">5</span> <span data-toggle="tooltip" data-placement="bottom" data-original-title="Living Room">2</span> <span data-toggle="tooltip" data-placement="bottom" data-original-title="Parking">2</span> <span data-toggle="tooltip" data-placement="bottom" data-original-title="Kitchen">1</span> </div>

              </div>

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <?php include'footer.php';?>
