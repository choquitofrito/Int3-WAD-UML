<?php

// classe qui gére le CRUD de Team
class TeamManager
{
    public PDO $bdd;

    public function __construct(PDO $objetBD)
    {
        $this->bdd = $objetBD;
    }

    public function insert(Team $team): void
    {
        $sql = "INSERT INTO team (name, score) " .
            "VALUES (:name, :score)";

        $requete = $this->bdd->prepare($sql); // renvoie un PDOStatement
        $requete->bindValue(":name", $team->getName());
        $requete->bindValue(":score", $team->getScore());

        // si la requête a une erreur on pourra l'afficher avec errorInfo de PDOStatement ($requete)
        // ou de PDO ($bdd) 

        // var_dump($requete->errorInfo());
        // var_dump($this->bdd->errorInfo());
        
        $requete->execute();
        // on donne un id à l'objet
        $team->hydrate(['id' => $this->bdd->lastInsertId()]);
        // c'est pareil si on n'utilise pas le hydrate:
        // $team->setId($this->bdd->lastInsertId());
    }
    public function delete(Team $team)
    {
        $sql = "DELETE FROM team WHERE id=:id";
        $requete = $this->bdd->prepare($sql);
        $requete->bindValue(":id", $team->getId());
        $requete->execute();
        var_dump($requete->errorInfo());
        var_dump($this->bdd->errorInfo());
    }

    // select reçoit un array de filtres et renvoie un array d'objets Team
    // c'est possible que l'array soit vide ou 
    // qu'il y ait un seul objet dans l'array
    public function select(array $filtres = []): array
    {
        $sql = "SELECT * FROM team";
        // on veut obtenir une requête dans cet esprit:
        // SELECT * from team WHERE name=:name AND email=:email
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
        // $acteurTemp = new Team($res[0]);
        // var_dump ($acteurTemp);
        // die();


        // on crée un array d'objets à partir de l'array 
        // d'arrays

        $arrayObjetsTeam = [];
        foreach ($res as $teamArray) {
            $arrayObjetsTeam[] = new Team($teamArray);
        }
        return $arrayObjetsTeam;
    }


    // on cherche un seul objet!
    public function selectParId(int $id): Team
    {
        $sql = "SELECT * FROM team WHERE id=:id";
        $requete = $this->bdd->prepare($sql);
        $requete->bindValue(":id",$id);
        $requete->execute();
        $arrayUnTeam = $requete->fetch(PDO::FETCH_ASSOC); // une seule ligne, un seul array
        return new Team($arrayUnTeam);
        
    }
    
    public function update (Team $team) : void {
        $sql = "UPDATE team SET name = :name 
                WHERE id=:id";
        $requete = $this->bdd->prepare($sql);
        $requete->bindValue(":id", $team->getId());
        $requete->bindValue(":name",$team->getName()); 
        $requete->bindValue(":score",$team->getScore()); 
        $requete->execute();
        
    }
}
