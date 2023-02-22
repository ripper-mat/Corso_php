<?php

$first_name = filter_input(INPUT_POST, "first_name");
$last_name = filter_input(INPUT_POST, "last_name");
// null se non passo da form | errore o campo obbligatorio
var_dump($first_name);
// var_dump è cugino di print_r
print_r($_POST);


// se compilato restituisce una stringa
// whitespace char restituisce una stringa | campo obbligatorio
//se non compilo | campo obbligatorio
// 








?>