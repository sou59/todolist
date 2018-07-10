<?php
require('../App/Entity/Db.php');
use App\Entity\Db;

$db = new Db("localhost", "root", "", "todolist");

// Modifier une tâche
$fait = $db->execute("UPDATE list SET id='".$id."', title='".$title."', fait='".$fait."' WHERE 1");
// UPDATE `list` SET `id`=[value-1],`title`=[value-2],`fait`=[value-3] WHERE 1

// var_dump($fait); // ne pas laisser afficher sinon cela ne fonctionne pas, cette page ne doit afficher que le JSON

// afficher les résultats au format JSON
$json = json_encode($fait);
echo $json;  // ne pas oublier de l'afficher ! !

?>