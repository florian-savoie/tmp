<?php
  require('head.php');
  ?>

<div class="container">
  <div class="row">
  <div class="col-8 mb-4">
                  <div class="card h-100">
                    <div class="card-header d-flex align-items-center justify-content-between">
                      <h5 class="card-title m-0 me-2">Fonction PUI</h5>
                    <hr>
                    </div>
                    <div class="card-body">
                        
                        <div class="row">
                            <div class="col-10">
                              
                                <h4 class="fw-bold "> - Obtenir la valeur d'une variable</h4>
                                <h4 class="fw-bold text-white p-2 text-center" style="background-color: black;border-radius: 0.5rem;">pui.get('la-variable')</h4>
                            </div>
                            <div class="col-2 d-flex justify-content-center align-items-center">
                                <span class="mdi mdi-plus-circle mdi-36px" style="color: rgb(94, 94, 233);"></span>

                            </div>
                        </div>
                     <hr>
                        <div class="row">
                            <div class="col-10">
                              
                                <h4 class="fw-bold "> - Modifier la valeur d'une variable</h4>
                                <h4 class="fw-bold text-white p-2 text-center" style="background-color: black;border-radius: 0.5rem;">pui.set('la-variable','la-valeur')</h4>
                            </div>
                            <div class="col-2">
                                <span class="mdi mdi-plus-circle"></span>

                            </div>
                        </div>
                     <hr>
                        <div class="row">
                            <div class="col-10">
                              
                                <h4 class="fw-bold "> - Simuler l'appui d'une touche</h4>
                                <h4 class="fw-bold text-white p-2 text-center" style="background-color: black;border-radius: 0.5rem;">pressKEY('la-touche')</h4>
                            </div>
                            <div class="col-2">
                                <span class="mdi mdi-plus-circle"></span>

                            </div>
                        </div>
                     <hr>
              
                    </div>
                  </div>
                </div>
  </div>

</div>


<?php
  require('footer.php');
  ?>