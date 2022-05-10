<?php
$nomVille = isset($_GET['ville'])? strip_tags($_GET['ville']) :'';
$bdd = new PDO("mysql:host=localhost;dbname=autocompletion",'root','root');
$bdd->setAttribute(PDO::ATTR_ERRMODE , PDO::ERRMODE_EXCEPTION);
$bdd->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);


$sql = "SELECT * FROM villes WHERE nom LIKE '$nomVille%' ORDER BY id DESC";
$result = $bdd->prepare($sql);
$result->execute();
$results = $result->fetchAll();
?>