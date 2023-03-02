<?php
/*
- [x] Preservare il valore iniziale valido  del campo di testo (mantiiente i dati inseriti nel form in caso di errore)
-visualizzare il messaggio di errore per il singolo campo
- [x] sapere se c'è un errore is valid()
- [x] ripulire e controllare i valori (sicurezza)
- ogni validazione ha il suo messaggio di errore
- impostare la classe di bootstrap is-invalid
*/
class ValidateRequired implements Validable{

    /** @var string rappresenta il valore immesso nel form ripulito da trim e strip */
private $value;
private $message;
private $valid;

public function __construct($default_value='', $message='è obbligatorio')
{
    $this->value = $default_value;
    $this->valid = true;
    $this->message= $message;
}

    public function isValid($value)
    {
        $valueWithoutSpace = trim(strip_tags($value));

        if($valueWithoutSpace==''){
            $this->valid=false;
            return false;
        }
        $this->valid=true;
        $this->value = $valueWithoutSpace;
        return $valueWithoutSpace;
    }

    public function getValue(){
        return $this-> value;
    }
    public function getValid(){
        return $this-> valid;
    }

    public function getMessage()
    {
        return $this->message;
    }
}