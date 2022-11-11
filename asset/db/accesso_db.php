<?php

define("DB_SERVERNAME", 'localhost');
define("DB_USERNAME", "root");
define("DB_PASSWORD", "root");
define("DB_NAME", "edusogno");
define("DB_PORT", 3306);

// Connessione
$conn = new mysqli(DB_SERVERNAME, DB_USERNAME, DB_PASSWORD, DB_NAME, DB_PORT);

if ($conn && $conn->connect_error){
    echo "Connessione non riuscita".$conn->connect_error;
}
else{
    echo ('Connessione riuscita');
}

?>

