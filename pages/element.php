<?php
$idVille = isset($_GET['id'])? strip_tags($_GET['id']) :'';
$bdd = new PDO("mysql:host=localhost;dbname=hugo-chabert_autocompletion",'HC-auto','autocompletion');
$bdd->setAttribute(PDO::ATTR_ERRMODE , PDO::ERRMODE_EXCEPTION);
$bdd->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);


$sql = "SELECT * FROM villes WHERE id = '$idVille'";
$result = $bdd->prepare($sql);
$result->execute();
$villes = $result->fetchAll();

?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <script src="../js/header.js" type="text/javascript"></script>
    <link rel="stylesheet" type="text/css" href="../css/element.css" />
    <link rel="stylesheet" type="text/css" href="../css/root.css" />
    <title>Element</title>
</head>
<body>
    <?php
    require_once 'header.php';?>
    <main><?php
        if(isset($idVille)){
            foreach($villes as $v): ?>
            <div class="container-element">
                <h1>This is <?= $v['nom'] ?></h1>
            </div>
            <?php endforeach;
        } ?>
    </main>
</body>
</html>