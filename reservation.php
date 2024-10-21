<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Berko, Walid, Emin">
    <title>Chillies Galore | Reservering</title>
    <link rel="stylesheet" href="css/test.css">
</head>
<body>
    <header>
        <h1>Chillies Galore</h1>
        <nav>
            <ul>
                <li><a href="index.html">Home</a></li>
                <li><a href="menu.html">Menu</a></li>
                <li><a href="gallery.html">Gallery</a></li>
                <li><a href="about.html">About Us</a></li>
                <li><a href="reservation.php">Reserveren</a></li>
            </ul>
        </nav>
    </header>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Ontvang de gegevens uit het formulier
        $firstName = htmlspecialchars($_POST['first_name']);
        $middleName = htmlspecialchars($_POST['middle_name']);
        $lastName = htmlspecialchars($_POST['last_name']);
        $phoneNumber = htmlspecialchars($_POST['phone_number']);
        $email = htmlspecialchars($_POST['email']);
        $people = htmlspecialchars($_POST['people']);
        $reservationDate = htmlspecialchars($_POST['reservation_date']);
        $reservationTime = htmlspecialchars($_POST['reservation_time']);

        // Toon een bevestigingsbericht aan de gebruiker
        echo "<h2>Bedankt voor uw reservering!</h2>";
        echo "<p>Naam: $firstName $middleName $lastName</p>";
        echo "<p>Telefoonnummer: $phoneNumber</p>";
        echo "<p>Emailadres: $email</p>";
        echo "<p>Datum: $reservationDate</p>";
        echo "<p>Tijd: $reservationTime</p>";
        echo "<p>Aantal personen: $people</p>";

        // Stuur een automatische e-mail naar de klant
        $to = $email;
        $subject = "Bevestiging van uw reservering";
        $message = "Bedankt voor uw reservering bij Chillies Galore!\n\nDetails:\nNaam: $firstName $middleName $lastName\nTelefoonnummer: $phoneNumber\nEmailadres: $email\nDatum: $reservationDate\nTijd: $reservationTime\nAantal personen: $people";
        $headers = "From: no-reply@chilliesgalore.com";

        mail($to, $subject, $message, $headers);
    } else {
    ?>

    <main>
        <h2>Reserveringsformulier</h2>
        <form action="reservation.php" method="POST" id="reservationForm">
            <div class="form-group">
                <label for="first_name">Voornaam:</label>
                <input type="text" id="first_name" name="first_name" required>
            </div>
            <div class="form-group">
                <label for="middle_name">Tussenvoegsel:</label>
                <input type="text" id="middle_name" name="middle_name">
            </div>
            <div class="form-group">
                <label for="last_name">Achternaam:</label>
                <input type="text" id="last_name" name="last_name" required>
            </div>
            <div class="form-group">
                <label for="phone_number">Telefoonnummer:</label>
                <input type="tel" id="phone_number" name="phone_number" required>
            </div>
            <div class="form-group">
                <label for="email">Emailadres:</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="people">Aantal personen:</label>
                <input type="number" id="people" name="people" required min="1">
            </div>
            <div class="form-group">
                <label for="reservation_date">Datum:</label>
                <input type="date" id="reservation_date" name="reservation_date" required>
            </div>
            <div class="form-group">
                <label for="reservation_time">Tijd:</label>
                <input type="time" id="reservation_time" name="reservation_time" required>
            </div>
            <div class="form-group">
                <input type="checkbox" id="privacy" name="privacy" required>
                <label for="privacy">Ik ga akkoord met de privacyverklaring.</label>
            </div>
            <button type="submit">Reserveer nu</button>
        </form>
    </main>

    <?php
    }
    ?>

    <footer>
        <p>&copy; 2024 Chillies Galore</p>
    </footer>
</body>
</html>
