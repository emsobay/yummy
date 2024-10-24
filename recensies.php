<!-- index.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="author" content="Berko, Walid">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chillies Galore</title>
    <link rel="stylesheet" href="css/test.css">
</head>
<body>

<?php include 'header.php'; ?>

<main class="flex-container">
    <h2 class="title">Recensies van Klanten</h2>

    <h3>Geef uw recensie</h3>
    <form action="submit_review.php" method="POST">
        <div class="form-group">
            <label for="name">Naam:</label>
            <input type="text" id="name" name="name" required>
        </div>
        <div class="form-group">
            <label for="email">E-mail:</label>
            <input type="email" id="email" name="email" required>
        </div>
        <div class="form-group">
            <label for="review">Recensie:</label>
            <textarea id="review" name="review" rows="4" required></textarea>
        </div>
        <button type="submit">Verstuur Recensie</button>
    </form>

    <h3>Recensies van Klanten</h3>
    <div id="reviews-list">
        <?php
      // Databaseverbinding
$conn = new mysqli('localhost', 'root', '', 'chillies_galore'); // Zorg ervoor dat je de juiste database naam gebruikt

// Controleren op verbindingsfouten
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

        // Ophalen van recensies
        $sql = "SELECT name, review FROM reviews ORDER BY id DESC"; // Zorg ervoor dat je een id-kolom hebt
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            // Weergave van recensies
            while($row = $result->fetch_assoc()) {
                echo "<div class='review-item'><strong>" . htmlspecialchars($row['name']) . ":</strong> " . htmlspecialchars($row['review']) . "</div>";
            }
        } else {
            echo "<p>Er zijn nog geen recensies.</p>";
        }

        $conn->close();
        ?>
    </div>
</main>

<?php include 'footer.php'; ?>

</body>
</html>

