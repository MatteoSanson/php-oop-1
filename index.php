<?php

require_once __DIR__ . '/models/movie.php';

$interstellar = new Movie("Interstellar", "Christopher Nolan", 2014, "Fantascienza");
$la_migliore_offerta = new Movie("La Migliore Offerta", "Giuseppe Tornatore", 2013, "Thriller");

echo "Film 1: <br><br>";
$interstellar -> showInfo();

echo "Film 2: <br><br>";
$la_migliore_offerta -> showInfo();