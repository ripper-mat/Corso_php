<?php
filter_input(INPUT_POST, "first_name");       
filter_input(INPUT_POST, "last_name");       
filter_input(INPUT_POST, "birthday");       
filter_input(INPUT_POST, "birth_place");       
filter_input(INPUT_POST, "gender");       
// filter_input(INPUT_POST, "email", FILTER_VALIDATE_EMAIL);       
filter_input(INPUT_POST, "password");  

if (!filter_input(INPUT_POST, "email", FILTER_VALIDATE_EMAIL)) {
        echo("Email is not valid");
    } else {
        echo("Email is valid");
    }

echo "<pre>";
print_r($_POST);
echo "</pre>";
?>