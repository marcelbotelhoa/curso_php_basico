<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>
    </head>

    <body>
        <?php

            for($contador = 1; ; $contador++) {
                if ($contador == 7) {
                    break;
                }
                echo rand(1,60) . "  ";
            }
        ?>
    </body>
</html>