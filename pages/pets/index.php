<?php
require BASE_PATH . '/vendor/autoload.php';

require_once BASE_PATH . '/handlers/pageData.handler.php';
require_once BASE_PATH . '/utils/petAge.utils.php';
require_once BASE_PATH . '/components/templates/foot.component.php';
require_once BASE_PATH . '/components/templates/head.component.php';
require_once BASE_PATH . '/components/templates/nav.component.php';
require_once BASE_PATH . '/components/sections/displaySection.component.php';
require_once BASE_PATH . '/components/sections/petAgeSection.component.php';
?>

<?php
head();
?>

<header>
    <h1>Available Pets🦈🐒</h1>
    <p>🐾 Find your perfect furry companion from our loving pet family! 🐾</p>
</header>

<?php
nav($menu)
?>

<main>
    <h2>Meet Our Adorable Pets</h2>
    <?php
    displaySection($categories);
    $petAges = getYoungestAndOldestPets($categories);
    petAgeSection($petAges['youngest'], $petAges['oldest']);
    ?>
</main>

<?php
footer();
?>