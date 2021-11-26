<?php

// classe qui gére le CRUD de Character
class CharacterManager
{
    public PDO $bdd;

    public function __construct(PDO $objetBD)
    {
        $this->bdd = $objetBD;
    }

    public function insert(Character $character): void
    {
        $sql = "INSERT INTO character (name, LP, AP) " .
            "VALUES (:name, :LP, :AP)";

        $requete = $this->bdd->prepare($sql); // renvoie un PDOStatement
        $requete->bindValue(":name", $character->getName());
        $requete->bindValue(":LP", $character->getLP());
        $requete->bindValue(":AP", $character->getAP());

        // si la requête a une erreur on pourra l'afficher avec errorInfo de PDOStatement ($requete)
        // ou de PDO ($bdd) 

        // var_dump($requete->errorInfo());
        // var_dump($this->bdd->errorInfo());
        
        $requete->execute();
        // on donne un id à l'objet
        $character->hydrate(['id' => $this->bdd->lastInsertId()]);
        // c'est pareil si on n'utilise pas le hydrate:
        // $character->setId($this->bdd->lastInsertId());
    }
    public function delete(Character $character)
    {
        $sql = "DELETE FROM character WHERE id=:id";
        $requete = $this->bdd->prepare($sql);
        $requete->bindValue(":id", $character->getId());
        $requete->execute();
        var_dump($requete->errorInfo());
        var_dump($this->bdd->errorInfo());
    }

    // select reçoit un array de filtres et renvoie un array d'objets Character
    // c'est possible que l'array soit vide ou 
    // qu'il y ait un seul objet dans l'array
    public function select(array $filtres = []): array
    {
        $sql = "SELECT * FROM character";
        // on veut obtenir une requête dans cet esprit:
        // SELECT * from character WHERE name=:name AND LP=:LP
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
        // $requete->bindValue(":LP",$filtres['LP']);
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
        // $acteurTemp = new Character($res[0]);
        // var_dump ($acteurTemp);
        // die();


        // on crée un array d'objets à partir de l'array 
        // d'arrays

        $arrayObjetsCharacter = [];
        foreach ($res as $characterArray) {
            $arrayObjetsCharacter[] = new Character($characterArray);
        }
        return $arrayObjetsCharacter;
    }


    // on cherche un seul objet!
    public function selectParId(int $id): Character
    {
        $sql = "SELECT * FROM character WHERE id=:id";
        $requete = $this->bdd->prepare($sql);
        $requete->bindValue(":id",$id);
        $requete->execute();
        $arrayUnCharacter = $requete->fetch(PDO::FETCH_ASSOC); // une seule ligne, un seul array
        return new Character($arrayUnCharacter);
        
    }
    
    public function update (Character $character) : void {
        $sql = "UPDATE character SET name = :name, 
                                LP = :LP,
                                AP = :AP 
                WHERE id=:id";
        $requete = $this->bdd->prepare($sql);
        $requete->bindValue(":id", $character->getId());
        $requete->bindValue(":name",$character->getName()); 
        $requete->bindValue(":LP",$character->getLP()); 
        $requete->bindValue(":AP",$character->getAP()); 
        $requete->execute();
        
    }
}
