<?php

include __DIR__ . "./asset/db/accesso_db.php";

if ($_SERVER['REQUEST_METHOD'] !== "POST"){
    die("Suca");
}

// Variabili in entrata
$email = $_POST['email'];
// echo (' ' . $email);
$password = $_POST['password'];
// echo (' ' . $password);

$query = "SELECT * FROM `utenti`";
$result = $conn->query($query);

if (!$result){
    echo "Si è verificato un errore";
    exit;
};

//Prepariamo un array dove inserire i nostri dati
$utenti = [];

// Controlliamo che ci sia almeno un dato nella nostra ricerca
if ($result && $result->num_rows > 0){
    
    while($utente = $result->fetch_assoc())
    {
// Carichiamo l'array
        $utenti[] = $utente;
    }
};

for ($i = 0; $i <= count($utenti); $i++)
{
    $a = $utenti[$i]['email'];
    $b = $utenti[$i]['password'];
    $c = $utenti[$i]['id'];
    if($a == $email && $b == $password){
        header('location: eventi.php');
        break;
    }
    else{
        header('location: no_log.php');
    }

};

?>