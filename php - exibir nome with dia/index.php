<?php

function heloo($name)
{
    if (date("G") - 3 < 12) {
        $momento = "Bom Dia";
    } else if (date("G") - 3 < 18) {
        $momento = "Boa Tarde";
    } else {
        $momento = "Boa Noite";
    }

    return $momento . ", é um prazer a(o) ter por aqui " . $name;

};

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="php - exibir nome with dia/style.css">
</head>
<body>
    
   <?php echo "<h1>" .heloo("Castro dos Santos Marcelo") ."</h1>";?>

</body>
</html>