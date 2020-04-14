<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>
    </head>

    <body>
        <?php
            $dia = "sábado";

            if ( $dia == "sábado" || $dia == "domingo" ) {
                echo "Dia de descansar";
            } else {
                echo "Dia de trabalhar";
            }
        ?>
    </body>
</html>