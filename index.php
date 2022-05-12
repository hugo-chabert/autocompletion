<html lang="fr">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="css/style.css" />
    <link rel="stylesheet" type="text/css" href="css/root.css" />
    <script src="js/script.js" type="text/javascript"></script>
    <title>Accueil</title>
</head>

<body>
    <main>
        <div class="container">
            <h1 class="title">AUTOCOMPLETION</h1>
            <form action="pages/recherche.php" method="get">
            <div class="search-container">
                <input type="text" name="search" id="search" placeholder="Rechercher une ville">
                <div class="suggestions">
                    <ul></ul>
                </div>
            </div>
            </form>
        </div>
    </main>
</body>
</html>