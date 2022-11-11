<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./asset/styles/style.css">
    <title>Edusogno Log-In</title>
</head>


<body>
<!-- include del Header -->
<?php include __DIR__ . '/includes/header.php' ?>

<div class="main">

<!-- include delle immagini di sfondo -->
<?php include __DIR__ . '/includes/img_bg.php' ?>
    
    <div class="title"><h1>Hai già un account?</h1></div>
        <div class="container">
            <br><br><br>
                <form method="POST" action="log_in.php" >
                    
                    <label for="nome">Inserisci l'email</label> <br><br>
                        <input type="text" name="email" placeholder="name@example.com"> <br> <hr> <br>
                    <label for="nome">Inserisci la password</label> <br><br>
                        <input type="text" name="password" placeholder="Scrivila qui"> <br> <hr> <br>
                    <button type="submit">ACCEDI</button><br><br><br>

                    <div>
                        <a href="index.php">Non hai ancora un profilo? Registrati</a>
                    </div>

                </form>
        </div>

</div> 

</body>
</html>