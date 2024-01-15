<?php

require_once __DIR__ . '/models/movie.php';

$interstellar = new Movie("Interstellar", "Christopher Nolan", 2014, ["Fantascienza", "Avventura", "Drammatico"]);
$la_migliore_offerta = new Movie("La Migliore Offerta", "Giuseppe Tornatore", 2013, ["Thriller", "Drammatico", "Sentimentale"]);
$tutti = new Movie("Tutti gli uomini del deficiente", "Paolo Costella", 1999, ["Comico"]);

echo "Film 1: <br><br>";
$interstellar -> showInfo();

echo "Film 2: <br><br>";
$la_migliore_offerta -> showInfo();

echo "Film 3: <br><br>";
$tutti -> showInfo();