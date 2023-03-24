<?php
use crud\UserCRUD;
require "./autoload.php";
require "../config.php";

$users = (new UserCRUD())->read();
// print_r($users);

?>





<?php require "./class/view/head-view.php" ?>


<table class="table">
    
    <tr>
        <th>Nome</th>
        <th>Cognome</th>
        <th>Comune</th>
        <th>Azioni</th>
    </tr>
    <tr>
        <?php foreach ($users as $user) { ?>
            <tr>
            <td><?=$user->first_name?></td>
            <td><?=$user->last_name?></td>
            <td><?=$user->birth_city?></td>
         <td>
            <a href="create-user.php" class="btn btn-primary ">edit</a>
            <button class="btn btn-danger ">delete</button>
        </td>
            </tr>
        <?php } ?>

    </tr>
</table>

<?php require "./class/view/footer-view.php"?>