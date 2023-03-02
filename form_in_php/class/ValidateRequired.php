<?php

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