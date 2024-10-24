<!DOCTYPE html>
<html lang="nl">
<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible"  content="IE=edge">
        <meta name="description" content="Chilies Galore, arrangementen.html">
        <meta name="keywords" content="HTML, Chilies Galore">
        <meta name="author" content="Berko,Walid,Emin">
        <title>Chillies Galore | Arrangementen</title>
        <link rel="stylesheet" href="css/test.css">
    </head>
<body>
 
<?php include 'header.php'; ?>
 
<h1>Onze Arrangementen</h1>
<main>
        <section class="arrangementen-container">
            <?php
            // Array van arrangementen met gerechten en dranken
 
            $arrangementen = [
                [
                    "titel" => "Shared Dining",
                    "beschrijving" => "Geniet van een gezamenlijke eetervaring met een verscheidenheid aan gerechten en dranken.",
                    "prijs" => "€29,99",
                    "gerechten" => [
                        [
                            "naam" => "Carne Asada Tacos",
                            "beschrijving" => "Gegrild gemarineerd rundvlees, koriander, uien en limoen. Geserveerd met salsa.",
                            "prijs" => "$10.99"
                        ],
                        [
                            "naam" => "Al Pastor Tacos",
                            "beschrijving" => "Kruidige gemarineerde varkensvlees met ananas, koriander en uien.",
                            "prijs" => "$9.99"
                        ],
                        [
                            "naam" => "Fish Tacos",
                            "beschrijving" => "Knapperige gefrituurde vis, kool slaw en chipotle mayo op een maïstortilla.",
                            "prijs" => "$11.99"
                        ]
                    ],
                    "dranken" => [
                        "Belini",
                        "Bloody Mary",
                        "Black Russian",
                        "Cosmopolitan",
                        "Caipirinha",
                        "Champagne Cocktail",
                        "Cuba Libre",
                        "Godmother",
                        "Godfather",
                        "Cola",
                        "Fanta",
                        "Sprite",
                        "Water"
                    ]
                ],
                [
                    "titel" => "3 Gangenmenu inclusief drankjes",
                    "beschrijving" => "Verwen jezelf met een heerlijk driegangenmenu met bijpassende drankjes.",
                    "prijs" => "€39,99",
                    "gerechten" => [
                        [
                            "naam" => "Chicken Burrito",
                            "beschrijving" => "Gegrilde kip, rijst, bonen, kaas, zure room en salsa gewikkeld in een tortillawrap.",
                            "prijs" => "$8.99"
                        ],
                        [
                            "naam" => "Vegetarian Burrito",
                            "beschrijving" => "Rijst, bonen, kaas, gegrilde groenten en guacamole in een tortillawrap.",
                            "prijs" => "$7.99"
                        ],
                        [
                            "naam" => "Barbacoa Burrito",
                            "beschrijving" => "Langzaam gekookt rundvlees, rijst, bonen, kaas en pico de gallo gewikkeld in een tortillawrap.",
                            "prijs" => "$9.99"
                        ]
                    ],
                    "dranken" => [
 
                        "Cola",
                        "Fanta",
                        "Sprite",
                        "Water",

                        "Belini",
                        "Bloody Mary",
                        "Black Russian",
                        "Cosmopolitan",
                        "Caipirinha",
                        "Champagne Cocktail",
                        "Cuba Libre",
                        "Godmother",
                        "Godfather",
                        "Cola",
                        "Fanta",
                        "Sprite",
                        "Water"
                    ]
                ],
                [
                    "titel" => "Arrangement voor Groepen/Families",
                    "beschrijving" => "Ideaal voor grote gezelschappen, met speciale menu-opties.",
                    "prijs" => "€99,99",
                    "gerechten" => [
                        [
                            "naam" => "Cheese Quesadilla",
                            "beschrijving" => "Classic quesadilla met gesmolten kaas in een gegrilde tortillawrap.",
                            "prijs" => "$6.99"
                        ],
                        [
                            "naam" => "Chicken Fajitas",
                            "beschrijving" => "Sissende gegrilde kip met paprika's en uien. Geserveerd met tortilla's, guacamole en zure room.",
                            "prijs" => "$14.99"
                        ],
                        [
                            "naam" => "Vegetarian Fajitas",
                            "beschrijving" => "Gegrilde groenten geserveerd met tortilla's, guacamole en salsa.",
                            "prijs" => "$12.99"
                        ]
                    ],
                    "dranken" => [
                        "Belini",
                        "Bloody Mary",
                        "Black Russian",
                        "Cosmopolitan",
                        "Caipirinha",
                        "Champagne Cocktail",
                        "Cuba Libre",
                        "Godmother",
                        "Godfather",
                        "Cola",
                        "Fanta",
                        "Sprite",
                        "Water"
                    ]
                ]
            ];
 
            // Loop door de arrangementen en genereer HTML
            foreach ($arrangementen as $arrangement) {
                echo "<section class='arrangement'>";
                echo "<h2>" . $arrangement['titel'] . "</h2>";
                echo "<p>" . $arrangement['beschrijving'] . "</p>";
                echo "<p><strong>Prijs: " . $arrangement['prijs'] . "</strong></p>";
               
                echo "<h3>Gerechten:</h3><ul>";
                foreach ($arrangement['gerechten'] as $gerecht) {
                    echo "<li><strong>" . $gerecht['naam'] . ":</strong> " . $gerecht['beschrijving'] . " <em>(" . $gerecht['prijs'] . ")</em></li>";
                }
                echo "</ul>";
 
                echo "<h3>Dranken:</h3><ul>";
                foreach ($arrangement['dranken'] as $drank) {
                    echo "<li>" . $drank . "</li>";
                }
                echo "</ul>";
 
                echo "</section>";
            }
            ?>
        </section>
    </main>
 
</body>
</html>
 
 
<?php include 'footer.php'; ?>
 
 
</body>
</html>