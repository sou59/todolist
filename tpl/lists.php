<?php

/*2/ En utilisant un « template » PHP, utiliser la réponse JSON de l’appel AJAX pour afficher la liste des films à l’aide d’une boucle (Utilisation de Bootstrap et du composant Thumbnail)
*/
// faire des tests à chaque étape et continuer quand il n'y a plus d'erreur
    $items = $_POST["items"];

    //var_dump($items);

    // utilisation du Custom content thumbnails de bootstrap 3 sans le bouton et l'image
        foreach($items as $item) {
            ?>

            <div class="row">
                <div class="col-sm-6 col-md-4">
                    <div class="thumbnail">
                        <div class="caption">
                            <h3><?=$item["title"]  ?></h3>
                            <button class="btn btn-primary" id="fait"><?=$item["fait"]  ?></button>
                            <hr>
                        </div>
                    </div>
                </div>
                </div>
        <?php
        var_dump($_POST['title']);
        } 
        ?>
            
        </div>

    </div>