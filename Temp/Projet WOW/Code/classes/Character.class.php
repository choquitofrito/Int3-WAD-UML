<?php


class Character
{
    private string $id;
    private string $name;
    private string $LP;
    private string $AP;
    private bool $status = true; // actif = true, inactif = false

    // relation: un Character a un Type
    private Type $type;
    private Player $player;

    // private function __construct (int $id,
    //                             string $name, // manque
    //                             Type $type){
    //     $this->id = $id;
    //     $this->name = $name;
    //     $this->type = $type;                        
    // }

    public function __construct(array $vals)
    {
        $this->hydrate($vals);

        // calcul des LP pour ce Personnage
        // $this->LP = rand($this->type->getMinLP(), $this->getType()->getMaxLP()); // pareil...
        $this->LP = rand($this->getType()->getMinLP(), $this->getType()->getMaxLP());
        $this->AP = rand($this->getType()->getMinAP(), $this->getType()->getMaxAP());
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
    /**
     * Get the value of name
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set the value of name
     *
     * @return  self
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get the value of LP
     */
    public function getLP()
    {
        return $this->LP;
    }

    /**
     * Set the value of LP
     *
     * @return  self
     */
    public function setLP($LP)
    {
        $this->LP = $LP;

        return $this;
    }



    /**
     * Get the value of id
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of id
     *
     * @return  self
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get the value of AP
     */
    public function getAP()
    {
        return $this->AP;
    }

    /**
     * Set the value of AP
     *
     * @return  self
     */
    public function setAP($AP)
    {
        $this->AP = $AP;

        return $this;
    }

    /**
     * Get the value of status
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set the value of status
     *
     * @return  self
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get the value of type
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set the value of type
     *
     * @return  self
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }
    public function afficher()
    {
        echo "<p><b>Character : " . $this->getType()->getName() . " " . $this->getName() . "<br></b></p>";
        echo "<p>LP: " . $this->getLP() . "</p>";
        echo "<p>AP: " . $this->getAP() . "</p>";
    }

    /**
     * Get the value of player
     */ 
    public function getPlayer()
    {
        return $this->player;
    }

    /**
     * Set the value of player
     *
     * @return  self
     */ 
    public function setPlayer($player)
    {
        $this->player = $player;

        return $this;
    }
}
