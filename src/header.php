<header>
    <div class="img"><a href="/"><img src="https://wattmax.fr/img/6_-_Sigle_WM_Blanc_simple__1_-removebg-preview.png" alt="logo"></a></div>
    <div class="resa"><a href="Reservez-votre-essai"><p>Réservez votre essai !</p></a></div>
    <nav class="menu-nav">
        <ul class="ul-menu-nav">
            <li class="btn"><a href="/"><p class="nav">Accueil</p></a></li>
            <li class="btn"><a href="Motos"><p class="nav">Motos</p></a></li>
            <li class="btn"><a href="Scooters"><p class="nav">Scooters</p></a></li>
            <!-- <li class="btn"><a href="E-Style"><p class="nav">E-Style</p></a></li> -->
            <li class="btn"><a href="Service"><p class="nav">Service</p></a></li>
            <li class="btn"><a href="Contact"><p class="nav">Contact</p></a></li>
        </ul>
    </nav>
    <div id=ham class="ham">
        <div id=de></div>
        <div id=de></div>
        <div id=de></div>
    </div>
</header>
<script>
    const menuHamburger = document.querySelector(".ham");
    const navLinks = document.querySelector(".menu-nav");

    menuHamburger.addEventListener("click", () => {
        navLinks.classList.toggle('mobile-menu');
    });
</script>
<div style="height: 80px; width: 100%; background-color: black;"></div>