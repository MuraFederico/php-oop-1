<?php 

class Movie {
    private $title;
    private $thumb;
    private $director;
    private $distributor;
    private $actors;
    private $length;
    private $language;
    private $relase_date;
    private $description;
    private $genres;

    public function __construct($_title) {
        $this->title = $_title;
    }

    public function getTitle() {
        return $this->title;
    }

    public function setThumb($_thumb) {
        $this->thumb = $_thumb;
        return $this;
    }

    public function getThumb() {
        return $this->thumb;
    }

    public function setDirector($_director) {
        $this->director = $_director;
        return $this;
    }

    public function getDirector() {
        return $this->director;
    }

    public function setDistributor($_distributor) {
        $this->distributor = $_distributor;
        return $this;
    }

    public function getDistributor() {
        return $this->distributor;
    }

    public function setActors($_actors) {
        $this->actors = $_actors;
        return $this;
    }

    public function getActors() {
        return $this->actors;
    }

    public function setLength($_length) {
        $this->length = $_length;
        return $this;
    }

    public function getLength() {
        return $this->length;
    }

    public function setLanguage($_language) {
        $this->language = $_language;
        return $this;
    }

    public function getLanguage() {
        return $this->language;
    }

    public function setRelaseDate($_relase_date) {
        $this->relase_date = $_relase_date;
        return $this;
    }

    public function getRelaseDate() {
        return $this->relase_date;
    }

    public function setDescription($_description) {
        $this->description = $_description;
        return $this;
    }

    public function getDescription() {
        return $this->description;
    }

    public function setGenres($_genres) {
        $this->genres = $_genres;
        return $this;
    }

    public function getGenres() {
        return $this->genres;
    }
}


$inception = new Movie('inception');

$days_of_summer = new Movie('500 days of summer');

$inception->setDirector('Nolan')->setLanguage('enlish');

var_dump($inception);

var_dump($days_of_summer);