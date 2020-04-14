<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>
    </head>

    <body>
        <?php
            $salario = 800;
            $premio = "800";

            if ( $salario === $premio ) {
                echo "Salario é idêntico a prêmio.";
            } else {
                echo "Salario não é idêntico a Prêmio.";
            }
        ?>
    </body>
</html>