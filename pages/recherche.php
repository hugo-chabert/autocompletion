<?php
$nomVille = isset($_GET['search'])? strip_tags($_GET['search']) :'';
$bdd = new PDO("mysql:host=localhost;dbname=autocompletion",'root','root');
$bdd->setAttribute(PDO::ATTR_ERRMODE , PDO::ERRMODE_EXCEPTION);
$bdd->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);


$sql = "SELECT * FROM villes WHERE nom LIKE '%$nomVille%' ORDER BY id DESC";
$result = $bdd->prepare($sql);
$result->execute();
$villes = $result->fetchAll();
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <script src="../js/header.js" type="text/javascript"></script>
    <title>Recherche</title>
</head>
<body>
    <?php
    require_once 'header.php';
        if(isset($nomVille)){
            foreach($villes as $v): ?>
            <div>
                <a href="element.php?id=<?= $v['id']?>"> <?= $v['nom']; ?></a><br>
            </div>
            <?php endforeach;
        } ?>
    </main>
</body>
</html>