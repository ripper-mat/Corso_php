<?php

class ValidateDate implements Validable{

    public function isValid($value){
        $trimmedValue = trim(strip_tags($value));
        $date = DateTime::createFromFormat('d/m/Y',$trimmedValue);
        if($date && $date->format('d/m/Y') === $trimmedValue){
            return $date ->format('d/m/Y');
        }else{
            return false;
        };
    }

    public function getMessage()
    {
        return 'data non valida';
    }




}