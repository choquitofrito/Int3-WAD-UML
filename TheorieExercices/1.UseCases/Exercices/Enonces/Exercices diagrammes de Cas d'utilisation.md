# Exercices diagrammes de Cas d\'utilisation #


  - [Modélisation de cas isolés](#modélisation-de-cas-isolés)
  - [Agence de voyages](#agence-de-voyages)
  - [Vidéo Club](#vidéo-club)
  - [Caisse enregistreuse](#-caisse-enregistreuse)
  - [Établissement scolaire](#établissement-scolaire)
  - [Gestion de stock](#gestion-de-stock)


## Modélisation de cas isolés ##

**1.**  Une personne au charge des commandes d\'un magasin passe les
    commandes du système de vente par correspondance. Il doit, pour
    chaque commande, vérifier la disponibilité des articles commandés et
    la solvabilité du client. Modélisez cette situation.

**2.**  Créez le modèle d\'un système permettant de réaliser des
    réservations des billets de train sur l\'internet en utilisant
    include et extend. Le client peut avoir une réduction s\'il coche
    l\'option \"étudiant\".

**3.**  Modélisez le retrait, consultation et dépôt d\'argent d\'un
    distributeur (GAB).

Créez de nouveaux diagrammes (ou modifiez le diagramme existant) pour
représenter chacune de ces situations.

* **3.1.** Inclure l\'authentification du client dans le diagramme précédant
* **3.2.** Considérez que le GAB offre au client l\'option de consulter son
    solde juste après avoir réalisé la retraite d\'argent
* **3.3.** Considérez que les clients qui ne portent pas une carte de notre
    banque peuvent uniquement retirer de l\'argent du distributeur
* **3.4.** Rajouter un opérateur de la banque. Il doit pouvoir recharger le GAB
    de billets, récupérer les cartes avalées et récupérer les chèques


**4.** Modélisez l\'achat d\'un cd sur l\'internet en utilisant différents
    modes de paiement (Paypal et Carte bancaire). Le client peut
    utiliser un code de réduction.

**5.**  Dans une station de service, les clients se servent de l\'essence.
    Il y a aussi un gérant qui gère la station. Créez le modèle
    correspondant à cette situation.

**6.** Notre fournisseur d\'email nous permet d\'attacher de fichiers à nos
    mails. Il doit vérifier la taille et l\'extension de chaque fichier
    et scanner (antivirus) les fichiers .docx et .xlsx

**7.** L\'application d\'un atelier de voitures permet aux mécaniciens
    d\'encoder les données correspondantes aux réparations réalisées sur
    une voiture. Un mécanicien encode des informations concernant les
    pièces utilisées et des informations concernant la procédure de la
    réparation. Si un mécanicien ne dispose pas des pièces nécessaires
    pour faire la réparation, il demande à un chef d\'atelier (aussi
    mécanicien) de les commander. Les commandes de pièces se trouvent
    aussi dans le système informatique.

<br>

## Agence de voyages ##


Une agence de voyages organise des voyages où l\'hébergement se fait en
hôtel. Le client doit disposer d\'un taxi quand il arrive à la gare pour
se rendre à l\'hôtel.

-   Certains clients demandent à l\'agent de voyages d\'établir une
    facture détaillée. Est-ce qu\'on peut créer un cas d\'utilisation à
    partir de cette situation?

-   Le voyage organisé se fait soit par avion, soit par train. Modéliser
    cette possibilité.

<br>

## Vidéo Club ##


Modélisez avec un diagramme de cas d\'utilisation le fonctionnement
d\'un distributeur automatique de DVDs basé sur cette description:

Une personne souhaitant utiliser le distributeur doit avoir une carte.
Les cartes peuvent être achetées et rechargées au magasin qui gère le
distributeur. Le prix de la location est fixé par tranches de 6 heures
(1 euro par tranche). Le fonctionnement du distributeur est le suivant:
le client introduit sa carte; si le crédit est supérieur ou égal à 1
euro, le client peut louer un dvd (si non, il est invité à recharger sa
carte). Le client choisit un DVD et part avec. Pour la rendre au vidéo
club, il l\'introduit dans le distributeur puis insère sa carte. Si le
montant de débit est supérieur au crédit de la carte, le client est
invité à régulariser sa situation au magasin et le système mémorise
qu\'il est débiteur. Le personnel du magasin gère les comptes des
débiteurs. On ne s\'intéresse ici qu\'à la location des DVDs, et non à
la gestion du distributeur par le personnel du magasin.

-   Créez le modèle correspondant

-   Décrivez textuellement deux parmi les cas d\'utilisation


## Caisse enregistreuse ##
--------------------

> Le déroulement normal d\'utilisation d\'une caisse enregistreuse est
> le suivant:

1.  Un client arrive à la caisse avec des articles

2.  Le caissier enregistre le numéro d\'identification de chaque article, ainsi que la quantité si celle-ci est supérieure à 1

3.  La caisse affiche le prix de chaque article et son libellé

4.  Lorsque tous les articles ont été enregistrés, le caissier signale la fin de la vente

5.  La caisse affiche le total des achats

6.  Le client choisit son mode de paiement :

    A.  Liquide : le caissier encaisse l\'argent et la caisse indique le
        > montant éventuel à rendre au client

    B.  Chèque : le caissier note l\'identité du client et la caisse
        > enregistre le montant sur le chèque

    C.  Carte de crédit : un terminal bancaire fait partie de la caisse,
        > il transmet la demande à un centre d\'autorisation
        > multi-banques

7.  La caisse enregistre la vente et imprime un ticket

8.  Le caissier transmet le ticket imprimé au client

9.  Un client peut présenter des coupons de réduction avant le
    > paiement. 

10. Lorsque le paiement est terminé, la caisse transmet les informations
    > relatives aux articles vendus au système de gestion des stocks. 

11. Tous les matins, le responsable du magasin initialise les caisses
    > pour la journée.

**Questions**:

1.  Donnez un diagramme de cas d\'utilisation pour la caisse
    > enregistreuse.

2.  Donnez une description textuelle d\'un cas d\'utilisation.

<br>

## Établissement scolaire ##


Dans un établissement scolaire, on désire gérer la réservation des
salles de cours ainsi que du matériel pédagogique (ordinateur portable
ou/et Vidéo projecteur). Seuls les enseignants sont habilités à
effectuer des réservations (sous réserve de disponibilité de la salle ou
du matériel). Le planning des salles peut quant à lui être consulté par
tout le monde (enseignants et étudiants).Par contre, le récapitulatif
horaire par enseignant (calculé à partir du planning des salles) ne peut
être consulté que par les enseignants. Enfin, il existe pour chaque
formation un enseignant responsable qui seul peut éditer le
récapitulatif horaire pour l'ensemble de la formation. Modéliser cette
situation par un diagramme de cas d'utilisation

<br>

## Gestion de stock ##

Dans un magasin, un commerçant dispose d'un système de gestion de son
stock d'articles, dont les fonctionnalités sont les suivantes :

\- Edition de la fiche d'un fournisseur

\- Possibilité d'ajouter un nouvel article (dans ce cas, la fiche
fournisseur est automatiquement éditée. Si le fournisseur n'existe pas,
on peut alors le créer)

\- Edition de l'inventaire. Depuis cet écran, on a le choix d'imprimer
l'inventaire, d'effacer un article ou d'éditer la fiche d'un article

Modélisez cette situation par un diagramme de cas d'utilisation
