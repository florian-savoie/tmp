<?php
  require('head.php');
  ?>

<div class="container">
  <div class="row">
    <div class="col-8 ">
      <div class="card mb-4">
        <h5 class="card-header">Configuration de l'ecran</h5>
        <form class="card-body" method="POST"  id="formulaires">
          <h6 class="mb-b fw-semibold">Information Header</h6>
          <div class="row mb-3">
            <label class="col-sm-3 col-form-label" for="multicol-username">Premier chemin</label>
            <div class="col-sm-9">
              <input type="text" id="multicol-username" class="form-control" name="premierChemin" placeholder="TKMENU">
            </div>
          </div>
          <div class="row mb-3">
            <label class="col-sm-3 col-form-label" for="multicol-email">Deuxieme chemin</label>
            <div class="col-sm-9">
              <div class="input-group input-group-merge">
                <input type="text" id="multicol-email" class="form-control" placeholder="TKEMPMJ" aria-label="john.doe"
                  aria-describedby="multicol-email2" name="deuxiemeChemin">
              </div>
            </div>
          </div>

          <hr class="my-4 mx-n4">

          <h6 class="mb-3 fw-semibold">Dropdown</h6>

          <label class="switch switch-primary">
            <input type="checkbox" class="switch-input" name="addDropdown">
            <span class="switch-toggle-slider">
              <span class="switch-on"></span>
              <span class="switch-off"></span>
            </span>
            <span class="switch-label">Oui/Non</span>
          </label>

          <h6 class="mb-3 fw-semibold mt-2">Avec un switch</h6>
          <div class="row mb-3 mt-2">
            <label class="switch switch-primary">
              <input type="checkbox" class="switch-input" name="addDropdownSwitch">
              <span class="switch-toggle-slider">
                <span class="switch-on"></span>
                <span class="switch-off"></span>
              </span>
              <span class="switch-label">Oui/Non</span>
            </label>

            <label class="col-sm-3 col-form-label" for="multicol-email">Nom du switch</label>
            <div class="col-sm-9">
              <div class="input-group input-group-merge">
                <input type="text" id="multicol-email" class="form-control" placeholder="Nom du switch"
                  aria-label="john.doe" aria-describedby="multicol-email2" name="nameDropdownSwitch">
              </div>
            </div>
          </div>
          <div class="row mb-3 mt-2">
            <label class="col-sm-3 col-form-label" for="multicol-email">Variable a checker</label>
            <div class="col-sm-9">
              <div class="input-group input-group-merge">
                <input type="text" id="multicol-email" class="form-control" placeholder="Nom de la variable a checker"
                  aria-label="john.doe" aria-describedby="multicol-email2" name="variableDropdownSwitch">
              </div>
            </div>
          </div>



          <div class="pt-4">
            <div class="row justify-content-end">
              <div class="col-sm-9">
                <button type="submit" class="btn btn-primary me-sm-2 me-1 waves-effect waves-light" name="configuration">Valider</button>
              </div>
            </div>
          </div>
        </form>
      </div>


      <?php 


if (isset($_POST['configuration']) ){
  $premierChemin = $_POST['premierChemin'] ?? "";
  $deuxiemeChemin = $_POST['deuxiemeChemin'] ?? "";
  $addDropdown = (isset($_POST['addDropdown'])) ? "true" : "false";
  $addDropdownSwitch = (isset($_POST['addDropdownSwitch'])) ? "true" : "false";
  $nameDropdownSwitch = $_POST['nameDropdownSwitch'] ?? "";
  $variableDropdownSwitch = $_POST['variableDropdownSwitch'] ?? "";
}

 ?>


      <div class="card">

        <div class="form-floating form-floating-outline m-4">
          <textarea class="form-control h-px-500px" id="exampleFormControlTextarea1"
            placeholder="Configurer votre fonction" style=" color: rgb(63, 15, 235);height: 500px;">

