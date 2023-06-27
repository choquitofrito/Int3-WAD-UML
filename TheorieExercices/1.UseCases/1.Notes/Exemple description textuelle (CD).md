**Nom: UC-01 - Choisir un CD**

Description : détailler les étapes pour sélectionner un ou plusieurs CD
par le client

Acteur principal : Client

Acteur secondaire : -

Date de création : 17/10/2017

Date de mise à jour : 17/10/2017

Num. version : 1.0

Précondition : Le client se trouve sur le site d\'achat

Post condition : Le panier contient le choix du client

**Enchainement nominal** :

1)  Le client saisit un titre et appuie sur le bouton Rechercher

2)  **Appel au cas UC-02 : Rechercher CD**

3)  Le client choisi le nombre d\'unités de chaque CD

4)  **Appel au cas UC-03 : Vérifier la disponibilité**

5)  Le panier est rempli

> **Point d\'extension :UC-04 -- Passer la commande**

**Enchainement d\'exception :**

E1 : il n\'y a aucun cd qui correspond à ce titre

L\'enchainement démarre après le point 2)

3.1) Afficher un message au client \"pas de résultats\"

Fin du cas d\'utilisation

**Enchainement d\'exception :**

E2 : le produit n\'est pas en stock

L\'enchainement démarre après le point 4)

5.1) Afficher un message au client \"le produit n\'est pas en stock\"

Fin du cas d\'utilisation



**Nom: UC-03 - Vérifier et valider la disponibilité**

Description : vérifier si le stock contient le nombre de CDs souhaité et
valider les quantités

Acteur principal : Système

Acteur secondaire : -

Date de création : 17/10/2017

Date de mise à jour : 17/10/2017

Num. version : 1.0

Précondition : Le client a choisi un titre et un certain nombre
d\'unités

Post condition : -

**Enchainement nominal** :

1)  Obtenir le nombre d\'unités et le titre choisi

2)  Comparer le nombre d\'unités choisi avec le nombre d\'unités dans le
    stock

3)  Ajouter dans le panier le nombre d\'unités du titre choisi

4)  Activer le bouton de passer la commande

**Enchainement alternatif :**

A1 : il n\'y pas assez d\'unités du CD demandé et le client accepte
d\'acheter ce titre

L\'enchainement démarre après le point 2)

3.1) Afficher un message au client \"pas assez d\'unités de ce produit\"

3.2) L\'utilisateur commande les unités disponibles du titre en stock

La séquence nominale reprend au point 4)

**Enchainement d\'exception :**

E1 : il n\'y a pas assez d\'unités du CD demandé et le client refuse
d\'acheter ce titre

L\'enchainement démarre après le point 2)

3.1) Afficher un message au client \"pas assez d\'unités de ce produit\"

3.2) Le client n\'accepte pas le nombre d\'unités disponible

3.3) Le produit n\'est pas rajouté au panier

Fin du cas d\'utilisation
