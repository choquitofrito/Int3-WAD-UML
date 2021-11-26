<?php

// classe qui gére le CRUD de Type
class TypeManager
{
    public PDO $bdd;

    public function __construct(PDO $objetBD)
    {
        $this->bdd = $objetBD;
    }

    public function insert(Type $type): void
    {
        $sql = "INSERT INTO type (name, minLP, minAP) " .
            "VALUES (:name, :minLP, :minAP, :maxLP, :maxAP)";

        $requete = $this->bdd->prepare($sql); // renvoie un PDOStatement
        $requete->bindValue(":name", $type->getName());
        $requete->bindValue(":minLP", $type->getMinLP());
        $requete->bindValue(":minAP", $type->getMinAP());
        $requete->bindValue(":maxLP", $type->getMaxLP());
        $requete->bindValue(":maxAP", $type->getMaxAP());

        // si la requête a une erreur on pourra l'afficher avec errorInfo de PDOStatement ($requete)
        // ou de PDO ($bdd) 

        // var_dump($requete->errorInfo());
        // var_dump($this->bdd->errorInfo());
        
        $requete->execute();
        // on donne un id à l'objet
        $type->hydrate(['id' => $this->bdd->lastInsertId()]);
        // c'est pareil si on n'utilise pas le hydrate:
        // $type->setId($this->bdd->lastInsertId());
    }
    public function delete(Type $type)
    {
        $sql = "DELETE FROM type WHERE id=:id";
        $requete = $this->bdd->prepare($sql);
        $requete->bindValue(":id", $type->getId());
        $requete->execute();
        var_dump($requete->errorInfo());
        var_dump($this->bdd->errorInfo());
    }

    // select reçoit un array de filtres et renvoie un array d'objets Type
    // c'est possible que l'array soit vide ou 
    // qu'il y ait un seul objet dans l'array
    public function select(array $filtres = []): array
    {
        $sql = "SELECT * FROM type";
        // on veut obtenir une requête dans cet esprit:
        // SELECT * from type WHERE name=:name AND minLP=:minLP
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
        // $requete->bindValue(":minLP",$filtres['minLP']);
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
        // $acteurTemp = new Type($res[0]);
        // var_dump ($acteurTemp);
        // die();


        // on crée un array d'objets à partir de l'array 
        // d'arrays

        $arrayObjetsType = [];
        foreach ($res as $typeArray) {
            $arrayObjetsType[] = new Type($typeArray);
        }
        return $arrayObjetsType;
    }


    // on cherche un seul objet!
    public function selectParId(int $id): Type
    {
        $sql = "SELECT * FROM type WHERE id=:id";
        $requete = $this->bdd->prepare($sql);
        $requete->bindValue(":id",$id);
        $requete->execute();
        $arrayUnType = $requete->fetch(PDO::FETCH_ASSOC); // une seule ligne, un seul array
        return new Type($arrayUnType);
        
    }
    
    public function update (Type $type) : void {
        $sql = "UPDATE type SET name = :name, 
                                minLP = :minLP,
                                minAP = :minAP,
                                maxLP = :maxLP,
                                maxAP = :maxAP
                WHERE id=:id";
        $requete = $this->bdd->prepare($sql);
        $requete->bindValue(":id", $type->getId());
        $requete->bindValue(":name",$type->getName()); 
        $requete->bindValue(":minLP",$type->getMinLP()); 
        $requete->bindValue(":minAP",$type->getMinAP());
        $requete->bindValue(":maxLP",$type->getMaxLP()); 
        $requete->bindValue(":maxAP",$type->getMaxAP()); 
        $requete->execute();
        
    }
}
