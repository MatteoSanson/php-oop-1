<?php

class Movie {
    // variabili d'istanza
    public $title;
    public $genre;
    public $releaseYear;
    public $director;
}

$interstellar = new Movie();
$interstellar->title = "Interstellar";
$interstellar->genre = "Fantascienza";
$interstellar->releaseYear = "2014";
$interstellar->director = "Christopher Nolan";

var_dump($interstellar);
