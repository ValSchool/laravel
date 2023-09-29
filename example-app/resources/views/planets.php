<?php
// Simuleer een array met planeten
$planets = [
    'Mercury' => ['name' => 'Mercury', 'description' => 'The closest planet to the Sun.'],
    'Venus' => ['name' => 'Venus', 'description' => 'Known for its thick, toxic atmosphere.'],
    'Earth' => ['name' => 'Earth', 'description' => 'Our home planet.'],
    'Mars' => ['name' => 'Mars', 'description' => 'The Red Planet.'],
    // Voeg hier andere planeten toe
];

// Controleer of de 'planet' GET-parameter is ingesteld
if (isset($_GET['planet']) && !empty($_GET['planet'])) {
    $filteredPlanet = $_GET['planet'];

    // Controleer of de opgegeven planeet bestaat in de array
    if (isset($planets[$filteredPlanet])) {
        $planetInfo = $planets[$filteredPlanet];
        echo "<h1>{$planetInfo['name']}</h1>";
        echo "<p>{$planetInfo['description']}</p>";
    } else {
        echo "Planeet niet gevonden.";
    }
} else {
    // Toon alle planeten als er geen GET-parameter is opgegeven
    echo "<h1>Alle planeten</h1>";
    echo "<ul>";
    foreach ($planets as $planet) {
        echo "<li><a href='/planets?planet={$planet['name']}'>{$planet['name']}</a></li>";
    }
    echo "</ul>";
}
?>
