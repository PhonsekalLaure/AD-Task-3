<?php
require_once BASE_PATH . '/components/cards/displayPets.utils.php';
?>

<?php
function displaySection($categories){
        foreach ($categories as $categoryName => $pets) {
        echo '<section class="pets-section">';
        echo "<h3>" . ucfirst($categoryName) . "</h3>";
        echo '<div class="pets">';
        displayPets($pets, $categoryName);
        echo "</div>";
        echo "</section>";
    }
}