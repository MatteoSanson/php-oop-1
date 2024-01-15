<?php

class Movie {
    // variabili d'istanza
    public $title;
    public $director;
    public $releaseYear;
    public $genre;

    // costruttore
    function __construct($_title, $_director, $_releaseYear, $_genre){
        $this -> title = $_title;
        $this -> director = $_director;
        $this -> releaseYear = $_releaseYear;
        $this -> genre = $_genre;
    }
}


$interstellar = new Movie("Interstellar", "Christopher Nolan", "2014", "Fantascienza");
echo "Title: " . $interstellar -> title . "<br>";
echo "Director: " . $interstellar -> director . "<br>";
echo "Release Year: " . $interstellar -> releaseYear . "<br>";
echo "Genre: " . $interstellar -> genre . "<br>";


