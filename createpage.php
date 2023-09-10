    
    <?php
    if(isset($_POST['namePGM'])){
        $fileName = $_POST['namePGM'] . '.php'; // Concaténez le nom du fichier avec '.php'
        $fileContent = 'salut';
    
        // Assurez-vous que le nom du fichier est sécurisé pour éviter les problèmes de sécurité
        $fileName = 'projet/' . htmlspecialchars($fileName, ENT_QUOTES, 'UTF-8');
    
        // Utilisez file_put_contents pour créer le fichier
        if(file_put_contents($fileName, $fileContent) !== false){
            // Redirigez l'utilisateur vers une nouvelle page après la création du fichier
            header('Location: '.$fileName);
            exit;
        } else {
            echo 'Une erreur s\'est produite lors de la création du fichier.';
        }
    }
    ?>
    <?php
  require('head.php');
  ?>

<div class="container">
    <div class="row d-flex justify-content-center ">

        <div class="col-8 mb-4">
            <div class="card">
                <h5 class="card-header">Creation d'un squelette</h5>
                <div class="card-body">       <form method="post">
                            <div class="row mb-3">
                                <label class="col-sm-4 col-form-label" for="basic-default-name">Nom du programme</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" id="basic-default-name"
                                        placeholder="PGM" name="namePGM">
                                </div>
                            </div>
                    <div class="row">
                 
                            <div class="col-md mb-md-0 mb-2">
                                <div class="form-check custom-option custom-option-icon">
                                    <label class="form-check-label custom-option-content" for="customRadioIcon1">
                                        <span class="custom-option-body">
                                            <i class="mdi mdi-rocket-launch-outline"></i>
                                            <span class="custom-option-title">Starter</span>
                                            <small> Cake sugar plum fruitcake I love sweet roll jelly-o.</small>
                                        </span>
                                        <input name="customRadioIcon" class="form-check-input" type="radio" value=""
                                            id="customRadioIcon1" checked="">
                                    </label>
                                </div>
                            </div>
                            <div class="col-md mb-md-0 mb-2">
                                <div class="form-check custom-option custom-option-icon checked">
                                    <label class="form-check-label custom-option-content" for="customRadioIcon2">
                                        <span class="custom-option-body">
                                            <i class="mdi mdi-account-outline"></i>
                                            <span class="custom-option-title"> Personal </span>
                                            <small> Cake sugar plum fruitcake I love sweet roll jelly-o. </small>
                                        </span>
                                        <input name="customRadioIcon" class="form-check-input" type="radio" value=""
                                            id="customRadioIcon2">
                                    </label>
                                </div>
                            </div>
                            <div class="col-md">
                                <div class="form-check custom-option custom-option-icon">
                                    <label class="form-check-label custom-option-content" for="customRadioIcon3">
                                        <span class="custom-option-body">
                                            <i class="mdi mdi-crown-outline"></i>
                                            <span class="custom-option-title"> Enterprise </span>
                                            <small>Cake sugar plum fruitcake I love sweet roll jelly-o.</small>
                                        </span>
                                        <input name="customRadioIcon" class="form-check-input" type="radio" value=""
                                            id="customRadioIcon3">
                                    </label>
                                </div>
                            </div>
                            <button class="btn btn-primary" type="submit">
                                VALIDER
                            </button>
                        </form>

                    </div>
                </div>
            </div>
        </div>

    </div>

</div>


<?php
  require('footer.php');
  ?>