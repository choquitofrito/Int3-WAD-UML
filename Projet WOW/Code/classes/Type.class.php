<?php


class Type
{
    private string $id;
    private string $name;
    private int $minPV;
    private int $maxPV;
    private int $minPA;
    private int $maxPA;
    

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
     * Get the value of PV
     */
    public function getPV()
    {
        return $this->PV;
    }

    /**
     * Set the value of PV
     *
     * @return  self
     */
    public function setPV($PV)
    {
        $this->PV = $PV;

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
     * Get the value of PA
     */
    public function getPA()
    {
        return $this->PA;
    }

    /**
     * Set the value of PA
     *
     * @return  self
     */
    public function setPA($PA)
    {
        $this->PA = $PA;

        return $this;
    }

    /**
     * Get the value of minPV
     */
    public function getMinPV()
    {
        return $this->minPV;
    }

    /**
     * Set the value of minPV
     *
     * @return  self
     */
    public function setMinPV($minPV)
    {
        $this->minPV = $minPV;

        return $this;
    }

    /**
     * Get the value of maxPV
     */
    public function getMaxPV()
    {
        return $this->maxPV;
    }

    /**
     * Set the value of maxPV
     *
     * @return  self
     */
    public function setMaxPV($maxPV)
    {
        $this->maxPV = $maxPV;

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
     * Get the value of minPA
     */ 
    public function getMinPA()
    {
        return $this->minPA;
    }

    /**
     * Set the value of minPA
     *
     * @return  self
     */ 
    public function setMinPA($minPA)
    {
        $this->minPA = $minPA;

        return $this;
    }

    /**
     * Get the value of maxPA
     */ 
    public function getMaxPA()
    {
        return $this->maxPA;
    }

    /**
     * Set the value of maxPA
     *
     * @return  self
     */ 
    public function setMaxPA($maxPA)
    {
        $this->maxPA = $maxPA;

        return $this;
    }
}
