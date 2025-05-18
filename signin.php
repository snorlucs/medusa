<html>
    <head>
            <title>>SignIn</title>
	    <link rel="stylesheet" href="stilesign.css">
            <link rel="stylesheet" href="stile.css">
    </head>
<body background="scaricare-immagini-gratis.jpg">

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

$nome=$_POST["nome"];
$cognome=$_POST["cognome"];
$email=$_POST["email"];
$sesso=$_POST["sesso"];
$pass=$_POST["pass"];

$email = $pass = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $email = $_POST["email"]);
  $pass = $_POST["pass"]);
}

/*function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
} */
?>

<div>
    <form class="menu-form" method="post" action="<?php echo ($_SERVER["PHP_SELF"]);?>">
        <label for="email">Email:</label><br>
        <input type="email" name="email"><br>
        <label for="pass">Password:</label><br>
        <input type="password" name="pass"><br>
        <button type= "button">Accedi</button>

</form>
</div>


</body>
</html>
