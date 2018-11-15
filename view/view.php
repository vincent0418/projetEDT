<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="css/index.css">
    <title>
        <?php echo $pagetitle; ?>
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
            <div id="hour">
                <p></p>
                <p>8h</p>
                <p>9h</p>
                <p>10h</p>
                <p>11h</p>
                <p>12h</p>
                <p>13h</p>
                <p>14h</p>
                <p>15h</p>
                <p>16h</p>
                <p>17h</p>
                <p>18h</p>
                <p>19h</p>
            </div>

            <div id="lundi" ondrop="drop(event)" ondragover="allowDrop(event)">
                <p>Lundi</p>
            </div>

            <div id="mardi" ondrop="drop(event)" ondragover="allowDrop(event)">
                <p>Mardi</p>
            </div>

            <div id="mercredi" ondrop="drop(event)" ondragover="allowDrop(event)">
                <p>Mercredi</p>
            </div>

            <div id="jeudi" ondrop="drop(event)" ondragover="allowDrop(event)">
                <p>Jeudi</p>
            </div>

            <div id="vendredi" ondrop="drop(event)" ondragover="allowDrop(event)">
                <p>Vendredi</p>
            </div>

            <div id="samedi" ondrop="drop(event)" ondragover="allowDrop(event)">
                <p>Samedi</p>
            </div>
        </article>
    </main>
    <footer>
        © IUT Montpellier. Tous droits réservés.
    </footer>
</body>

</html>
