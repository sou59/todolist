<?php
require('../App/Entity/Db.php');
use App\Entity\Db;

$db = new Db("localhost", "root", "", "todolist");

// obtenir la liste des tâches
$query = $db->query("SELECT * FROM list");

$lists = $query->fetchAll();

// var_dump($lists); // ne pas laisser afficher sinon cela ne fonctionne pas, cette page ne doit afficher que le JSON

// afficher les résultats au format JSON
$json = json_encode($lists);
echo $json;  // ne pas oublier de l'afficher ! !

?>