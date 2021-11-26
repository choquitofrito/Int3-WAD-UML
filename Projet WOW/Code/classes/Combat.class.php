<?php


class Combat
{
    private string $id;
    private DateTime $combatDate;
    
    // rélation: un 
    private Character $winner;;
    private array $participants;



    public function __construct(array $vals)
    {
        $this->hydrate($vals);
    }

    public function hydrate(array $vals)
    {
        foreach ($vals as $namePropriete => $valeurPropriete) {
            if (isset($vals[$namePropriete])) {
                // donner une valeur `a la proprieté
                $this->$namePropriete = $valeurPropriete;
            }
        }
    }
    
    
}
