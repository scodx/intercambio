<?php


include_once "config.php";


$groups = Array(

    "Sánchez León" => Array(
        "Oscar",
        "Esthercita",
    ),

    "Sánchez Cruz" => Array(
        "Lusha",
        "Abimael",
        "Gibrán",
    ),

    "Sánchez Lucero" => Array(
        "Victor Octavio",
        "Lucero",
    ),

    "Betanzos Sánchez" => Array(
        "Victor Hugo",
        "Samantha",
        "Hugo Alexis",
        "Emiliano",
        "Mariano",
    ),

    "Sánchez Garduza" => Array(
        "Samuel",
        "Juany",
        "Samuelito",
        "Claudio",
    ),

    "Sánchez López" => Array(
        "Rommel",
        "Ruth",
        "Paloma",
        "Gabrielle",
    ),

);

$db->delete("family", array("1" => "1"));

echo "<pre>";


foreach($groups as $family => $items){
    foreach($items as $name){

        print_r(
            $db->insert("family" ,array(
                "name" => $name,
                "family" => $family,
            ))
        );

    }
}

echo "</pre>";






















