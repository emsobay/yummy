<?php
// Databaseverbinding
$conn = new mysqli('localhost', 'root', '', 'chillies_galore'); // Verander de database naam indien nodig

// Controleren op verbindingsfouten
if ($conn->connect_error) {
    die("Verbinding mislukt: " . $conn->connect_error);
}

// Haal de ingevulde gegevens op uit het formulier
$name = $conn->real_escape_string($_POST['name']);
$email = $conn->real_escape_string($_POST['email']);
$review = $conn->real_escape_string($_POST['review']);

// SQL-query om de recensie in de database op te slaan
$sql = "INSERT INTO reviews (name, email, review) VALUES ('$name', '$email', '$review')";

if ($conn->query($sql) === TRUE) {
    echo "Recensie succesvol toegevoegd!";
} else {
    echo "Fout bij het toevoegen van recensie: " . $conn->error;
}

// Sluit de verbinding
$conn->close();

// Terugsturen naar de recensies pagina
header('Location: recensies.php'); // Vervang dit door de naam van je recensiespagina
exit();
?>
