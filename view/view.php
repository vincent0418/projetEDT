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
        <aside>
            <div>
                Selection groupe
            </div>
            <div>
                <?php
                $filepath = File::build_path(array("view", $controller, "$view.php"));
                require $filepath;

                $tab_lesson = ModelLesson::getNewLessonByGroup('Q1');
                if($tab_lesson) {
                    $size = sizeof($tab_lesson);
                    if($size > 1) {
                        for($i = 0; $i < $size - 1; $i++)
                            ModelLesson::delete($tab_lesson[$i]['idLesson']);
                    }
                    $duration = $tab_lesson[$size-1]['duration'] * 7;
                    echo "<div id=\"{$tab_lesson[$size-1]['idLesson']}\" style=\"height:{$duration}vh\" draggable=\"true\" ondragstart=\"drag(event)\">
                              <p>{$tab_lesson[$size-1]['idSubject']}</p>
                              <p>{$tab_lesson[$size-1]['idRoom']}</p>
                              <p>{$tab_lesson[$size-1]['idTeacher']}</p>
                          </div>";
                }
                ?>
            </div>
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
