<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>
    </head>

    <body>
        <?php
        // determinar timezone
            date_default_timezone_set('America/Sao_Paulo');
            $agora = getdate();

        // criar elementos
            $ano = $agora["year"];
            $mes = $agora["mon"];
            $dia = $agora["mday"];

            $hora    = $agora["hours"];
            $minuto  = $agora["minutes"];
            $segundo = $agora["seconds"];
            echo $dia . "/" . $mes . "/" . $ano . " - " . $hora . ":" . $minuto . ":" . $segundo;
        ?>
    </body>
</html>