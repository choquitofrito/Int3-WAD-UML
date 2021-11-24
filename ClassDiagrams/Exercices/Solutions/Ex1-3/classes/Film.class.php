<?php


class Film {

    public int $id;
    public string $title;
    // implementer rélation: un seul Cinema
    public Cinema $cinema;


    public function __construct (int $id, string $title){
        $this->id = $id;
        $this->title = $title;
    }


    /**
     * Get the value of cinema
     */ 
    public function getCinema()
    {
        return $this->cinema;
    }

    /**
     * Set the value of cinema
     *
     * @return  self
     */ 
    public function setCinema($cinema)
    {
        $this->cinema = $cinema;

        return $this;
    }
}