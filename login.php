<?php
$servername = "localhost";
$username = "login";
$password = "123qwe";
$dbname = "DBLogin";

// Connessione al database
$conn = new mysqli($servername, $username, $password, $dbname);

// Controllo connessione
if ($conn->connect_error) {
    die("Impossibile connettersi: " . $conn->connect_error);
}

// Recupero dati dal form
$email = $_POST["email"];
$pass = $_POST["pass"];

// Query per verificare le credenziali
$stmt = $conn->prepare("SELECT * FROM Dati WHERE email = ? AND pass = ?");
$stmt->bind_param("ss", $email, $pass);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    echo "Tutto corretto";
} else {
    echo "Email o password errati";
}

// Chiudi connessione
$stmt->close();
$conn->close();
?>
