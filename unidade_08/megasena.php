<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>
    </head>

    <body>
    <?php
        $megasena = array();
        $contador = 1;

        while ( $contador < 7 ) {
            $sorteio = rand(1,60);
            if ( !in_array($sorteio,$megasena ) ) {
                $megasena[] = $sorteio;
                $contador++;
            }
        }

        sort($megasena);
    ?>

    <pre>
        <?php print_r($megasena)?>
    </pre>
    </body>
</html>