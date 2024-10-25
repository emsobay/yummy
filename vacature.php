<!DOCTYPE html>
<html lang="nl">
<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible"  content="IE=edge">
        <meta name="description" content="Chilies Galore, vacturen.php">
        <meta name="keywords" content="HTML, Chilies Galore">
        <meta name="author" content="Berko,Walid,Emin">
        <title>Chillies Galore | Vacture</title>
        <link rel="stylesheet" href="css/test.css">
        <style>
            .vacature h2 {
                color: #235D3A;  
            }
        </style>
    </head>
<body>
 
<?php include 'header.php'; ?>
 
<h1>Vacatures bij Restaurant Chilies Galore</h1>
 
 
<main>
        <section class="vacature-container">
            <?php
            // Array van vacatures (hardcoded in PHP)
            $vacatures = [
                [
                    'functie' => 'Chef-kok',
                    'locatie' => 'Amsterdam',
                    'beschrijving' => 'Wij zijn op zoek naar een ervaren chef-kok om ons team te versterken.',
                    'vereisten' => [
                        'Minimaal 5 jaar ervaring als chef-kok.',
                        'Ervaring in de internationale keuken.',
                        'Leiderschap en teammanagement vaardigheden.'
                    ],
                    'email' => 'info@restaurantchilliesgalore.nl'
                ],
                [
                    'functie' => 'Medewerker bediening',
                    'locatie' => 'Amsterdam',
                    'beschrijving' => 'Wij zoeken een enthousiaste medewerker bediening met passie voor de horeca.',
                    'vereisten' => [
                        'Goede communicatieve vaardigheden.',
                        'Minimaal 1 jaar ervaring in een soortgelijke functie.'
                    ],
                    'email' => 'info@restaurantchilliesgalore.nl'
                ],
                [
                    'functie' => 'Sous-chef',
                    'locatie' => 'Amsterdam',
                    'beschrijving' => 'We zoeken een sous-chef met ervaring in het leiden van een keukenbrigade.',
                    'vereisten' => [
                        'Minimaal 3 jaar ervaring als sous-chef.',
                        'Goede teamwerkvaardigheden.'
                    ],
                    'email' => 'info@restaurantchilliesgalore.nl'
                ]
            ];
 
            // Loop door de array en toon de vacatures
            foreach ($vacatures as $vacature) {
                echo "<section class='vacature'>";
                echo "<h2>" . $vacature['functie'] . "</h2>";
                echo "<p>Locatie: " . $vacature['locatie'] . "</p>";
                echo "<p>" . $vacature['beschrijving'] . "</p>";
                echo "<p><strong>Vereisten:</strong></p>";
                echo "<ul>";
                foreach ($vacature['vereisten'] as $vereiste) {
                    echo "<li>" . $vereiste . "</li>";
                }
                echo "</ul>";
                echo "<p><strong>Solliciteren:</strong> Stuur je CV en motivatie naar <a href='mailto:" . $vacature['email'] . "'>" . $vacature['email'] . "</a>.</p>";
                echo "</section>";
            }
            ?>
        </section>
    </main>
 
<?php include 'footer.php'; ?>
 
 
</body>
</html>
 
