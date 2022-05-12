<?php
    $pdo = new PDO('mysql:host=localhost;dbname=hugo-chabert_autocompletion;charset=utf8', 'HC-auto', 'autocompletion', [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
    ]);
    $nomVille = isset($_POST['search'])? strip_tags($_POST['search']) :'';

    $query = $pdo->prepare("SELECT * FROM villes WHERE nom LIKE '%$nomVille%' ORDER BY id DESC");
    $query->setFetchMode(\PDO::FETCH_ASSOC);
    $query->execute();
    $user=$query->fetchall();
    echo json_encode($user);
?>