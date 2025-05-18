<html>
    <head>
            <title>SignUp</title>
            <link rel="stylesheet" href="stile.css">
    </head>
<body>
    
<div class="menu">
    <p>Menu</p>
    <p><a href="chisiamo.html">Chi Siamo </a></p>
    <p><a href="sbadabim.html"><b>Sbadabim</b> </a></p>
    <p> <a href="signup.html">Sign Up</a></p>
    <p> <a href="signin.html">Sign In </a></p>
</div>
<hr>

<?php
	$servername = "localhost";
	$username = "login";
	$password = "123qwe";
	$dbname = "DBLogin";
// Create connection
$conn = new mysqli($servername, $username, $password,$dbname);

// Check connection
if ($conn->connect_error) {
  echo("Impossibile connettersi: " . $conn->connect_error ."\n");
  exit();
}

/* echo"conn"; */

$nome=$_POST["nome"];
$cognome=$_POST["cognome"];
$email=$_POST["email"];
$sesso=$_POST["sesso"];
$pass=$_POST["pass"];
$sql = 'INSERT INTO Dati (nome, cognome,email,sesso,pass) VALUES ("' . $nome . '","' . $cognome . '","' . $email . '","' . $sesso .'","' . $pass .'")';

if ($conn->query($sql) === TRUE) {
	/*echo"dati registrati con successo";*/
} else {
    echo "Errore: " . $sql . "<br>" . $conn->error;
}

?>

</body>
</html>
