<?php
    $lost = array(23,15,16,8,42,4);
?>

<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>
    </head>

    <body>
        <?php
            echo max($lost) . "<br>";
            echo min($lost) . "<br>";
            echo array_sum($lost) . "<br>";

            shuffle($lost);
        ?>

        <pre>
            <?php
                print_r($lost);
            ?>
        </pre>
    </body>
</html>