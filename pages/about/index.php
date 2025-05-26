<?php
require BASE_PATH . '/vendor/autoload.php';

require_once BASE_PATH . '/handlers/pageData.handler.php';
require_once BASE_PATH . '/components/templates/foot.component.php';
require_once BASE_PATH . '/components/templates/head.component.php';
require_once BASE_PATH . '/components/templates/nav.component.php';
require_once BASE_PATH . '/components/templates/contactUs.component.php';
?>

<?php
head();
?>

<header>
    <h1>About Us🎯🏡</h1>
    <p>🐾 Learn more about El Perro Y El Gato Adoption Center 🐾</p>
</header>

<?php
nav($menu)
?>

<main>
    <section>
        <h2>Who We Are</h2>
            <p>El Perro y El Gato Adoption Center is a non-profit organization dedicated to rescuing and finding homes for pets in need. We believe that every pet deserves a happy and loving home, and we work tirelessly to connect these wonderful animals with their forever families.</p>
            <h2>Our Mission</h2>
            <p>To provide a safe haven for abandoned and homeless pets while promoting responsible pet ownership through education and community engagement.</p>
    </section>
</main>

<?php
footer();
?>