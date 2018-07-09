<?php
require('../App/Entity/db.php');

    $title = $_POST["title"];

	if(!empty($_POST['title'])){

        $result = $db->execute('INSERT INTO list (title) VALUES ("$title")');
        
        if ($result) { // On s'assure que la requête s'est bien déroulée

            echo '<div class="alerte alert-sucess">La tâche a bien été ajoutée</div>';
        } 
        
    }
    

?>