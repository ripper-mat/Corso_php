<?php



spl_autoload_register(function($className){

echo "\nsto cercando $className\n";
require "./form_in_php/class/validator/$className.php";

});

new ValidateMail();
new ValidateDate();
new ValidateRequired();