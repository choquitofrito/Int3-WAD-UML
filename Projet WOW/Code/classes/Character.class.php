<?php


class Character {
    private string $id;
    private string $name;
    private string $PV;
    private string $PA;
    private bool $status; // actif = true, inactif = false

    // rélation: un Character a un Type
    private Type $type;

    
    public function __construct(array $vals)
    {
        $this->hydrate($vals);
        
        // calcul des PV pour ce Personnage
        $this->PV = rand ($this->getType()->getMinPV(),$this->getType()->getMaxPV());
        $this->PA = rand ($this->getType()->getMinPA(),$this->getType()->getMaxPA());

    }

    public function hydrate (array $vals){
        foreach ($vals as $namePropriete => $valeurPropriete){
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
}