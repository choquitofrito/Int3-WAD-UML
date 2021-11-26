<?php


class Combat
{
    private string $id;
    private DateTime $combatDate;

    // rélation: un winner et un loser pour chaque Combat
    // sans winner ni loser le combat est nul

    // le symbole ? avant le type permet de mettre à null une proprieté objet
    private ?Character $winner = null;
    private ?Character $loser = null;

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


    /**
     * Get the value of combatDate
     */
    public function getCombatDate()
    {
        return $this->combatDate;
    }

    /**
     * Set the value of combatDate
     *
     * @return  self
     */
    public function setCombatDate($combatDate)
    {
        $this->combatDate = $combatDate;

        return $this;
    }

    /**
     * Get the value of winner
     */
    public function getWinner()
    {
        return $this->winner;
    }

    /**
     * Set the value of winner
     *
     * @return  self
     */
    public function setWinner($winner)
    {
        $this->winner = $winner;

        return $this;
    }

    /**
     * Get the value of loser
     */
    public function getLoser()
    {
        return $this->loser;
    }

    /**
     * Set the value of loser
     *
     * @return  self
     */
    public function setLoser($loser)
    {
        $this->loser = $loser;

        return $this;
    }

    /**
     * Get the value of participants
     */
    public function getParticipants()
    {
        return $this->participants;
    }

    /**
     * Set the value of participants
     *
     * @return  self
     */
    public function setParticipants($participants)
    {
        $this->participants = $participants;

        return $this;
    }

    // rajouter un Participant
    public function addParticipant($participant)
    {
        $this->participants[] = $participant;
    }

    // lancer un attack
    public function attack()
    {
        // points de vie (du personnage) – points d’attaque (de l’adversaire)  
        // points de vie (de l’adversaire) – points d’attaque (du personnage) 
        // Atack: enlever de points de vie
        // base, sans random
        echo "<h3>Attack!<h3>";


        $pourcentageErrorAttackC1 = rand (0,20) / 100; // % rater le coup
        $APChar1 = $this->getParticipants()[0]->getAP() - $this->getParticipants()[0]->getAP() * $pourcentageErrorAttackC1;
        $pourcentageErrorAttackC2 = rand (0,20) / 100;
        $APChar2 = $this->getParticipants()[1]->getAP() - $this->getParticipants()[0]->getAP() * $pourcentageErrorAttackC2;

        $this->getParticipants()[0]->setLP($this->getParticipants()[0]->getLP() - $APChar2);
        $this->getParticipants()[1]->setLP($this->getParticipants()[1]->getLP() - $APChar1);
        echo "<p>" . $this->getParticipants()[0]->getName() . " ---> new LP: " . $this->getParticipants()[0]->getLP() . "</p>";
        echo "<p>" . $this->getParticipants()[1]->getName() . " ---> new LP: " . $this->getParticipants()[1]->getLP() . "</p>";
    }

    // lancer un Combat
    public function combattre()
    {
        // lancer les attacks du combat.
        // Attaque tant qu'il n'y a pas de morts (LP<=0) 
        while ($this->getParticipants()[0]->getLP() > 0 && $this->getParticipants()[1]->getLP() > 0) {
            $this->attack(); // on peut identifier toujours le Character winner car on a l'id du Character
        }
        $finalLP1 = $this->getParticipants()[0]->getLP();
        $finalLP2 = $this->getParticipants()[1]->getLP();

        // choisir le gagnant
        if ($finalLP1 > $finalLP2) {
            $this->winner = $this->participants[0];
            $this->loser = $this->participants[1];
        } elseif ($finalLP1 < $finalLP2) {
            $this->winner = $this->participants[1];
            $this->loser = $this->participants[0];
        }
        // autrement le match est null (ainsi que le winner et le loser)
    }
}
