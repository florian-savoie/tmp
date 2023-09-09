<?php
  require('head.php');
  ?>

<div class="container">
  <div class="row">
    <div class="col-6">
      <div class="card">
        <h5 class="card-header">Creation de votre structure</h5>
        <form class="card-body" data-select2-id="28">
          <h6 class="mb-b fw-semibold">1. Choix du container</h6>

          <div class="row d-flex justify-content-center p-4">
            <div class="form-check col-6">
              <input name="default-radio-1" class="form-check-input" type="radio" value="" id="defaultRadio1">
              <label class="form-check-label" for="defaultRadio1"> CONTAINER </label>
            </div>
            <div class="form-check col-6">
              <input name="default-radio-1" class="form-check-input" type="radio" value="" id="defaultRadio2"
                checked="">
              <label class="form-check-label" for="defaultRadio2"> CONTAINER-FLUID </label>
            </div>
          </div>


          <div class="row mb-3">
            <label class="col-sm-4 col-form-label" for="basic-default-name">Ajouter une Row</label>
            <div class="col-sm-4">
              <input type="text" class="form-control" id="basic-default-name" placeholder="Class">
            </div>
            <div class="col-sm-4">
              <button class="btn btn-primary">Ajouter</button>
            </div>
          </div>
          <div class="row mb-3">
            <label class="col-sm-4 col-form-label" for="basic-default-name">Ajouter une DIV</label>
            <div class="col-sm-4">
              <input type="text" class="form-control" id="basic-default-name" placeholder="Class">
            </div>
            <div class="col-sm-4">
              <button class="btn btn-primary">Ajouter</button>
            </div>
          </div>

          <div class="pt-4">
            <div class="row justify-content-end">
              <div class="col-sm-9">
                <button type="submit" class="btn btn-primary me-sm-2 me-1 waves-effect waves-light">Visualiser</button>
              </div>
            </div>
          </div>
        </form>
      </div>


    </div>
  </div>

</div>


<?php
  require('footer.php');
  ?>