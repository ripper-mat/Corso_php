<h1>Sono la risposta (RESPONSE)</h1>


<?php
// pre serve a impaginare l'array
echo "<pre>";
echo "get:";
print_r($_GET);
echo "post:";
print_r($_POST);
echo "</pre>";

echo "La tua email  è <br>";
echo "<strong>".$_POST["email"]."</strong>";





?>