<?php
/*
-Preservare il valore iniziale valido del campo di testo (mantiiente i dati inseriti nel form in caso di errore)
-visualizzare il messaggio di errore per il singolo campo
-sapere se c'è un errore is valid()
-ripulire e controllare i valori (sicurezza)
-ogni validazione ha il suo messaggio di errore
-impostare la classe di bootstrap is-invalid
*/
class ValidateRequired implements Validable{

    public function isValid($value)
    {
        $valueWithoutSpace = trim(strip_tags($value));
        if($valueWithoutSpace==''){
            return false;
        }

        return $valueWithoutSpace;
    }

    public function message()
    {
        return 'campo non valido';
    }
}