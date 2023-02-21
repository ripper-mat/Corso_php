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
            <form class="mt-1 mt-md-5" action="register-user.php" method="post">
                <div class="mb-3">
                    <label for="first_name" class="form-label">Name</label>
                    <input type="text" name="first_name" id="first_name" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="last_name" class="form-label">Last name</label>
                    <input type="text" name="last_name" id="last_name" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="birthday" class="form-label">Date of birth</label>
                    <input type="date" name="birthday" id="birthday" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="birth_place" class="form-label">Place of birth</label>
                    <input type="text" name="birth_place" id="birth_place" class="form-control">
                </div>
                <div class="mb-3">
                    <p>Gender</p>
                    <input type="radio" id="male" name="gender" value="male" checked="checked">
                    <label for="male">M</label><br>
                    <input type="radio" id="female" name="gender" value="female">
                    <label for="female">F</label><br>
                    
                </div>
                <div class="mb-3">
                     <label for="email" class="form-label">E-mail</label>
                     <input type="email" class="form-control" name="email" id="email">
                </div> 
                <div class="mb-3">
                     <label for="password" class="form-label">Password</label>
                     <input type="password" name="password" id="password" class="form-control">
                </div>
                <button class="btn btn-primary btn-m"  type="submit"> Register </button>
             </form>
        </div>
</body>
</html>