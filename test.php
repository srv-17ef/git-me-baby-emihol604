<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php

$antalElefanter = 1;
$text = "han";
$elefant = "elefant";

//while ($antalElefanter <= 100) {
//    if ($antalElefanter == 1) {
//        $text = "han";
//    }
//    if ($antalElefanter != 1) {
//        $text = "de";
//        $elefant = "elefanter";
//    }
//    echo $antalElefanter." ". $elefant."  balanserade<br>
//    på en liten spindel-tråd<br>
//    Det tyckte " . $text . " var så intressant,<br>
//    så " . $text . " gick och hämtade en annan elefant.<br><br>";
//    $antalElefanter++;
//}

for ($i = 1; $i <= 100; $i++) {
    if ($antalElefanter == 1) {
        $text = "han";
    }
    if ($antalElefanter != 1) {
        $text = "de";
        $elefant = "elefanter";
    }
    echo $antalElefanter." ". $elefant."  balanserade<br>
    på en liten spindel-tråd<br>
    Det tyckte " . $text . " var så intressant,<br>
    så " . $text . " gick och hämtade en annan elefant.<br><br>";
    $antalElefanter++;
}

?>
</body>
</html>
