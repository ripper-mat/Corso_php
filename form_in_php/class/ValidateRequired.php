<?php

class ValidateRequired{

    public function isValid(string $value)
    {
        $valueWithoutSpace = trim(strip_tags($value));
        if($valueWithoutSpace==''){
            return false;
        }

        return $valueWithoutSpace;
    }
}