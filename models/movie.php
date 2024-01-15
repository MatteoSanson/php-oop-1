<?php

require_once __DIR__ . '/genre.php';

class Movie {
    // variabili d'istanza
    public $title;
    public $director;
    public $releaseYear;
    public $genre = [];

    // costruttore
    function __construct($_title, $_director, $_releaseYear, $_genre){
        $this -> title = $_title;
        $this -> director = $_director;
        $this -> releaseYear = $_releaseYear;
        
        foreach ($_genre as $gen) {
            $this -> genre[] = new Genre($gen);
        }
    }

    // metodo
    public function showInfo() {
        echo "Titolo: {$this -> title} <br>";
        echo "Regia: {$this -> director} <br>";
        echo "Anno: {$this -> releaseYear} <br>";
        echo "Genere: ";

        $genreCount = count($this -> genre);
        foreach ($this -> genre as $gen) {
            echo $gen -> type;
            if ($genreCount-- > 1) {
                echo ', ';
            }
        }

        echo "<br><hr>";
    }
}