<?php
function getYoungestAndOldestPets($categories) {
    $ages = [];
    foreach ($categories as $pets) {
        foreach ($pets as $pet) {
            $ages[] = $pet['age'];
        }
    }
    $youngest = min($ages);
    $oldest = max($ages);

    $youngPets = [];
    $oldPets = [];
    foreach ($categories as $pets) {
        foreach ($pets as $pet) {
            if ($pet['age'] == $youngest) {
                $youngPets[] = $pet;
            }
            if ($pet['age'] == $oldest) {
                $oldPets[] = $pet;
            }
        }
    }
    return [
        'youngest' => $youngPets,
        'oldest' => $oldPets
    ];
}