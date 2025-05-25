<?php
    function displayPets($pets, $type){
        if($type == "cats"){
            $backgroundcolor = "rgb(245, 196, 156)";
        }
        else if($type == "dogs"){
            $backgroundcolor = "rgb(255, 192, 174)";
        }

        foreach ($pets as $pet) {
            if($pet["name"] == "Tralalero"){
                $backgroundcolor = "lightblue";
            }
            else if($pet["name"] == "Patapim"){
                $backgroundcolor = "lightgreen";
            }
                echo "<div class='pet' style='background-color: $backgroundcolor'>";
                echo "<img src='{$pet['image']}' alt='{$pet['name']}'>";
                echo "<h3>" . strtoupper($pet['name']) . "</h3>";
                echo "<p>Color: " . ucfirst($pet['color']) . "</p>";
                echo "<p>Age: {$pet['age']} years old</p>";
                echo "<p>Birthday: " . date("F d, Y", strtotime($pet["bday"])) . "</p>";
                echo "</div>";
            }
    }
