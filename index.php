<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./asset/styles/style.css">
    <title>Edusogno Home</title>
</head>


<body>
<!-- include del Header -->
<?php include __DIR__ . '/includes/header.php' ?>

<div class="main">

<!-- include delle immagini di sfondo -->
<?php include __DIR__ . '/includes/img_bg.php' ?>
    
    <div class="title"><h1>Crea il tuo account</h1></div>
        <div class="container">

                <form method="POST" action="registrazione.php" >
                    <label for="nome">Inserisci il nome</label> <br><br>
                        <input type="text" name="nome" placeholder="Mario"> <br><hr><br>
                    <label for="cognome">Inserisci il cognome</label> <br><br>
                        <input type="text" name="cognome" placeholder="Rossi"> <br><hr><br>
                    <label for="nome">Inserisci l'email</label> <br><br>
                        <input type="text" name="email" placeholder="name@example.com"> <br><hr><br>
                    <label for="nome">Inserisci la password</label> <br><br>
                        <input type="text" name="password" placeholder="Scrivila qui"> <br><hr><br>
                
                    <button type="submit">REGISTRATI</button><br><br><br>
                    
                    <div>
                        <a href="accedi.php">Hai già un account? Accedi</a>
                    </div>

                </form>

        </div>
</div> 

</body>
</html>