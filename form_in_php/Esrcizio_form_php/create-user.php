<?php

// Gestione degli errori
// error reportin accetta un intero, un codice per ogni tipo di errore, hanno anche dei nomi (E_ALL visualizza tutti gli errori)
error_reporting(0);

 require "../class/Validable.php";
 require "../class/ValidateRequired.php";


 $validatorName = new ValidateRequired('', 'Il nome è obbligatorio');

 // per capire se sulla pagina web sono in get oppure in post
// print_r($_SERVER['REQUEST_METHOD']);
if($_SERVER['REQUEST_METHOD'] === 'POST'){
//   echo "dati inviati adesso li devo controllare";
// evitare di prendere i dati direttamente dal post, usare filter_inputoppure filter_var che ha già dei controlli
    // $first_name = $_POST['first_name'];
    // filter_var($first_name);

$validatorLastName = new ValidateRequired();
$validatorBirthday = new ValidateRequired();
$validatorBirthPlace = new ValidateRequired();
$validatorEmail = new ValidateRequired();
$validatorPassword = new ValidateRequired();
$validatedName = $validatorName->isValid($_POST['first_name']);
$validatedLastName = $validatorLastName->isValid($_POST['last_name']);
$validatedBirthday = $validatorBirthday->isValid($_POST['birthday']);
$validatedBirthPlace = $validatorBirthPlace->isValid($_POST['birth_place']);
$validatedEmail = $validatorEmail->isValid($_POST['email']);
$validatedPassword = $validatorPassword->isValid($_POST['password']);
//operatore ternario è uguale a un if
$isValidNameClass = $validatorName->isValid($_POST['first_name']) ? '' : 'is-invalid';
$isValidLastNameClass = $validatorLastName->isValid($_POST['last_name']) ? '' : 'is-invalid';
$isValidBirthdayClass = $validatorBirthday->isValid($_POST['birthday']) ? '' : 'is-invalid';
$isValidBirthPlaceClass = $validatedBirthPlace ? '' : 'is-invalid';
$isValidEmailClass = $validatedEmail ? '' : 'is-invalid';
$isValidPasswordClass = $validatedPassword ? '' : 'is-invalid';

$validatorGender = new ValidateRequired();
// $gender = !isset($_POST['gender']) ? '' : $_POST['gender'];
// $validatedGender = $gender->isValid($_POST['gender']) ? '' : $_POST['gender'];


}else{
    echo "l' utente deve ancora copmpilare il form";
};

// come associo la validazione a un campo / input / controllo ?
/*
first_name -> required
birthday -> required | validDate
*/

if($_SERVER['REQUEST_METHOD'] === 'GET'){
    $isValidNameClass='';
    $isValidLastNameClass='';
}

?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create user</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

</head>
<body>
    <!-- Form di registrazione

Nome first_name
Cognome last_name
Data di nascita birthday
Luogo di nascita birth_place
Sesso gender

username/email
password-->


<header class="bg-light p-1">
        <h1 class="display-6">New user</h1>
</header>

<section class="row">
        <div class="col-sm-4">

        </div>
        <div class="col-sm-4">
            <!-- mettendo in action lo stesso file in cui c'è il form rimando i dati alla pagina stessa -->
            <!-- ci dovrà essere uno script all'interno della pagina, non solo html -->
            <form class="mt-1 mt-md-5" action="create-user.php" method="post">
                <div class="mb-3">
                    <label for="first_name" class="form-label">Name</label>
                    <input class="form-control <?php !$validatorName->getValid() ? 'is-invalid': ''?>" 
                    type="text" 
                    name="first_name" 
                    id="first_name" 
                    value="<?= $validatorName->getValue()?> ">
                   <?php
                //    isset serve a controllare se la variabile che uso non da errore, se esiste la usa
                // Nel GET sarà fals eperchè non c'è nessun nome
                // Nel POST se il nome è corretto sarà validato e la variabile sarà true
                   if($validatorName->getValid()){
                       ?>
                    <div class="invalid-feedback">
                        <? echo $validatorName->getMessage()?></div>
                    <?php
                    //echo "il nome è obbligatorio";
                   }
                   ?>
                </div>

                <div class="mb-3">
                    <label for="last_name" class="form-label">Last name</label>
                    <input type="text" name="last_name" id="last_name" class="form-control <?php echo $isValidLastNameClass?>">
                   <?php
                    if(isset($validatedLastName) && !$validatedLastName){
                       ?>
                    <div class="invalid-feedback">il cognome è obbligatorio</div>
                    <?php
                   }
                   ?>

                </div>
                <div class="mb-3">
                    <label for="birthday" class="form-label">Date of birth</label>
                    <input type="date" name="birthday" id="birthday" class="form-control <?php echo $isValidBirthdayClass?>">
                    <?php
                    if(isset($validatedBirthPlace) && !$validatedBirthPlace){
                       ?>
                    <div class="invalid-feedback">la data di nascita è obbligatoria</div>
                    <?php
                   }
                   ?>
                    
                   
                </div>
                <div class="mb-3">
                    <label for="birth_place" class="form-label">Place of birth</label>
                    <input type="text" name="birth_place" id="birth_place" class="form-control <?php echo $isValidBirthPlaceClass?>">
                    <?php
                    if(isset($validatedBirthPlace) && !$validatedBirthPlace){
                       ?>
                    <div class="invalid-feedback">il luogo di nascita è obbligatorio</div>
                    <?php
                   }
                   ?>
                </div>
                <div class="mb-3">
                    <span>Gender</span>
                    <div class="form-check">
                        <input class="form-check-input <?php !$validatedGender ? 'is-invalid': ''?>" type="radio" id="male" name="gender" value="male">
                        <label class="form-check-label" for="male">M</label><br>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input <?php !$validatedGender ? 'is-invalid': ''?>" type="radio" id="female" name="gender" value="female">
                        <label class="form-check-label" for="female">F</label><br>
                    </div>
                    <?php 
                    if(!$validatedGender): ?>
                    <div class="invalid-feedback">selezionare un genere</div>
                    <?php endif ?>
                    
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">E-mail</label>
                    <input type="email" class="form-control <?php echo $isValidEmailClass?>" name="email" id="email" value="<?php echo $_POST['email']?>">
                    <?php
                    if(isset($validatedEmail) && !$validatedEmail){
                       ?>
                    <div class="invalid-feedback">email obbligatoria</div>
                    <?php
                   }
                   ?>
                    
                </div> 
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" name="password" id="password" class="form-control <?php echo $isValidPasswordClass?>" value="<?php echo $_POST['password']?>">
                   <?php
                    if(isset($validatedEmail) && !$validatedEmail){
                       ?>
                    <div class="invalid-feedback">password obbligatoria</div>
                    <?php
                   }
                   ?>
                    
                </div>
                <button class="btn btn-primary btn-m"  type="submit"> Register </button>
             </form>
        </div>
</body>
</html>