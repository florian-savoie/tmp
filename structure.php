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
                          <input name="default-radio-1" class="form-check-input" type="radio" value="" id="defaultRadio2" checked="">
                          <label class="form-check-label" for="defaultRadio2"> CONTAINER-FLUID </label>
                        </div> 
                      </div>



                      <div class="row mb-3">
                  
                      <div class="row mb-3">
                        <label class="col-sm-3 col-form-label" for="multicol-email">Ajouter une div</label>
                        <div class="col-sm-9">
                          <div class="input-group input-group-merge">
                            <input type="text" id="multicol-email" class="form-control" placeholder="Class de la div" aria-label="john.doe" aria-describedby="multicol-email2">
                            <span class="input-group-text" id="multicol-email2"></span>
                          </div>
                        </div>
                      </div>
                      <div data-repeater-item="">
                            <div class="row"><div class="col-4 d-flex align-items-center">
                            <span class="" >Ajouter une row</span>
</div>
                              <div class="mb-3 col-4 mb-0">
                                <div class="form-floating form-floating-outline">
                                  <input type="text" id="form-repeater-1-2" class="form-control" placeholder="············">
                                  <label for="form-repeater-1-2">Class</label>
                                </div>
                              </div>
                           
                              <div class="mb-3 col-4 d-flex align-items-center mb-0">
                                <button class="btn btn-label-primary waves-effect" data-repeater-delete="">
                                  <span class="align-middle">Ajouter</span>
                                </button>
                              </div>
                            </div>
                            <hr>
                          </div>   
                      <div class="pt-4">
                        <div class="row justify-content-end">
                          <div class="col-sm-9">
                            <button type="submit" class="btn btn-primary me-sm-2 me-1 waves-effect waves-light">Visualiser</button>
                            <button type="reset" class="btn btn-label-secondary waves-effect">Cancel</button>
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