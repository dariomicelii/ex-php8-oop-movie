<?php

class Movie {
    public $title;
    public $rating;
    public $year;
    public $description;
    protected Genre $genre;

    use HasDirector;

    public function __construct($title, $rating, $year, $description, Genre $genre) {
        $this->title = $title;
        $this->rating = $rating;
        $this->year = $year;
        $this->genre = $genre;
    }

    public function getGenreName() {
        return $this->genre->getName();
    }

}

?>