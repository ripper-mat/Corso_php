<?php

// scandir("."); è come ls in linea di comando, se al posto del . metto un percorso mi legge quella directory

require("./form_in_php/class/ValidateMail.php");

// elenco di situazioni in cui l'email è sbagliata elenco=array
$emails = [
    'a', '  ', 'a@', 'mario'
];

// classe
$v = new ValidateMail();

//in java v.isValid(), qua: . === ->
foreach ($emails as $index => $email){
    if($v->isValid($email) == false){
        // echo "test superato";
    }else{
        echo "test numero $index non superato per [$email]";
    };

    
    // $v->getMessage();
}
