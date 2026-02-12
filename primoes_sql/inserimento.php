<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if(isset($_POST["nome"]) && isset($_POST["cognome"])&& isset($_POST["email"])&& isset($_POST["eta"])&& isset($_POST["id_utente"])){
        $nome = $_POST["nome"];
        $email = $_POST["email"];
        $cognome = $_POST["cognome"];
        $eta = $_POST["eta"];
        $id_utente = $_POST["id_utente"];


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
$sql = "INSERT INTO utente(id_utente, nome, cognome, email, eta)
        VALUES ($id_utente, '$nome', '$cognome', '$email', $eta)";
if (mysqli_query($conn, $sql)) {
    echo "Dati inseriti correttamente";
 } else {
    echo "Errore: " . mysqli_error($conn);
 }
 mysqli_close($conn);
?>
