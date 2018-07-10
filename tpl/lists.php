<?php

/*2/ En utilisant un « template » PHP, utiliser la réponse JSON de l’appel AJAX pour afficher la liste des tâches à l’aide d’une boucle (Utilisation de Bootstrap et du composant Thumbnail)
*/
// faire des tests à chaque étape et continuer quand il n'y a plus d'erreur
?>
    <table id="lists">
        <thead>
            <th>Title</th>
            <th>Fait</th>
        </thead>
 
        <?php
        $items = $_POST["items"];

        //var_dump($items);
        foreach($items as $item) {
            ?>
            <tr>
                <td>
                    <?= $item["title"]  ?>
                </td>
                <td>
                    <button class="btn btn-primary fait">
                        <?= $item["fait"]  ?>
                    </button>
                </td>
            </tr>
            <?php
            //var_dump($item);
        } 
        ?>
    
    </table>
