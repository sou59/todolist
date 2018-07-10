<?php
require('../App/Entity/db.php');
use App\Entity\Db;

    if(!empty($_POST['title'])){

        $title = $_POST["title"];
        
        $db = new Db("localhost", "root", "", "todolist");
        $result = $db->execute('INSERT INTO list (title) VALUES ("'.$title.'")');
        
        if ($result) { // On s'assure que la requête s'est bien déroulée

            echo '<div class="alerte alert-sucess">La tâche a bien été ajoutée</div>';
        } 
        
    }
     

?>