<?php

class Diffusion
{
    public int $id;
    public DateTime $dateDiffusion;

    // implementer relation avec Cinema  (le Cinema où la diffusion a lieu)
    public Cinema $cinema;
    // implementer relation avec Film (le Film diffusé)
    public Film $film;

    public function __construct(
        int $id,
        DateTime $dateDiffusion,
        Cinema $cinema,
        Film $film
    ) {
        $this->id = $id;
        $this->dateDiffusion = $dateDiffusion;
        $this->cinema = $cinema;
        $this->film = $film;
    }
}
