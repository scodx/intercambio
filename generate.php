<?php

include_once "config.php";

$idfamily     = $_GET['member'];
$member     = $db->find("family", array(
    "idfamily" => $idfamily
));

// Seteamos que este miembro ya pasó
$db->update("family", array(
    "passed" => 1
), array(
    "idfamily" => $idfamily
));
//$db->setDebug(true);
// Seleccionamos los que no sean de la familia del miembre y que no hayan sido seleccionados
$memberToChoose = $db->findAll("family", array(
    "family" => $member['family']
), "*", "!=");


$selected = $memberToChoose[array_rand($memberToChoose)];

//  Seteamos que ya fué seleccionado el que haya sido escogido por el array_rand :)

$db->update("family", array(
    "selected" => 1
), array(
    "idfamily" => $selected['idfamily']
));


?><!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <title>Intercambio!</title>
</head>
<body>

<form action="generate.php" method="get">

    <h4>Te tocó regalar a:</h4>
    <p><em><?php echo $selected['name'] ?></em> del clán: <em><?php echo $selected['family'] ?></em></p>

    <a href="index.php">Regresar</a>

</body>
</html>



















