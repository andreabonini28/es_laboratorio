<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if(isset($_POST["password"]) &&  isset($_POST["email"])){
        $password = $_POST["password"];
        $email = $_POST["email"];
      }
}
$host = "localhost";
$db = "biblioteca";
$user = "root";
$psw = "";
$conn = new mysqli($host, $user, $psw, $db);
if ($conn->connect_error) {
     die("Errore di connessione: " . $conn->connect_error);
     }
$sql = "select id_utente from utente where email = $email AND password = $password";
$risultato = "";
if ($result->num_rows > 0) {

    while($row = $result->fetch_assoc()) {
        $risultato += 'id: "'. $row["id"]. '" - Name: "'. $row["firstname"]. '" "' . $row["lastname"] . '"<br>"';
    }
} else {
    echo "0 results";
}







?>