<?php
filter_input(INPUT_GET, "first_name");       
filter_input(INPUT_GET, "last_name");       
filter_input(INPUT_GET, "birthday");       
filter_input(INPUT_GET, "birth_place");       
filter_input(INPUT_GET, "gender");       
filter_input(INPUT_GET, "email");       
filter_input(INPUT_GET, "password");       

echo "<pre>";
print_r($_POST);
echo "</pre>";
?>