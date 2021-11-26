<?php


class Type
{
    private string $id;
    private string $name;
    private int $minLP;
    private int $maxLP;
    private int $minAP;
    private int $maxAP;
    

    // rélation: un Type a un Type
    private array $characters;


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
     * Get the value of minLP
     */
    public function getMinLP()
    {
        return $this->minLP;
    }

    /**
     * Set the value of minLP
     *
     * @return  self
     */
    public function setMinLP($minLP)
    {
        $this->minLP = $minLP;

        return $this;
    }

    /**
     * Get the value of maxLP
     */
    public function getMaxLP()
    {
        return $this->maxLP;
    }

    /**
     * Set the value of maxLP
     *
     * @return  self
     */
    public function setMaxLP($maxLP)
    {
        $this->maxLP = $maxLP;

        return $this;
    }

    /**
     * Get the value of characters
     */
    public function getCharacters()
    {
        return $this->characters;
    }

    /**
     * Set the value of characters
     *
     * @return  self
     */
    public function setCharacters($characters)
    {
        $this->characters = $characters;

        return $this;
    }

    // rajouter un Character au Type
    public function addCharacter(Character $character)
    {
        $this->characters[] = $character;
    }

    /**
     * Get the value of minAP
     */ 
    public function getMinAP()
    {
        return $this->minAP;
    }

    /**
     * Set the value of minAP
     *
     * @return  self
     */ 
    public function setMinAP($minAP)
    {
        $this->minAP = $minAP;

        return $this;
    }

    /**
     * Get the value of maxAP
     */ 
    public function getMaxAP()
    {
        return $this->maxAP;
    }

    /**
     * Set the value of maxAP
     *
     * @return  self
     */ 
    public function setMaxAP($maxAP)
    {
        $this->maxAP = $maxAP;

        return $this;
    }
}
