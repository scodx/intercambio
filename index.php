<?php

    include_once "config.php";

    $families = array();

    foreach($db->findAll("family", array("passed" => 0)) as $family){
        $families[$family['family']][] = $family;
    }

?><!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <title>Intercambio!</title>
</head>
<body>

<form action="generate.php" method="get">

    <label for="member">Seleccion tu clan-nombre:</label>

    <select name="member" id="member">
    <?php foreach($families as $family => $members){ ?>
        <optgroup label="<?php echo $family ?>">
        <?php foreach($members as $member){ ?>
            <option value="<?php echo $member['idfamily'] ?>"><?php echo $member['name'] ?></option>
        <?php } ?>
        </optgroup>
    <?php } ?>
    </select>
    <br/>
    <input type="submit" value="Enviar"/>
</form>

</body>
</html>