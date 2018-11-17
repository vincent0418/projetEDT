<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="css/index.css">
    <title>
        Emploi du temps
    </title>
</head>

<body>
    <header>
        <img src="img/IUT-Montpellier.png" alt="logo">
        <div>
          Logiciel d'emploi du temps
        </div>
    </header>
    <main>
        <script src="js/dragDrop.js"></script>
        <script src="js/newLesson.js"></script>
        <aside>
            <div>
                Selection groupe
            </div>
            <?php
                $filepath = File::build_path(array("view", $controller, "$view.php"));
                require $filepath;
            ?>
        </aside>

        <article>
            <?php
                $filepath = File::build_path(array("view", $controller, "read.php"));
                require $filepath;
            ?>
        </article>
    </main>
    <footer>
        © IUT Montpellier. Tous droits réservés.
    </footer>
</body>

</html>
