<?php


class Player {
    private string $id;
    private string $name;
    private string $email;
    // rélations: 
    private array $characters = [];
    private Team $team;
    
    public function __construct(array $vals)
    {
        $this->hydrate($vals);
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
     * Get the value of email
     */ 
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set the value of email
     *
     * @return  self
     */ 
    public function setEmail($email)
    {
        $this->email = $email;

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

    // rajouter un Character
    public function addCharacter (Character $character){
        $this->characters[] = $character;
        // la relation dans l'autre sens
        $character->setPlayer($this);
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
     * Get the value of team
     */ 
    public function getTeam()
    {
        return $this->team;
    }

    /**
     * Set the value of team
     *
     * @return  self
     */ 
    public function setTeam($team)
    {
        $this->team = $team;

        return $this;
    }
}