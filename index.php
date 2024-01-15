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

    // metodo
    public function showInfo() {
        echo "Titolo: {$this -> title} <br>";
        echo "Regista: {$this -> director} <br>";
        echo "Anno: {$this -> releaseYear} <br>";
        echo "Genere: {$this -> genre} <br> <hr>";
    }
}


$interstellar = new Movie("Interstellar", "Christopher Nolan", 2014, "Fantascienza");
$la_migliore_offerta = new Movie("La Migliore Offerta", "Giuseppe Tornatore", 2013, "Thriller");

echo "Film 1: <br><br>";
$interstellar -> showInfo();

echo "Film 2: <br><br>";
$la_migliore_offerta -> showInfo();


