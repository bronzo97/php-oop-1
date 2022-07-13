<?php

class Movie {

    public $title;
    public $genre;
    public $exit_year;
    public $duration_time;

    function __construct($_title, $_genre, $_exit_year)
    {
        $this->setTitle($_title);
        $this->setGenre($_genre);
        $this->setExitYear($_exit_year);
    }

    /**
     * Get the value of title
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set the value of title
     */
    public function setTitle($title): self
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get the value of genre
     */
    public function getGenre()
    {
        return $this->genre;
    }

    /**
     * Set the value of genre
     */
    public function setGenre($genre): self
    {
        $this->genre = $genre;

        return $this;
    }

    /**
     * Get the value of exit_year
     */
    public function getExitYear()
    {
        return $this->exit_year;
    }

    /**
     * Set the value of exit_year
     */
    public function setExitYear($exit_year): self
    {
        $this->exit_year = $exit_year;

        return $this;
    }

    /**
     * Get the value of duration_time
     */
    public function getDurationTime()
    {
        return $this->duration_time;
    }

    /**
     * Set the value of duration_time
     */
    public function setDurationTime($duration_time): self
    {
        $this->duration_time = $duration_time;

        return $this;
    }

    public function printMovie() {
        $title = $this->getTitle();
        $genre = $this->getGenre();
        $exit_year = $this->getExitYear();

        echo "
        <h1>$title</h1>
        <p>$genre</p>
        <p>$exit_year</p>
        ";
    }
}
