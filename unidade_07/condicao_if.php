<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>
    </head>

    <body>
    <?php
        $a = 5;
        $b = 3;

        if ( $a > $b ) {
            echo "A é maior do que B " . "<br>";
            echo "Va para a pagina de clientes." . "<br>";
        }

        $fumante = true;
        if ( !$fumante ) {
            echo "Não poderá entrar ";
        }
    ?>
    </body>
</html>