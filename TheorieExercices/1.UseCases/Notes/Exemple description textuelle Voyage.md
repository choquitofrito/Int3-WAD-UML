**Nom: UC01 - Réserver un billet de train**

**Description:** Le client réserve un billet de train

**Acteur principal:** Client

**Précondition:** --

**Postcondition:** La réservation est faite 

**Enchainement nominal:**

1) Appel au cas d'utilisation **UC02. Rechercher le trajet**
2) Appel au cas d'utilisation **UC03. Saisir les cordonnées**
3) Appel au cas d'utilisation **UC04. Payer**
   
<br>

**Enchainement alternatif**

**A1**: le client choisi de recevoir un mail
L'enchainement démarre après le point 3)
3.1) Envoyer un mail de confirmation au client

La sequence nominale reprend après le point 3)

<br>

**Enchainement d'exception**

**E1**: le paiement est réfusé dans le cas **UC04. Payer**<br>
L'enchainement démarre après le point 3)<br> 
3.1) La réservation n'a pas lieu<br>
3.2) On affiche un message au client de refus du paiement

**E2**: il y a un accident nucléaire<br>
L'application plante et c'est la fin du monde<br> 



