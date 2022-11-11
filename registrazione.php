<?php

include __DIR__ . "./asset/db/accesso_db.php";

if ($_SERVER['REQUEST_METHOD'] !== "POST"){
    die("Suca");
}

$nome = $_POST['nome'];
$cognome = $_POST['cognome'];
$email = $_POST['email'];
$password = $_POST['password'];

$sql = "INSERT INTO utenti (nome, cognome, email, password) VALUES ('$nome', '$cognome', '$email', '$password')";

// $success = $stmt->bind_param("ssss", $nome, $cognome, $email, $password);

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
}
else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
};

//  $stmt->execute();

$conn->close();
?>