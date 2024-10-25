<header>
    <h1 class="logo">Chillies Galore</h1> <!-- Toegevoegd logo titel -->
    <nav>
        <div class="burger-menu" id="burger-menu">
            <span></span>
            <span></span>
            <span></span>
        </div>
        <ul id="nav-links">
            <li><a href="index_chilliesgalorne_leiden.php">Home</a></li>
            <li><a href="menu_chilliesgalorne_leiden.php">Menu</a></li>
            <li><a href="gallery_chilliesgalorne_leiden.php">Gallery</a></li>
            <li><a href="about_chilliesgalorne_leiden.php">About Us</a></li>
            <li><a href="reservation_chilliesgalorne_leiden.php">Reservations</a></li>
            <li><a href="vacature_chilliesgalorne_leiden.php">Vacatures</a></li> 
            <li><a href="dranken_chilliesgalorne_leiden.php">Dranken</a></li> 
            <li><a href="arrangementen_chilliesgalorne_leiden.php">Arrangementen</a></li> 
            <li><a href="recensies_chilliesgalorne_leiden.php">Recensies</a></li> 
        </ul>
    </nav>
</header>

<script>
    const burgerMenu = document.getElementById('burger-menu');
    const navLinks = document.getElementById('nav-links');

    burgerMenu.addEventListener('click', () => {
        navLinks.classList.toggle('active');
    });
</script>
