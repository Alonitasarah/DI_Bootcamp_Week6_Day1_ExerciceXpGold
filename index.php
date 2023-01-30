<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1> Execice1 </h1>
<?php
    $longueur = "la nouvelle semaine";
    echo "la longueur de la chaine est ". strlen($longueur);
?>
<h2> Exercice2 </h2>
<?php
$nbre_mots = "le cours sur le backend va commencé";
echo str_word_count($nbre_mots);
?>
<h3> Exercice3 </h3>
<?php
$value = "le cours sur le backend va commencé";
echo  strtoupper($value);
?>
</body>
</html>