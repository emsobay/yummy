<header>
    <h1 class="logo">Chillies Galore</h1> 
    <nav>
        <div class="burger-menu" id="burger-menu">
            <span></span>
            <span></span>
            <span></span>
        </div>
        <ul id="nav-links">
            <li><a href="index.php">Home</a></li>
            <li><a href="menu.php">Menu</a></li>
            <li><a href="gallery.php">Gallery</a></li>
            <li><a href="about.php">About Us</a></li>
            <li><a href="reservation.php">Reservations</a></li>
            <li><a href="vacature.php">Vacatures</a></li> 
            <li><a href="dranken.php">Dranken</a></li> 
            <li><a href="arrangementen.php">Arrangementen</a></li> 
            <li><a href="recensies.php">Recensies</a></li> 
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