<?php 
if (isset($_POST['configuration'])){
   echo "initialize({
    \"header\": {
      \"premierChemin\": \"" . $premierChemin . "\",
      \"deuxiemeChemin\": \"" . $deuxiemeChemin . "\"
    },
    \"dropdown\": {
      \"addDropdown\": " . $addDropdown . ",
      \"addDropdownSwitch\": " . $addDropdownSwitch . ",
      \"nameDropdownSwitch\": \"" . $nameDropdownSwitch . "\",
      \"variableDropdownSwitch\": \"" . $variableDropdownSwitch . "\"
    }
  })"  ;

}

?>
                        </textarea>
          <label for="exampleFormControlTextarea1">fonction initialize</label>
        </div>
      </div>
    </div>
<div class="col-4">
  <div class="card">
    <div class="card-body">
      <h5 class="card-title mt-1">Apercu</h5>
      <h6 class="card-subtitle text-muted">Visuel de la configuration</h6>
      <h6 class="mb-b fw-semibold mt-4">Information Header</h6>
      <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">TKMENU /</span> TKEMPMJ</h4>

<hr class="mt-2">

      <h6 class="mb-b fw-semibold mt-4">Dropdown</h6>
      <div class="btn-group">
        <button type="button" class="btn btn-primary dropdown-toggle waves-effect waves-light" data-bs-toggle="dropdown" aria-expanded="false">
          Dropdown
        </button>
        <ul class="dropdown-menu" style="">
          <li><a class="dropdown-item waves-effect" href="javascript:void(0);">Action</a></li>
          <li><a class="dropdown-item waves-effect" href="javascript:void(0);">Another action</a></li>
          <li><a class="dropdown-item disabled waves-effect" href="javascript:void(0);">Something else here</a></li>
          <li>
            <hr class="dropdown-divider">
          </li>
          <li><a class="dropdown-item waves-effect" href="javascript:void(0);">Separated link</a></li>
        </ul>
      </div>

      <h6 class="mb-b fw-semibold mt-4"> Dropdown Avec un switch
      </h6>
      <div class="btn-group">
        <button type="button" class="btn btn-primary dropdown-toggle waves-effect waves-light" data-bs-toggle="dropdown" aria-expanded="false">
          Dropdown Avec un switch
        </button>
        <ul class="dropdown-menu p-3" style="">
          <li><label class="switch switch-danger">
            <input type="checkbox" class="switch-input" checked="">
            <span class="switch-toggle-slider">
              <span class="switch-on"></span>
              <span class="switch-off"></span>
            </span>
            <span class="switch-label">Annuler</span>
          </label></li>
          <li><a class="dropdown-item waves-effect" href="javascript:void(0);">Another action</a></li>
          <li><a class="dropdown-item disabled waves-effect" href="javascript:void(0);">Something else here</a></li>
          <li>
            <hr class="dropdown-divider">
          </li>
          <li><a class="dropdown-item waves-effect" href="javascript:void(0);">Separated link</a></li>
        </ul>
      </div>
 <p class="mt-2">Nom du switch  :  <label class="switch switch-danger">
  <input type="checkbox" class="switch-input" checked="">
  <span class="switch-toggle-slider">
    <span class="switch-on"></span>
    <span class="switch-off"></span>
  </span>
  <span class="switch-label">Danger</span>
</label><label class="switch switch-success">
  <input type="checkbox" class="switch-input" checked="">
  <span class="switch-toggle-slider">
    <span class="switch-on"></span>
    <span class="switch-off"></span>
  </span>
  <span class="switch-label">Valider</span>
</label></p>
<p>Variable qui contiend les resultat a envoyer au back</p>
    </div>

  </div>
</div>
  </div>

</div>
<script>

  function initialize(option) {
    console.log(option.header.premierChemin + 'ok');
    console.log(option.dropdown.addDropdownSwitch + 'ok');
    console.log(option.dropdown.nameDropdownSwitch + 'ok');

      if(option.dropdown) {

        console.log("drop");
      }
  }

  initialize({
    "header": {
      "premierChemin": "florian",
      "deuxiemeChemin": "savoie"
    },
    "dropdown": {
      "addDropdown": true,
      "addDropdownSwitch": true,
      "nameDropdownSwitch": "Gestion des erreurs",
      "variableDropdownSwitch": "£livre"
    }
  })                                  
</script>

<?php
  require('footer.php');
  ?>