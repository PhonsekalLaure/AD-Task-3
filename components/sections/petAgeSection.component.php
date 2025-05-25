<?php
function petAgeSection($youngPets, $oldPets) {
    ?>
    <section id="age">
        <h4>Youngest Pet</h4>
        <?php
        foreach($youngPets as $pet){
            echo "<img src=\"{$pet["image"]}\">";
            echo "<p>Name: {$pet["name"]}</p>";
            echo "<p>Age: {$pet["age"]}</p>";
        }
        ?>
        <h4>Oldest Pet</h4>
        <?php
        foreach($oldPets as $pet){
            echo "<img src=\"{$pet["image"]}\">";
            echo "<p>Name: {$pet["name"]}</p>";
            echo "<p>Age: {$pet["age"]}</p>";
        }
        ?>
    </section>
    <?php
}