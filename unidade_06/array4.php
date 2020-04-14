<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>
    </head>

    <body>
        <?php
            $salada = array("Maça","Abacate","Laranja");

            echo "Existe o elemento? " . array_search("Uva",$salada);
        ?>
    </body>
</html>