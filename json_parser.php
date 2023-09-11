<?php

// Ucitava  JSON data iz datoteke
$jsonData = file_get_contents('data.json');

// Dekodira JSON data u array
$data = json_decode($jsonData, true);

// Ponavljanje kroz svaki input podataka i stvaranje blokova
foreach ($data as $entry) {
    // Extract informcije kroz JSON ulaz
    $icon = $entry['icon'];
    $title = $entry['title'];
    $description = $entry['description'];
    $bulletpoints = $entry['bulletpoints'];

    // Output HTML
    echo '<div class="block">';
    echo '<img src="' . $icon . '" alt="' . $title . '">';
    echo '<h2>' . $title . '</h2>';
    echo '<p>' . $description . '</p>';

    // Output bulletpoints as unordered
    echo '<ul>';
    foreach ($bulletpoints as $point) {
        echo '<li>' . $point . '</li>';
    }
    echo '</ul>';

    echo '</div>';
}

?>

