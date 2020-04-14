<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>
    </head>

    <body>
        <?php
            $agenda = array(
                "nome" => "José",
                "sobrenome" => "Silva",
                "salário" => 1000,
                "aniversário" => "03/08/1990"
            );

            foreach ($agenda as $atributo => $valor){
                echo $atributo . ": " . $valor . "<br>";
            }

        ?>
    </body>
</html>