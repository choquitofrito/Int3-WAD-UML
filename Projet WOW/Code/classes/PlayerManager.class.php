<?php

// classe qui gére le CRUD de Player
class PlayerManager
{
    public PDO $bdd;

    public function __construct(PDO $objetBD)
    {
        $this->bdd = $objetBD;
    }

    public function insert(Player $player): void
    {
        $sql = "INSERT INTO player (name, email) " .
            "VALUES (:name, :email)";

        $requete = $this->bdd->prepare($sql); // renvoie un PDOStatement
        $requete->bindValue(":name", $player->name);
        $requete->bindValue(":email", $player->email);

        // si la requête a une erreur on pourra l'afficher avec errorInfo de PDOStatement ($requete)
        // ou de PDO ($bdd) 

        // var_dump($requete->errorInfo());
        // var_dump($this->bdd->errorInfo());
        
        $requete->execute();
        // on donne un id à l'objet
        $player->hydrate(['id' => $this->bdd->lastInsertId()]);
        // c'est pareil si on n'utilise pas le hydrate:
        // $player->setId($this->bdd->lastInsertId());
    }
    public function delete(Player $player)
    {
        $sql = "DELETE FROM player WHERE id=:id";
        $requete = $this->bdd->prepare($sql);
        $requete->bindValue(":id", $player->getId());
        $requete->execute();
        var_dump($requete->errorInfo());
        var_dump($this->bdd->errorInfo());
    }

    // select reçoit un array de filtres et renvoie un array d'objets Player
    // c'est possible que l'array soit vide ou 
    // qu'il y ait un seul objet dans l'array
    public function select(array $filtres = []): array
    {
        $sql = "SELECT * FROM player";
        // on veut obtenir une requête dans cet esprit:
        // SELECT * from player WHERE name=:name AND email=:email
        if (count($filtres) > 0) {
            $sql = $sql . " WHERE ";

            $arrayFiltresRequete = [];
            foreach ($filtres as $nameFiltre => $valeur) {
                $arrayFiltresRequete[] = $nameFiltre . "=:" . $nameFiltre;
            }
            // var_dump($arrayFiltresRequete);
            $sql = $sql . implode(" AND ", $arrayFiltresRequete);
        }

        $requete = $this->bdd->prepare($sql);

        // on veut faire bindValue de cette manière:
        // $requete->bindValue(":name",$filtres['name']);
        // $requete->bindValue(":email",$filtres['email']);
        foreach ($filtres as $nameFiltre => $valFiltre) {
            $requete->bindValue(":" . $nameFiltre, $valFiltre);
        }


        // debugger tout le temps le contenu du $sql 
        // var_dump($sql);
        // die();
        $requete->execute();

        $res = $requete->fetchAll(PDO::FETCH_ASSOC);

        // exemple de création d'un objet à partir d'un array. Notre constructer est adapté :
        // var_dump ($res[0]);
        // $acteurTemp = new Player($res[0]);
        // var_dump ($acteurTemp);
        // die();


        // on crée un array d'objets à partir de l'array 
        // d'arrays

        $arrayObjetsPlayer = [];
        foreach ($res as $playerArray) {
            $arrayObjetsPlayer[] = new Player($playerArray);
        }
        return $arrayObjetsPlayer;
    }


    // on cherche un seul objet!
    public function selectParId(int $id): Player
    {
        $sql = "SELECT * FROM player WHERE id=:id";
        $requete = $this->bdd->prepare($sql);
        $requete->bindValue(":id",$id);
        $requete->execute();
        $arrayUnPlayer = $requete->fetch(PDO::FETCH_ASSOC); // une seule ligne, un seul array
        return new Player($arrayUnPlayer);
        
    }
    
    public function update (Player $player) : void {
        $sql = "UPDATE player SET name = :name, 
                                email = :email
                WHERE id=:id";
        $requete = $this->bdd->prepare($sql);
        $requete->bindValue(":id", $player->getId());
        $requete->bindValue(":name",$player->getName()); 
        $requete->execute();
        
    }
}
