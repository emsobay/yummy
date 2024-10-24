<!-- index.php (or any other page) -->
<!DOCTYPE html>
<html lang="nl">
<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible"  content="IE=edge"> 
        <meta name="description" content="Chilies Galore, menu.php">
        <meta name="keywords" content="HTML, Chilies Galore">
        <meta name="author" content="Berko,Walid,Emin">
        <title>Chillies Galore | Menu</title>
        <link rel="stylesheet" href="css/test.css">
    </head>
<body>

    <?php include 'header.php'; ?>
    
    <main class="menu">
    <section id="menu">
        <h2>Onze Menu</h2>
        
        <aside id="menu">
            <img src="img/foto 1 menu.jpg" alt="Kleine foto" />
        </aside>

        <!-- tacos-->
        <section class="menu-section">
            <h3>Tacos</h3>
            <ul>
                <li>
                    <strong>Carne Asada Tacos</strong> – Grilled marinated beef, cilantro, onions, and lime. Served with salsa.
                    <span class="price">$10.99</span>
                </li>
                <li>
                    <strong>Al Pastor Tacos</strong> – Spicy marinated pork with pineapple, cilantro, and onions.
                    <span class="price">$9.99</span>
                </li>
                <li>
                    <strong>Fish Tacos</strong> – Crispy fried fish, cabbage slaw, and chipotle mayo on a corn tortilla.
                    <span class="price">$11.99</span>
                </li>
            </ul>
        </section>
 
        
        <section class="menu-section">
            <h3>Burritos</h3>
            <ul>
                <li>
                    <strong>Chicken Burrito</strong> – Grilled chicken, rice, beans, cheese, sour cream, and salsa wrapped in a flour tortilla.
                    <span class="price">$8.99</span>
                </li>
                <li>
                    <strong>Vegetarian Burrito</strong> – Rice, beans, cheese, grilled vegetables, and guacamole in a flour tortilla.
                    <span class="price">$7.99</span>
                </li>
                <li>
                    <strong>Barbacoa Burrito</strong> – Slow-cooked beef, rice, beans, cheese, and pico de gallo wrapped in a flour tortilla.
                    <span class="price">$9.99</span>
                </li>
            </ul>
        </section>
 
        
        <section class="menu-section">
            <h3>Quesadillas</h3>
            <ul>
                <li>
                    <strong>Cheese Quesadilla</strong> – Classic quesadilla with melted cheese in a grilled flour tortilla.
                    <span class="price">$6.99</span>
                </li>
                <li>
                    <strong>Chicken Quesadilla</strong> – Grilled chicken and melted cheese in a crispy flour tortilla.
                    <span class="price">$8.99</span>
                </li>
                <li>
                    <strong>Steak Quesadilla</strong> – Grilled steak, melted cheese, and roasted peppers in a flour tortilla.
                    <span class="price">$9.99</span>
                </li>
            </ul>
        </section>
 
        
        <section class="menu-section">
            <h3>Fajitas</h3>
            <ul>
                <li>
                    <strong>Chicken Fajitas</strong> – Sizzling grilled chicken with peppers and onions. Served with tortillas, guacamole, and sour cream.
                    <span class="price">$14.99</span>
                </li>
                <li>
                    <strong>Shrimp Fajitas</strong> – Sizzling shrimp with bell peppers and onions. Served with tortillas and salsa.
                    <span class="price">$16.99</span>
                </li>
                <li>
                    <strong>Vegetarian Fajitas</strong> – Grilled vegetables served with tortillas, guacamole, and salsa.
                    <span class="price">$12.99</span>
                </li>
            </ul>
        </section>
 
        
        <section class="menu-section">
            <h3>Desserts</h3>
            <ul>
                <li>
                    <strong>Churros</strong> – Fried dough pastries dusted with cinnamon sugar. Served with chocolate sauce.
                    <span class="price">$4.99</span>
                </li>
                <li>
                    <strong>Flan</strong> – Traditional creamy Mexican caramel flan.
                    <span class="price">$5.99</span>
                </li>
                <li>
                    <strong>Fried Ice Cream</strong> – Vanilla ice cream fried in a crispy coating, topped with chocolate syrup.
                    <span class="price">$6.99</span>
                </li>
            </ul>
        </section>
    </section>
</main>

    <?php include 'footer.php'; ?>

</body>
</html>

