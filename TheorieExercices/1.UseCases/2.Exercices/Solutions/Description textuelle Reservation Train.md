# Nom: UC01 - Reserver billet

**Description**: Le client fait la réservation d'un billet
Acteur principal: Client

**Précondition**:

**Postcondition**: 

**Enchainement nominal**:

1. Appel au cas UC02 - Chercher Trajet
2. Appel au cas UC03 - Choisir type billet
3. Appel au cas UC04 - Payer

**Enchainement d'exception:**

*E1. Échec dans le paiement (UC04)*

L'enchaiment demarre après 3:

4. Renvoyer à la page Paiement 
5. Appel au cas UC04 - Payer
   





