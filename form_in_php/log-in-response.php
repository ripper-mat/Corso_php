<?php

/*
 $ = è una variabile
 "" = è una stringa
PAROLA = è una costante, constant case(maiusc), tutte le costanti sono globali

*/

filter_input(INPUT_GET, "email", FILTER_VALIDATE_EMAIL);

if($test === false){
    echo "\nla mail nonè valida\n";
}
else{
    echo "grazie la tua email è valida: $test";
}

?>