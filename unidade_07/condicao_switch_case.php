<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>
    </head>

    <body>
    <?php
        $dia = "terca";
        switch($dia) {
            case "segunda":
                echo "Hoje ainda é segunda :( <br>";
                break;
            case"quarta":
                echo "Hoje não é sexta, mas está chegando. . . <br>";
                break;
            case "sexta":
                echo "Oba \o/ chegou o grande dia! <br>";
                break;
            default:
                echo "Trabalha ai que está chegando";
        }
    ?>
    </body>
</html>