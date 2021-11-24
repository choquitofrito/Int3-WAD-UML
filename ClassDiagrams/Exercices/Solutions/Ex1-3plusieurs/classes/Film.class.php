<?php


class Film {

    public int $id;
    public string $title;

    // implementer relation: les diffusions de ce Film, n'importe le Cinema
    public array $filmDiffusions = [];

    public function __construct (int $id, string $title){
        $this->id = $id;
        $this->title = $title;
    }


}