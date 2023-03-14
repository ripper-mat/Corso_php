<?php


spl_autoload_register(function($className){

echo "\nsto cercando $className\n";

$className= str_replace("\\", "/",$className);
require "./form_in_php/class/".$className.".php";

});

