<?php
require_once("db.php");

$db = new Db("localhost", "root", "", "todolist");

// obtenir la liste des tâches

$sql = "SELECT * FROM list";

$query = $db->query($sql);

$lists = $query->fetchAll(PDO::FETCH_ASSOC);


// var_dump($lists); // ne pas laisser afficher sinon cela ne fonctionne pas, cette page ne doit afficher que le JSON

// afficher les résultats au format JSON
$json = json_encode($lists);
echo $json;  // ne pas oublier de l'afficher ! !



// $sql = "INSERT * INTO list";

// $query = $db->query($sql);

// $list = $query->fetch(PDO::FETCH_ASSOC);


?>